<?php


namespace Nico\Avatar\lib;


class Couleurs
{
    public static function randColor(int $couleur) : array
    {
        for($i =0; $i<$couleur; $i++){
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $color[] = "#".dechex($r) . dechex($g) . dechex($b);
        }
        return $color;
    }
}