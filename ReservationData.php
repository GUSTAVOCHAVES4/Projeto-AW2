<?php
class Reservation {
    private $id; 
    private $name; 
    private $email; 
    private $numberOfPeople; 
    private $datetime;

    public function __construct($name, $email, $numberOfPeople, $datetime) {
        $this->name = $name;
        $this->email = $email;
        $this->numberOfPeople = $numberOfPeople;
        $this->datetime = $datetime;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNumberOfPeople() {
        return $this->numberOfPeople;
    }

    public function getDatetime() {
        return $this->datetime;
    }
}
?>
