<?php

require_once('vendor/autoload.php');

//Muda para o horário brasileiro
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

//Agora
echo Carbon::now(). '<br>';

//Adiona um dia
echo Carbon::now()->addDay() . '<br>';

//Subtrair uma semana
echo Carbon::now()->subWeek() . '<br>';

//Adiciona quatro anos
echo "Próximas olimíadas:". Carbon::createFromDate(2024)->addYears(4)->year . '<br>';

//Idade de alguém
echo 'Sua idade é:' . Carbon::createFromDate(2007,11,27)->age. '<br>';

//Final de semana?
if(Carbon::now()->isWeekend()){
    echo 'Festa';
}
else{
    echo 'Aula';
}