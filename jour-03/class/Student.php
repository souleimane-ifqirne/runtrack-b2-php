<?php

class Student {
    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?DateTime $birthdate;
    private ?string $gender;

    public function __construct($id=false, $grade_id=false, $email=false, 
    $fullname=false, $birthdate=false, $gender=false) {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }
    public function getId(): ?int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getEmail(): ?string {
        return $this->email;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function getGrade_id(): ?int {
        return $this->grade_id;
    }
    public function setGrade_id(int $grade_id) {
        $this->grade_id = $grade_id;
    }
    public function getFullname(): ?string {
        return $this->fullname;
    }
    public function setFullname(string $fullname) {
        $this->fullname = $fullname;
    }
    public function getBirthdate(): ?DateTime {
        return $this->birthdate;
    }
    public function setBirthdate(DateTime $birthdate) {
        $this->birthdate = $birthdate;
    }
    public function getGender(): ?string {
        return $this->gender;
    }
    public function setGender(string $gender) {
        $this->gender = $gender;
    }
}