<?php

function currency($coin) {

// init request with curl

$ch = curl_init("https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL");

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res_curl = curl_exec($ch);

// verify request
if (curl_error($ch)) {

    echo curl_error($ch);
    
} else {
    $response = json_decode($res_curl, true);

        switch($coin) {
            case "BRL":
                $currency = $response["USDBRL"]["high"];
                break;
            case "EUR":
                $currency = $response["EURBRL"]["high"];
                break;
            case "BTC":
                $currency = $response["BTCBRL"]["high"];
                break;
        }   
}

// close connection
curl_close($ch);
    
return $currency;
};