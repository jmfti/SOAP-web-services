<?php 
 
require_once("lib/nusoap/nusoap.php");
 
$server = new soap_server;
 
$server->configureWSDL("fillOrder", "urn:fillOrder");
//$server->register("fillOrder");
 
function fillOrder($a, $b, $c){
    $r = new stdClass();
    $r->a = $a;
    $r->b = $b;
    $r->c = $c;
    return "ok!";
}
 
$server->register('fillOrder',           // method name
        array('a' => 'xsd:int','b' => 'xsd:string', 'c' => "xsd:string"), // input parameters
        array('return' => 'xsd:string'),          // output
        'urn:fillOrderwsdl',             // namespace
        'urn:fillOrderwsdl#fillOrder',         // soapaction
        'rpc',                 // style
        'encoded',                // use
        'returns ok'              // documentation
);
 
$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
$server->service($POST_DATA);
 
?>