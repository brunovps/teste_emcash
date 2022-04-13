<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rectangle;
use App\Models\Triangle;

class FormsController extends Controller
{
    public function triangle(Request $request)
    {
        $base = $request->base;
        $height = $request->height;

        $triangle = new Triangle;
        
        $area_triangle = $triangle->getAreaTriangle($base, $height);
        
        $triangle->base = $base;
        $triangle->height = $height;
        $triangle->area = $area_triangle;
        $triangle->save();
    }

    public function rectangle(Request $request)
    {
        $base = $request->base;
        $height = $request->height;

        $rectangle = new Rectangle;
        
        $area_rectangle = $rectangle->getAreaRectangle($base, $height);
        
        $rectangle->base = $base;
        $rectangle->height = $height;
        $rectangle->area = $area_rectangle;
        $rectangle->save();
    }

    public function result()
    {
        $triangles = Triangle::all();
        $rectangles = Rectangle::all();
        $result_triangle = 0;
        $result_rectangle = 0;
        $final_result = [];

        foreach($triangles as $triangle){
            $result_triangle += $triangle->area;
        }

        foreach($rectangles as $rectangle){
            $result_rectangle += $rectangle->area;
        }

        $final_result[0] = "Área total dos polígonos cadastrados: ".$result_triangle + $result_rectangle;
        
        return $final_result;
    }
}
