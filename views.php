<?php

function buildSigner($signer){
	$html = '
	<li class="signer">
		<a class="signer_link" target="_blank" href="http://twitter.com/#!/'.$signer->screen_name.'">
			<img class="signer_avatar" src="'.$signer->profile_image_url.'" />
			<div class="signer_info">
				<p class="signer_name">'.$signer->name.'</p>
				<p class="signer_screen_name">@'.$signer->screen_name.'</p>
			</div>
		</a>
	</li>
	';
	
	echo $html;
}

function buildRSSItem($url, $title, $description){
	$html = '
		<li class="rss_item">
			<h4><a target="_blank" href="'.$url.'">'.$title.'</a></h4>
			<!--<p>'.$description.'</p>-->
		</li>
	';
	
	echo $html;
}

function buildTwitterTrend($trend){
	$html = '
		<li class="twitter_trend_item">
			<h4>'.$trend->name.'</h4>
		</li>
	';
	
	echo $html;
}

?>