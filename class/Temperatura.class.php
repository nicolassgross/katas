<?php 

class Temperatura 
{
    public $arrTemperaturas;

    public function __construct()
    {
        $this->arrTemperaturas = [            
            [ "day" => 1, "maxima" => 88,  "minima" => 59 ],     
            [ "day" => 2, "maxima" => 79,  "minima" => 63 ],     
            [ "day" => 3, "maxima" => 77,  "minima" => 55 ],     
            [ "day" => 4, "maxima" => 77,  "minima" => 59 ],     
            [ "day" => 5, "maxima" => 90,  "minima" => 66 ],     
            [ "day" => 6, "maxima" => 81,  "minima" => 61 ],     
            [ "day" => 7, "maxima" => 73,  "minima" => 57 ],     
            [ "day" => 8, "maxima" => 75,  "minima" => 54 ],     
            [ "day" => 9, "maxima" => 86,  "minima" => 32 ],  //menor   
            [ "day" => 10, "maxima" => 84,  "minima" => 64 ],     
            [ "day" => 11, "maxima" => 91,  "minima" => 59 ],     
            [ "day" => 12, "maxima" => 88,  "minima" => 73 ],     
            [ "day" => 13, "maxima" => 70,  "minima" => 59 ],     
            [ "day" => 14, "maxima" => 61,  "minima" => 59 ],     
            [ "day" => 15, "maxima" => 64,  "minima" => 55 ],     
            [ "day" => 16, "maxima" => 79,  "minima" => 59 ],     
            [ "day" => 17, "maxima" => 81,  "minima" => 57 ],     
            [ "day" => 18, "maxima" => 82,  "minima" => 52 ],     
            [ "day" => 19, "maxima" => 81,  "minima" => 61 ],     
            [ "day" => 20, "maxima" => 84,  "minima" => 57 ],     
            [ "day" => 21, "maxima" => 86,  "minima" => 59 ],     
            [ "day" => 22, "maxima" => 90,  "minima" => 64 ],     
            [ "day" => 23, "maxima" => 90,  "minima" => 68 ],     
            [ "day" => 24, "maxima" => 90,  "minima" => 77 ],     
            [ "day" => 25, "maxima" => 90,  "minima" => 72 ],     
            [ "day" => 26, "maxima" => 97,  "minima" => 64 ],     
            [ "day" => 27, "maxima" => 91,  "minima" => 72 ],     
            [ "day" => 28, "maxima" => 84,  "minima" => 68 ],     
            [ "day" => 29, "maxima" => 88,  "minima" => 66 ],     
            [ "day" => 30, "maxima" => 90,  "minima" => 45 ]            
        ];
    }

    public function minTempOnDay() {
        
        $temperatura_minima = INF;
        $temperatura_maxima = 0;
        $day = 0;

        foreach($this->arrTemperaturas as $arrMenorTemp) {
            if($arrMenorTemp['minima'] < $temperatura_minima) {
                $temperatura_maxima = $arrMenorTemp['maxima'];
                $temperatura_minima = $arrMenorTemp['minima'];
                $day =  $arrMenorTemp['day'];
            }
        }

        return [
            "day" => $day,
            "maxima" => $temperatura_maxima,
            "minima" => $temperatura_minima
        ];
    }

    public function diffMaxMinTempOnDay() 
    {
        $arrMinTempDay = $this->minTempOnDay();

        $temperatura_minima = $arrMinTempDay['minima'];
        $temperatura_maxima = $arrMinTempDay['maxima'];

        return $temperatura_maxima - $temperatura_minima;
    }
}