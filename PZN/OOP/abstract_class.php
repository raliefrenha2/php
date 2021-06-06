<?php
require_once 'data/Location.php';

use Data\{Location, City, Province, Country};


// $location = new Location(); ERROR, abstract class tidak bisa dijadikan objek

$city = new City();
$province = new Province();
$country = new Country();
