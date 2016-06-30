<?php

$city = $_GET['city'];
$city = str_replace(" ","" , $city);
//getting the content of the web page
$contents =  @file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
if($contents === FALSE) { 
print_r("");    
}
else{
	//reg_ex for taking out the weather info
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

print_r($matches[1]);
}






?>
