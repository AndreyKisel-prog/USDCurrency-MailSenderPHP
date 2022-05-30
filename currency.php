<?php

function get_currency_USD()
{
    $ch = curl_init();
    // c сайта центробанка
    curl_setopt($ch, CURLOPT_URL, 'https://www.cbr-xml-daily.ru/daily_json.js');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $out = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $out['Valute']['USD']['Value'];
}
