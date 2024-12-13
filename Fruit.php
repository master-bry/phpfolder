<?php
class Fruit {

    private $name;
    private $color;


    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }


    public function set_name($name) {
        $this->name = $name;
    }
    public function set_color($color) {
        $this->color = $color;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_color(){
        return $this->color;
    }
}
?>