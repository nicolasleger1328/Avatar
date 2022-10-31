<?php

namespace Nico\Avatar;

use Nico\Avatar\Shape\Avatar;
use Nico\Avatar\Svg\Svg;

class AvatarFactory{
    

    public static function new(int $nbreCouleurs=3, ?int $nbreTaille=5)
    {
        $avatar = new Avatar($nbreCouleurs, $nbreTaille);
        $svgModel= new Svg(200,200);
        return $svgModel->show($avatar);
    }
}