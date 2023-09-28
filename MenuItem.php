<?php
class MenuItem {
    private $name;
    private $description;
    private $price;

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
?>