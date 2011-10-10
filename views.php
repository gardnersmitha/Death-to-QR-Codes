<?php


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