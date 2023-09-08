<?php

class Room {
    private ?int $id;
    private ?int $floor_id;
    private ?string $name;
    private ?int $capacity;

    public function __construct($id=false, $floor_id=false, $name=false, $capacity=false) {
        $this->id=$id;
        $this->floor_id=$floor_id;
        $this->name=$name;
        $this->capacity=$capacity;
    }
    public function getId(): ?int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getFloorid(): ?int {
        return $this->floor_id;
    }
    public function setFloorid(int $floor_id) {
        $this->floor_id = $floor_id;
    }
    public function getName(): ?string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function getCapacity(): ?int {
        return $this->capacity;
    }
    public function setCapacity(int $capacity) {
        $this->capacity = $capacity;
    }
}