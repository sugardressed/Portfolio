<?php
	$dbh = new PDO(
    "mysql:host=localhost;dbname=elizabethr_xugarsoft",
    "elizabethr_eramirez",
    "eramirezdemo"
);

    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ip-api.com/json/".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $resp = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($resp);
    $country = $obj->country;
    $region = $obj->region;
    $city = $obj->city;
    $zip = $obj->zip;
    $lat = $obj->lat;
    $lng = $obj->lon;
    $org = $obj->org;
       $timezone = $obj->timezone;
    $isp = $obj->isp;
    $address = $obj->as;

    $pagename = $_SERVER['PHP_SELF'];
   // var_dump($obj);

    $sql = $dbh->prepare("INSERT INTO `portracker` (`country`, `region`, `city`, `zip`, `lat`, `lng`, `isp`, `org`, `address`, `timezone`, `pagename`, `timestamp`) VALUES ('$country', '$region', '$city', '$zip', '$lat', '$lng', '$isp', '$org', '$address', '$timezone', '$pagename', now())");
    $sql->execute();
    print_r($sql->errorInfo());


?>