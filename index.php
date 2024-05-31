<?php

// importo le classi
require_once 'models/genre.php';
require_once 'models/movie.php';

// istanza movie
$movie1 = new Movie();
$movie1->setTitle('The Fast and the Furious: Tokyo Drift');
$movie1->setYear(2006);
$movie1->setDirector("Justin Lin");
$movie1->setDescription("The Fast and the Furious: Tokyo Drift è il terzo film della serie 'Fast & Furious', uscito nel 2006 e diretto da Justin Lin. Il film segna un cambiamento significativo rispetto ai due precedenti capitoli, sia per ambientazione che per personaggi.");

var_dump($movie1);