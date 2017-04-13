<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/ecadb96c07edbcad/astronomy/q/Australia/Sydney.json");
 $parsed_json = json_decode($json_string);

  $moonphase = $parsed_json->{'moon_phase'}->{'hemisphere'};
  $sunrisemoon = $parsed_json->{'moon_phase'}->{'sunrise'}->{'hour'};

$json_string = file_get_contents("http://api.wunderground.com/api/ecadb96c07edbcad/conditions/q/CA/San_Francisco.json");

 $parsed_json = json_decode($json_string);

  $location = $parsed_json->{'current_observation'}->{'observation_location'}->{'state'};
  $weather = $parsed_json->{'current_observation'}->{'weather'};


$json_string = file_get_contents("http://api.wunderground.com/api/ecadb96c07edbcad/planner_07010731/q/CA/San_Francisco.json");

 $parsed_json = json_decode($json_string);

  $title = $parsed_json->{'trip'}->{'title'};
  $min = $parsed_json->{'trip'}->{'temp_high'}->{'min'}->{'C'};
  $avg = $parsed_json->{'trip'}->{'temp_high'}->{'avg'}->{'C'};
  $max = $parsed_json->{'trip'}->{'temp_high'}->{'max'}->{'C'};
	



  echo " The weather in ${location} is ${weather}.<br>";

  echo " Temperature Summary on ${title} min ${min} avg ${avg} max ${max}.<br>";

  echo "Earth's moon phase Section ${moonphase} time of moonrise ${sunrisemoon}hours again\n.<br>";
?>