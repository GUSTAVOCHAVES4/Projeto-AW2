<?php
class Reviews {
    private $id;
    private $name;
    private $comment;
    private $rating;

    public function __construct($id, $name, $comment, $rating) {
        $this->id = $id;
        $this->name = $name;
        $this->comment = $comment;
        $this->rating = $rating;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getComment() {
        return $this->comment;
    }

    public function getRating() {
        return $this->rating;
    }
}
?>