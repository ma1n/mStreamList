<?php
$c1 = 'stream1';
$c2 = 'stream2';

$channelName = $c1;
$x = '378';
$y = '242';
 
$clientId = '17620991120';
$json_array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.strtolower($channelName).'?client_id='.$clientId), true);
 
if ($json_array['stream'] != NULL) {
    $channelTitle = $json_array['stream']['channel']['display_name'];
    $streamTitle = $json_array['stream']['channel']['status'];
    $currentGame = $json_array['stream']['channel']['game'];
    $view = $json_array['stream']['viewers'];
	$follow = $json_array['stream']['channel']['followers'];
    $title = $json_array['stream']['channel']['status'];
	
    echo "<b>LIVE:&nbsp</b><a href='http://twitch.tv/$channelName' target='_blank'>$channelTitle</a></br> is playing <a href='http://www.twitch.tv/directory/game/$currentGame' target='_blank'><i>$currentGame</i></a>";
	


echo "<div style='position:absolute;z-index:500;'><a href='http://twitch.tv/$channelName' target='_blank'>";?><img src="http://gaming.ntechit.de/wp-content/uploads/2015/11/test1.png" onmouseover="this.src='http://gaming.ntechit.de/wp-content/uploads/2015/11/test2.png';" onmouseout="this.src='http://gaming.ntechit.de/wp-content/uploads/2015/11/test1.png';"/></a></div><div><?php echo "<img src='http://static-cdn.jtvnw.net/previews-ttv/live_user_$channelName-378x242.jpg'></div>";

echo "<p class='right'><img src='http://gaming.ntechit.de/wp-content/uploads/2015/11/follow.png'>&nbsp$follow&nbsp&nbsp&nbsp<img src='http://gaming.ntechit.de/wp-content/uploads/2015/11/view.png'>&nbsp$view</p></br>";

} 
?>

<?php

$channelName = $c2;
$x = '378';
$y = '242';
 
$clientId = '17620991120';
$json_array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.strtolower($channelName).'?client_id='.$clientId), true);
 
if ($json_array['stream'] != NULL) {
    $channelTitle = $json_array['stream']['channel']['display_name'];
    $streamTitle = $json_array['stream']['channel']['status'];
    $currentGame = $json_array['stream']['channel']['game'];
    $view = $json_array['stream']['viewers'];
	$follow = $json_array['stream']['channel']['followers'];
    $title = $json_array['stream']['channel']['status'];
	
    echo "<b>LIVE:&nbsp</b><a href='http://twitch.tv/$channelName' target='_blank'>$channelTitle</a></br> is playing <a href='http://www.twitch.tv/directory/game/$currentGame' target='_blank'><i>$currentGame</i></a>";
	


echo "<div style='position:absolute;z-index:500;'><a href='http://twitch.tv/$channelName' target='_blank'>";?><img src="http://gaming.ntechit.de/wp-content/uploads/2015/11/test1.png" onmouseover="this.src='http://gaming.ntechit.de/wp-content/uploads/2015/11/test2.png';" onmouseout="this.src='http://gaming.ntechit.de/wp-content/uploads/2015/11/test1.png';"/></a></div><div><?php echo "<img src='http://static-cdn.jtvnw.net/previews-ttv/live_user_$channelName-378x242.jpg'></div>";

echo "<p class='right'><img src='http://gaming.ntechit.de/wp-content/uploads/2015/11/follow.png'>&nbsp$follow&nbsp&nbsp&nbsp<img src='http://gaming.ntechit.de/wp-content/uploads/2015/11/view.png'>&nbsp$view</p></br>";

} 
?>


