<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$auth = "bearer $2y$10$rJXC81mZpfZpOOuzHWoxJuU8TGyQEx9b6HJIz6HyP21vpCYRFPdOG";
$res = $client->post('http://innovagen.pacific-hs.com/demo/pacific-gbl/api.php/patient/a/1', [
  'headers' => [
      'Authorization' => $auth,
      'Content-Type' => 'application/json'
    ],
   'body' => '
   {

     "ident_value": "12345678",
     "ident_type": "1",
     "sex_type": "1",
     "marital_type": "C",
     "date_of_birth": "1980/02/15",
     "phonesPatCr": {
       "1": {
         "type_phone": "1",
         "no_phone": "3000000000"
       }
     },
     "emailsPatCr": {
       "1": {
         "email_type": "1",
         "email_value": "jhon@gmail.com"
       }
     },
     "addressesPatCr": {
       "1": {
         "zone": "62",
         "address": "calle ",
         "city": "Popayan"
       }
     },
     "patient": {
       "additionals": {
         "2": "abc",
         "3": "def"
       }
     },
     "companion": {
       "given_1": "Maria Doe",
       "phone_1": "30000000000"
     },
     "responsable": {
       "given_1": "Al Doe",
       "phone_1": "2000000",
       "kinship": "1",
       "ident_type": "1",
       "ident_value": "1",
       "address": "1"
     }
   }
   '
]);

echo $res->getBody();

?>
