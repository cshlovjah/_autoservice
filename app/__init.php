<?php
include_once 'Logger.php';
include_once '__mysql.php';

$log = logger::getInstance();
$log->logfile = dirname(__FILE__) . '/../logs/app.log';

function appError( $message )
{
    global $log;
    $log->write( $message, __FILE__, __LINE__ );
    die();
}

function toLog( $message )
{
    global $log;
    $log->write( $message, __FILE__, __LINE__ );
}

function toDebug( $message )
{
    global $log;
    $log->write( $message, __FILE__, __LINE__ );
}

function sendJsonString( $json )
{
    header('Content-Type: application/json');
    echo $json;
    exit();
}
