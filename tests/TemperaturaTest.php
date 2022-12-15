<?php

require('class/Temperatura.class.php');

use PHPUnit\Framework\TestCase;

final class TemperaturaTest extends TestCase
{
    public function testMinTempOnDay(): void
    {

        $objTemp = new Temperatura;

        $arrMinTemp = $objTemp->minTempOnDay();

        $this->assertEquals(
            [
                "day" => 9,
                "maxima" => 86,
                "minima" => 32
            ],
            $arrMinTemp
        );
    }

    public function testDiffMaxMinTempOnDay(): void
    {

        $objTemp = new Temperatura;

        $nr_diff_Temp = $objTemp->diffMaxMinTempOnDay();

        $this->assertEquals(
            54,
            $nr_diff_Temp
        );
    }
}