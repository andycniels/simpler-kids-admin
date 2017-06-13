<?php
//kode fra PHP MySQL Prepared statements.pptx af cphbusiness.
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = 'root';
const DB_NAME = 'simplarkids';

$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>