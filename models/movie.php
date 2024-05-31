<?php

class Movie {

    // attributi
    private string $title;
    private int $year;
    private string $director;
    private string $description;

    // gestisco dato in entrata
    public function setTitle(string $title) {
        if (strlen($title) < 2) {
            throw new Exception("Title is too short, it must have at least 2 digits");
        }

        $this->title = $title;
    }

    public function setYear(int $year) {
        if ($year < 1895) {
            throw new Exception("Year in invalid, first projection was in 1895 :D");
        }

        $this->year = $year;
    }

    public function setDirector(string $director) {
        if (strlen($director) < 2) {
            throw new Exception("Invalid director input, needed at least 2 digits");
        }

        $this->director = $director;
    }

    public function setDescription(string $description) {
        if (strlen($description) > 300) {
            throw new Exception("description is too long, max. 300 characters");
        }

        $this->description = $description;
    }
}