<?php 

class Futebol 
{
    public $arrGolsMarcados;

    public function __construct()
    {
        $this->arrGolsMarcados = [            
            [ "ds_nome_time" => "Arsenal", "nr_gols_marcados" => 79,  "nr_gols_tomados" => 87 ],     
            [ "ds_nome_time" => "Liverpool", "nr_gols_marcados" => 67,  "nr_gols_tomados" => 80 ],     
            [ "ds_nome_time" => "Manchester_U", "nr_gols_marcados" => 87,  "nr_gols_tomados" => 77 ],     
            [ "ds_nome_time" => "Newcastle", "nr_gols_marcados" => 74,  "nr_gols_tomados" => 71 ],     
            [ "ds_nome_time" => "Leeds", "nr_gols_marcados" => 53,  "nr_gols_tomados" => 66 ],     
            [ "ds_nome_time" => "Chelsea", "nr_gols_marcados" => 66,  "nr_gols_tomados" => 64 ],     
            [ "ds_nome_time" => "West_Ham", "nr_gols_marcados" => 48,  "nr_gols_tomados" => 53 ],     
            [ "ds_nome_time" => "Aston_Villa", "nr_gols_marcados" => 46,  "nr_gols_tomados" => 50 ],     
            [ "ds_nome_time" => "Tottenham", "nr_gols_marcados" => 49,  "nr_gols_tomados" => 50 ], 
            [ "ds_nome_time" => "Blackburn", "nr_gols_marcados" => 55,  "nr_gols_tomados" => 46 ],     
            [ "ds_nome_time" => "Southampton", "nr_gols_marcados" => 46,  "nr_gols_tomados" => 45 ],     
            [ "ds_nome_time" => "Middlesbrough", "nr_gols_marcados" => 35,  "nr_gols_tomados" => 45 ],     
            [ "ds_nome_time" => "Fulham", "nr_gols_marcados" => 36,  "nr_gols_tomados" => 44 ],     
            [ "ds_nome_time" => "Charlton", "nr_gols_marcados" => 38,  "nr_gols_tomados" => 44 ],     
            [ "ds_nome_time" => "Everton", "nr_gols_marcados" => 45,  "nr_gols_tomados" => 43 ],     
            [ "ds_nome_time" => "Bolton", "nr_gols_marcados" => 44,  "nr_gols_tomados" => 40 ],     
            [ "ds_nome_time" => "Sunderland", "nr_gols_marcados" => 29,  "nr_gols_tomados" => 40 ],     
            [ "ds_nome_time" => "Ipswich", "nr_gols_marcados" => 41,  "nr_gols_tomados" => 36 ],     
            [ "ds_nome_time" => "Derby", "nr_gols_marcados" => 33,  "nr_gols_tomados" => 30 ],     
            [ "ds_nome_time" => "Leicester", "nr_gols_marcados" => 30,  "nr_gols_tomados" => 28 ],     
        ];
    }

    public function timeComMenorDiferencaDeGols() 
    {
        $nr_gols_marcados = INF;
        $nr_gols_tomados = 0;

        foreach($this->arrGolsMarcados as $arrGolMarcado) {
            if($arrGolMarcado['nr_gols_tomados'] < $nr_gols_marcados) {
                $nr_gols_marcados = $arrGolMarcado['nr_gols_marcados'];
                $nr_gols_tomados = $arrGolMarcado['nr_gols_tomados'];
                $diferenca_gols = $nr_gols_marcados - $nr_gols_tomados;
                
                if($diferenca_gols == 1) {
                    $ds_nome_time = $arrGolMarcado['ds_nome_time'];   
                }
            }
        }

        return [
            "ds_nome_time" => $ds_nome_time,
        ];
    }

    // public function timeComMaiorDiferencaDeGols() 
    // {
    //     $nr_gols_marcados = INF;
    //     $nr_gols_tomados = 0;

    //     foreach($this->arrGolsMarcados as $arrGolMarcado) {
    //         if($arrGolMarcado['nr_gols_tomados'] < $nr_gols_marcados) {
    //             $nr_gols_marcados = $arrGolMarcado['nr_gols_marcados'];
    //             $nr_gols_tomados = $arrGolMarcado['nr_gols_tomados'];
    //         }
    //     }

    //     return [
    //         "ds_nome_time" => $nr_gols_marcados,
    //     ];
    // }
}