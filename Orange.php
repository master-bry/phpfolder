<?php
require_once('Fruit.php');
class Orange extends Fruit {
    
    public function set_name($name) {
        parent::set_name('Orange: ' . $name);
    }


    public function get_name() {
        return 'This is : ' . parent::get_name();
    }
}
$Orange = new Fruit('Orange', 'orange');
echo 'Fruit Name: ' . $Orange->get_name()."</br>";
echo 'Fruit  Color: '. $Orange->get_color()."</br>";



?>