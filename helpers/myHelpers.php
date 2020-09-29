<?php

function dd($param){
var_dump($param);
    exit();
}

function loadWhoops()
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    return $whoops;
}

/**
 * @param array $numeros
 * @return Float
 * Calcula la mitjana d'un array de numeros
 */
function mitjana(Array $numeros):Float
{

}

/**
 * @param array $diccionari
 * @param $quantitat
 * @return array
 * Torna un array de quantitat elements triats a l'atzar
 */
function triaParaules(Array $diccionari,$quantitat):Array
{

}

/**
 * @param array $usuarisValids
 * @param $user
 * @param $password
 * @return bool
 * Torna true si el usuari i el password es troben a usuarisValids
 * Torna false en cas contrari
 */
function login(Array $usuarisValids,$user,$password):bool
{

}