<?php

// importo le classi
require_once 'models/genre.php';
require_once 'models/movie.php';

// istanza movie
$movie2 = new Movie();
$movie2->setTitle('Warrior');
$movie2->setYear(2011);
$movie2->setDirector("Gavin O'Connor");
$movie2->setDescription("Warrior è un film del 2011 diretto da Gavin O'Connor. È un dramma sportivo che segue due fratelli, Tommy (Tom Hardy) e Brendan Conlon (Joel Edgerton), che partecipano a un torneo di arti marziali miste. Il film esplora temi di redenzione, famiglia e lotta interiore.");
$genre2 = new Genres(["Drama", "Sport", "Action"]);

// istanza movie
$movie1 = new Movie();
$movie1->setTitle('The Fast and the Furious: Tokyo Drift');
$movie1->setYear(2006);
$movie1->setDirector("Justin Lin");
$movie1->setDescription("The Fast and the Furious: Tokyo Drift è il terzo film della serie 'Fast & Furious', uscito nel 2006 e diretto da Justin Lin. Il film segna un cambiamento significativo rispetto ai due precedenti capitoli, sia per ambientazione che per personaggi.");
$genre1 = new Genres(["Action", "Crime", "Thriller"]);

var_dump($movie2);
var_dump($genre2);
echo "<hr>";
var_dump($movie1);
var_dump($genre1);