<?php
require_once("lib/nusoap/nusoap.php");
 
$client = new soapclient("http://localhost/nusoaptest.php?wsdl", "wsdl");
//echo $client->getError();
 
$result = $client->call("fillOrder", ["a" => 1, "b" => "ads", "c" => "dasd" ]);
 
if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Result</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
 
?>