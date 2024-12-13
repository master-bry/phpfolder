
<?php
    class Person {
         var $name;
        function set_name($new_name) {
$this->name = $new_name;
}
       function get_name() {
	return $this->name;
       }
  }
  $person = new Person();
$person->set_name("NGOWI JR");
echo "Name: " . $person->get_name();

?>