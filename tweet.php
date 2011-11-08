<?php

/**
 * Tweets a message from the user whose user token and secret you use.
 *
 * Although this example uses your user token/secret, you can use
 * the user token/secret of any user who has authorised your application.
 *
 * Instructions:
 * 1) If you don't have one already, create a Twitter application on
 *      https://dev.twitter.com/apps
 * 2) From the application details page copy the consumer key and consumer
 *      secret into the place in this code marked with (YOUR_CONSUMER_KEY
 *      and YOUR_CONSUMER_SECRET)
 * 3) From the application details page copy the access token and access token
 *      secret into the place in this code marked with (A_USER_TOKEN
 *      and A_USER_SECRET)
 * 4) Visit this page using your web browser.
 *
 * @author themattharris
 */
 
function tweet($tweet){
	require_once 'library/tmhOAuth.php';
	require_once 'library/tmhUtilities.php';
	$tmhOAuth = new tmhOAuth(array(
	  'consumer_key'    => 'fgwQXjiW8NSrobBsQTVHg',
	  'consumer_secret' => 'uX2m4lKpvT8viSSXAMZtPfNEYRxs82J34BfWYJ8',
	  'user_token'      => $_SESSION['access_token']['oauth_token'],
	  'user_secret'     => $_SESSION['access_token']['oauth_token_secret'],
	));

	$code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
	  'status' => $tweet
	));
	
	if ($code == 200) {
	  tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
	  echo 'yea buddy';
	} else {
	  tmhUtilities::pr($tmhOAuth->response['response']);
	  echo 'no cabs here';
	}
}

?>