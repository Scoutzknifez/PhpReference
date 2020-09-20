<?php

class Person {

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString() {
        return $this->firstName . " " . $this->lastName;
    }
}

class Student extends Person {
    public function __construct($first, $last, $gpa) {
        parent::__construct($first, $last);
        $this->gpa = $gpa;
    }

    public function __toString() {
        return parent::__toString() . " " . $this->gpa;
    }
}