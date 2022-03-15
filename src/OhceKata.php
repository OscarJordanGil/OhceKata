<?php

namespace OscarJordanGil\OhceKata;

class OhceKata
{

    public function __construct()
    {
    }

    public function execute(String $word){
        if ($word == "Stop!"){
            return "Adios" . $word;
        }else{
            return strrev($word);
        }
    }
}