<?php
$url = "https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=1";
$response = file_get_contents($url);
$catFacts = json_decode($response, true);
if (isset($catFacts['text'])) {
    echo $catFacts['text'] . PHP_EOL;
} else {
    echo "cant get cat fact." . PHP_EOL;
}