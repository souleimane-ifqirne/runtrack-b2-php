<?php
class Grade {
    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?DateTime $year;

    public function __construct($id=false, $room_id=false, $name=false, $year=false) {
        $this->id=$id;
        $this->room_id=$room_id;
        $this->name=$name;
        $this->year=$year;
    }
    public function getId(): ?int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getRoomid(): ?int {
        return $this->room_id;
    }
    public function setRoomid(int $room_id) {
        $this->room_id = $room_id;
    }
    public function getName(): ?string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function getYear(): ?DateTime {
        return $this->year;
    }
    public function setYear(DateTime $year) {
        $this->year = $year;
    }
}