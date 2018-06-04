<?php

function dbopen() {
	try{
	#$db= new PDO('sqlite:/home/quintus/Dokumentumok/AdLibrum/Archive/Database/books/books.db');#localhost
	$db= new PDO('sqlite:books.db');#adlibrum.hu
	//$db= new PDO('sqlite:/www/books/books.db');#adlibrum.hu
	}catch( PDOException $exception ){
	die($exception->getMessage());
	}
	return $db;
}

function sqlquery($sql) {
	global $db;
	$result=$db->query($sql)
		or die ("<br/>Nem sikerült a lekérdezés! Az sql a következő volt:<br/><i>$sql</i>");
	return $result;
}

function sqlonerow($sql) {
	global $db;
	$result=$db->query($sql)
		or die ("<br/>Nem sikerült a lekérdezés! Az sql a következő volt:<br/><i>$sql</i>");
	$r = $result->fetch();
	return $r;
}

?>
