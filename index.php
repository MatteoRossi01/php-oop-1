<?php

class Movie {

    public $name;
    public $leadingActor;
    public $year;
    public $director;
    public $genre;

    public function __construct($name, $year) {

        $this->name = $name;
        

        if(is_numeric($year)){
            $this->year = $year;
        } else{
            $this->year = "<em> ' Valore non valido! ' </em>";
        }

    }

    public function getNameYear() {
        return $this->name . ' ' . $this->year;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }
        
}

$forrestGump = new Movie('Forrest Gump', '1994');
$forrestGump->leadingActor = 'Tom Hanks';
$forrestGump->director = 'Robert Zemeckis';
$forrestGump->setGenre('Commedia, Drammatico');

echo "<h1>" . $forrestGump->getNameYear() . "</h1>";
echo "<p> L'attore principale è: " . $forrestGump->leadingActor . "</p>";
echo "<p> Il regista è: " . $forrestGump->director . "</p>";
echo "<p> Il genere è: " . $forrestGump->getGenre(). "</p>";

$invictus = new Movie('invictus', '2009');
$invictus->leadingActor = 'Morgan Freeman';
$invictus->director = 'Clint Eastwood';
$invictus->setGenre('Biografico');

echo "<h1>" . $invictus->getNameYear() . "</h1>";
echo "<p> L'attore principale è: " . $invictus->leadingActor . "</p>";
echo "<p> Il regista è: " . $invictus->director . "</p>";
echo "<p> Il genere è: " . $invictus->getGenre(). "</p>";