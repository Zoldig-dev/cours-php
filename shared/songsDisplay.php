<?php

include_once('models/artist.php');
include_once('models/albums.php');
include_once('models/playlists.php');
include_once('models/songs.php');
include_once('models/style.php');
include_once('models/users.php');

$songs = [];

$song1 = new Songs();
$song1->setName('Fight fire with fire');
$song1->setDuree('00:04:45');
$song1->setPrix(0.99);

$song2 = new Songs();
$song2->setName('Ride the lightning');
$song2->setDuree('00:06:37');
$song2->setPrix(0.99);

$song3 = new Songs();
$song3->setName('For whom the bell tolls');
$song3->setDuree('00:05:10');
$song3->setPrix(0.99);

$song4 = new Songs();
$song4->setName('Fade to black');
$song4->setDuree('00:06:57');
$song4->setPrix(0.99);

$song5 = new Songs();
$song5->setName('Trapped under ice');
$song5->setDuree('00:04:04');
$song5->setPrix(0.99);

$song6 = new Songs();
$song6->setName('Escape');
$song6->setDuree('00:04:24');
$song6->setPrix(0.99);

$song7 = new Songs();
$song7->setName('Creeping death');
$song7->setDuree('00:06:36');
$song7->setPrix(0.99);

$song8 = new Songs();
$song8->setName('The call of Ktulu');
$song8->setDuree('00:08:53');
$song8->setPrix(0.99);

$song9 = new Songs();
$song9->setName('The ringer');
$song9->setDuree('00:05:38');
$song9->setPrix(0.99);

$songs[] = $song9;
$songs[] = $song8;
$songs[] = $song7;
$songs[] = $song6;
$songs[] = $song5;
$songs[] = $song4;
$songs[] = $song3;
$songs[] = $song2;
$songs[] = $song1;

$album1 = new Albums();
$album1->addSongs($song2);
$album1->addSongs($song4);
$album1->addSongs($song8);

$metallica = new Artist();
$metallica->setName('Metallica');
$metallica->setNationality('American');
$metallica->setYear(1981);
$metallica->addAlbums($album1);

$heavyMetal = new Style();
$heavyMetal->setName('Heavy Metal');
$trashMetal = new Style();
$trashMetal->setName('Trash Metal');
$hardRock = new Style();
$hardRock->setName('Hard Rock');

$song2->addArtistes($metallica);
?>