<?php
require '../vendor/autoload.php';

use Nico\Avatar\Shape\Avatar;
use Nico\Avatar\Svg\Svg ;

/*dump($_POST);*/
/*$avatar = new Svg();
$shapes = $avatar->display();*/

if (!empty($_POST)) {

    $couleurs = strip_tags(trim($_POST['couleurs']));
    $taille = strip_tags(trim($_POST['taille']));

    $avatar = new Avatar($couleurs, $taille);
    $svgModel= new Svg(200,200);
    $svg =$svgModel->show($avatar);

}else{
    $avatar = new Avatar();
    $svgModel= new Svg(200,200);
    $svg =$svgModel->show($avatar);


}
if(empty($_GET)) {
    require '../templates/home.phtml';
}else{

    echo $svg;
}



