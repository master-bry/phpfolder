<?php
require_once('Fruit.php');
class Mango extends Fruit {
    
    public function set_name($name) {
        parent::set_name('Mango: ' . $name);
    }


    public function get_name() {
        return 'Fruit Name: ' . parent::get_name();
    }
}


$Mango = new Fruit('Mango', 'yellow');
echo 'Fruit Name: ' . $Mango->get_name()."</br>";
echo 'Fruit  Color: '. $Mango->get_color()."</br>";
?>