<?php

namespace Nico\Avatar\Shape;

class RectangleTest
{
    private int     $x=0;
    private int     $y=0;
    private int     $size;
    private string  $color;

    /**
     * @param int $x
     * @param int $y
     * @param int $size
     * @param string $color
     */
    public function __construct( string $color, int $x, int $y, int $size=1)
    {
        $this->x = $x;
        $this->y = $y;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function draw(){
        return '<rect x="'.$this->x.'" y="'.$this->y.'" width="'.$this->size.'" height="'.$this->size.'" fill="'.$this->color.'"/>';
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

/*    public function __clone()
    {
        $this->x = $this->x;
        $this->y = $this->y ;
        $this->size = $this->size ;
        $this->color = $this->color ;
    }*/

}