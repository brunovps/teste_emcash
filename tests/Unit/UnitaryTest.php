<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Triangle;
use App\Models\Rectangle;

class UnitaryTest extends TestCase
{
    public function test_get_area_triangle()
    {
        $triangle = new Triangle;
        $base = 10;
        $height = 5;
        $area = $triangle->getAreaTriangle($base, $height);
        $this->assertEquals(25, $area);
    }

    public function test_get_area_rectangle()
    {
        $rectangle = new Rectangle;
        $base = 10;
        $height = 5;
        $area = $rectangle->getAreaRectangle($base, $height);
        $this->assertEquals(50, $area);
    }
}
