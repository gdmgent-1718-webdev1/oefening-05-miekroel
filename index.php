<?php


function testLeeftijd ($leeftijd)
{
if ($leeftijd < 16){
    return "${leeftijd} is te jong voor deze film";
}
elseif ($leeftijd < 18){
    return "${leeftijd}, je hebt ouderlijk toezicht nodig.";
}
elseif($leeftijd >= 18){
    return "Je bent al ${leeftijd}. Geniet van de film";
}

};

for ($i = 12; $i < 25; $i++){
    echo testLeeftijd($i), PHP_EOL;
}

