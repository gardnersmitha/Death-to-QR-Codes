<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("death2qr") or die(mysql_error());

/*
// Retrieve all the data from the "example" table
$result = mysql_query("SELECT * FROM signers")
or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry 
*/



require_once('views.php');


function createSigner($resp){
//First, Check that this user doesn't already exist. If they do, send them off to updateSigner()
$id = $resp->id;
$description = str_replace("'", "", $resp->description);
$result = mysql_query("SELECT * FROM signers WHERE id = $id");
if(!$result){
	die('Query dont work, bro');
}

if((mysql_num_rows($result)) > 0){ 
//There's already an entry for this Twitter user, but we'll get some updated info.
	echo 'id already exists bro';
	updateSigner();
}else{
//This is a new Twitter user, we'll add them to the DB
	$result = mysql_query(
		"INSERT INTO signers VALUES(
			'$resp->id',
			'$resp->screen_name',
			'$resp->name',
			'$resp->profile_image_url',
			'$description',
			'$resp->followers_count',
			'$resp->url',
			'$resp->location',
			''
		)"
	) or print(mysql_error());
	
	if($result){
		//echo 'Successful query';
		sendTweet($resp);
	}else{
		echo 'No success';
	}
	
}
//Set flag for JS effect

}


function sendTweet($resp){
	require_once('tweet.php');
	$signerNumber = getSignerCount(0);
	$next = $signerNumer + 1;
	tweet('I\'m signer #'.$signerNumer.'on the #death2qr petition. You should be #'.$next.': htt://www.death2qr.com');
}

function updateSigner($resp){
 	echo 'updateSigner fired';
}

function getSignerCount($print){
	$signerCount = mysql_num_rows(mysql_query("SELECT * FROM signers"));	
	if($print == 1){
		echo $signerCount;
	}else{
		return $signerCount;
	}
}

function getSigners(){
	$signers = mysql_query("SELECT * FROM signers");
	
	while($signer = mysql_fetch_object($signers)){
		buildSigner($signer);
	}
}

function parseRSS($xml){
	$count = count($xml->channel->item);
	for($i=0; $i<$count; $i++){
		$url 	= $xml->channel->item[$i]->link;
		$title 	= $xml->channel->item[$i]->title;
		$desc = $xml->channel->item[$i]->description;
		buildRSSItem($url, $title, $desc);
	}
}


?>