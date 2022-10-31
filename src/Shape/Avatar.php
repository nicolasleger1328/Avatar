<?php

namespace Nico\Avatar\Shape;


use Nico\Avatar\lib\Couleurs;


class Avatar   {

    private array $shapes;
    private int $couleurs;
    private int $taille;
    

    public function __construct($couleurs=3, $taille=5)
    {

            $this->couleurs=$couleurs;
            $this->taille = $taille;
            $colorTab = Couleurs::randColor($couleurs);
/*            dump($colorTab);
            dump($_POST);*/
            $x = 0;
            $y = 0;
            for ($i = 0; $i < $taille / 2; $i++) {


                if (isset($rect)) {

                    $x = ($i);
                }

                $y = 0;

                for ($j = 0; $j < $taille; $j++) {

                    $rect = new RectangleTest( $colorTab[array_rand($colorTab)], $x, $y);


                   /* $dessin = $rect->draw();*/
                    $dessin = $rect;
                    $this->shapes[] = $dessin;
                    if ($i + 1 <= $taille / 2) {
                        $rect1 = clone $rect;
                        $rect1->setX($taille - ($i + 1));
                       /* $dessin = $rect->draw();*/
                        $dessin = $rect1;
                        $this->shapes[] = $dessin;
                    }
                    $y = $j+1;
                }


            }


    }

    public function display(){
        dump($this->shapes);
        return $this->shapes;
    }

    /**
     * @param array $shapes
     */
    public function setShapes(array $shapes): void
    {
        $this->shapes = $shapes;
    }

    /**
     * @return array
     */
    public function getShapes(): array
    {
        return $this->shapes;
    }

    /**
     * @return int
     */
    public function getTaille(): int
    {
        return $this->taille;
    }

    /**
     * @param int $taille
     */
    public function setTaille(int $taille): void
    {
        $this->taille = $taille;
    }
}
