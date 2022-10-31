<?php


namespace Nico\Avatar\Svg;


use Nico\Avatar\Shape\Avatar;

class Svg
{

    private int $height;
    private int $width;

    public function __construct($height=300, $width=300)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function show(Avatar $avatar): string
    {

        $svg = '<svg width="'.$this->width.'" height="'.$this->height.'" version="1.1" baseProfile="full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events">';
        foreach ($avatar->getShapes() as $rect){
            $x = $rect->getX()*($this->width/$avatar->getTaille());
            $y = $rect->getY()*($this->height/$avatar->getTaille());
            $width = $rect->getSize()*($this->width/$avatar->getTaille());
            $height = $rect->getSize()*($this->height/$avatar->getTaille());

                /*dump($rect);*/
            $svg.= '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" fill="'.$rect->getColor().'"/>';
        }
        $svg .= '</svg>';
        return $svg;

    }
}