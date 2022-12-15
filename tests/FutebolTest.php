<?php

require('class/Futebol.class.php');

use PHPUnit\Framework\TestCase;

final class FutebolTest extends TestCase
{
    public function testVerificaTimeComMenorDiferencaDeGols(): void
    {

        $objFutebol = new Futebol;

        $arrMinDiff = $objFutebol->timeComMenorDiferencaDeGols();

        $this->assertEquals(
            [
                "ds_nome_time" => 'Southampton',
            ],
            $arrMinDiff
        );
    }
    
    // public function testVerificaTimeComMaiorDiferencaDeGols(): void
    // {

    //     $objFutebol = new Futebol;

    //     $arrMinDiff = $objFutebol->timeComMaiorDiferencaDeGols();
    //     print_r($arrMinDiff);

    //     $this->assertEquals(
    //         [
    //             "ds_nome_time" => 'Southampton',
    //         ],
    //         $arrMinDiff
    //     );
    // }
}