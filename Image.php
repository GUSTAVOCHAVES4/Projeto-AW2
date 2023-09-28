<?php
class Image {
    private $url;
    private $description;

    public function __construct($url, $description) {
        $this->url = $url;
        $this->description = $description;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getDescription() {
        return $this->description;
    }
}
?>