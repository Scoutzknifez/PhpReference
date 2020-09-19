<?php

class DataWrapper {

    public function __construct() {
        $this->a = "Test";
    }

    public function __toString() {
        return $this->a;
    }
}