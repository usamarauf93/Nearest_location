<?php $locations = array (
 array (
  "postcode" => "2850",
  "name" => "Aarons Pass",
  "state_code" => "NSW",
  "lat" => "-32.86328",
  "lng" => "149.80375"
 ),
 array (
  "postcode" => "6280",
  "name" => "Abba River",
  "state_code" => "WA",
  "lat" => "-33.68488",
  "lng" => "115.46334"
 ),
 array (
  "postcode" => "6280",
  "name" => "Abbey",
  "state_code" => "WA",
  "lat" => "-33.66077",
  "lng" => "115.25863"
 )
 
);

$base_location = array(
  'lat' => "-31.959138",
  'lng' => "1.858072"
);

$distances = array();

foreach ($locations as $key => $location)
{
  $a = $base_location['lat'] - $location['lat'];
  $b = $base_location['lng'] - $location['lng'];
  $distance = sqrt(($a**2) + ($b**2));
  $distances[$key] = $distance;
  	echo 'a is = '.$a.'   a**2 ='.($a**2).'<br>';
  	echo  $location['name'].'  distance : ';
	echo $distances[$key] .'<br>' ;
}
// print_r($distances);
asort($distances);

$closest = $locations[key($distances)];

echo "Closest foreach suburb is: " . $closest['name'];