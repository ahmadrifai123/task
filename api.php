
<?php
function convertCurrency(){
  $apikey = 'fe25711d79135e058c37';

  // $from_Currency = urlencode($from_currency);
  // $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";

  $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=USD_IDR&compact=ultra&apiKey=fe25711d79135e058c37");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  // $total = $val * 50;
  // return number_format($total, 2, '.', '');
  echo json_encode($obj);
}

function getCountry(){
  // $apikey = 'fe25711d79135e058c37';
  $json = file_get_contents("https://free.currconv.com/api/v7/countries?apiKey=fe25711d79135e058c37");
  $obj = json_decode($json, true);

  // $val = floatval($obj["$query"]);
 dd($obj);

  // $total = $val * $amount;
  // return number_format($total, 2, '.', '');
}

//uncomment to test
//echo convertCurrency(10, 'USD', 'PHP');
?>