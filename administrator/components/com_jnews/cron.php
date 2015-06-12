<?php
/**
 *	com_bix_advert - Start cronjob to url
 *  Copyright (C) 2011 Matthijs Alles
 *	Bixie.org
 *
 */
if ($_GET['task'] != '') $task = $_GET['task'];
 else $task = $argv[1];

$sUpgrade = '';
if (isset($argv[2]) && $argv[2] == 'test') $sUpgrade = 'juprade/';
if ($task == 'verjaardag') {
	$curlurl = 'http://www.happycarwash.nl/'.$sUpgrade.'index.php?option=com_jnews&act=sendVerjaardag&format=raw';
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $curlurl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo 'Output: '.$output;


?>