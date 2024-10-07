<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/Equipo.php';
require_once '../../modelo/Jugador.php';

$resp= new ConsultarTodosRespuesta();

$j1= New Jugador();
$j1->Nombre = 'Pedro Gonzalez';
$j1->Posicion = 'Delantero'
$j1->Debut = '17 de agosto de 2005';
$j1->Goles = 10

$j2= New Jugador();
$j2->Nombre = 'Daniel Sanchez';
$j2->Posicion = 'Delantero'
$j2->Debut = '16 de diciembre de 2016';
$j2->Goles = 0

$j3= New Jugador();
$j3->Nombre = 'Juan Perez';
$j3->Posicion = 'Defensor'
$j3->Debut = '17 de septiembre de 2017';
$j3->Goles = 10

$j4= New Jugador();
$j4->Nombre = 'Ignacio Gonzalez';
$j4->Posicion = 'Arquero'
$j4->Debut = '20 de enero de 2020';
$j4->Goles = 1

$j5= New Jugador();
$j5->Nombre = 'Ariel Consentino';
$j5->Posicion = 'Mediocampista'
$j5->Debut = '16 de diciembre 2001';
$j5->Goles = 2

$j6= New Jugador();
$j6->Nombre = 'Diego Dominguez';
$j6->Posicion = 'Defensor';
$j6->Debut = '15 de febrero 2018';
$j6->Goles = 5

$j7= New Jugador();
$j7->Nombre = 'Gustavo Santos';
$j7->Posicion = 'Delantero';
$j7->Debut = '16 de diciembre';
$j7->Goles = 3

$e1= New Equipo();
$e1->Id = 1
$e1->Nombre = 'Equipo 1 ';
$e1->Fundacion ='3 de noviembre de 1903 (118 años)';
$e1->Presidente = 'Javer Perez';
$e1->ListJudadores[]= $j1;
$e1->ListJudadores[]= $j2;
$e1->ListJudadores[]= $j3;

$e2= New Equipo();
$e2->Id = 1
$e2->Nombre = 'Equipo 1 ';
$e2->Fundacion = '5 de abril de 1923';
$e2->Presidente = 'Ignacio Quinteros';
$e2->ListJudadores[]= $j4;
$e2->ListJudadores[]= $j5;
$e2->ListJudadores[]= $j6;
$e2->ListJudadores[]= $j7;

$resp->ListaEquipos[]=$e1;
$resp->ListaEquipos[]=$e2;




echo json_encode ($resp);