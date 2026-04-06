<?php

include __DIR__ . '/dbConnect.php';

$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Optional: handle proxy/CDN later if needed
$url = "http://ip-api.com/json/" . urlencode($ip) . "?fields=status,message,country,region,city,zip,lat,lon,org,timezone,isp,as";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

$resp = curl_exec($ch);

if ($resp === false) {
    die('cURL error: ' . curl_error($ch));
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    die('IP API request failed. HTTP code: ' . $httpCode);
}

$obj = json_decode($resp, true);

if (!$obj) {
    die('Invalid JSON response from IP API.');
}

if (($obj['status'] ?? '') !== 'success') {
    die('IP API error: ' . ($obj['message'] ?? 'Unknown error'));
}

$country  = $obj['country']  ?? '';
$region   = $obj['region']   ?? '';
$city     = $obj['city']     ?? '';
$zip      = $obj['zip']      ?? '';
$lat      = $obj['lat']      ?? null;
$lng      = $obj['lon']      ?? null;
$org      = $obj['org']      ?? '';
$timezone = $obj['timezone'] ?? '';
$isp      = $obj['isp']      ?? '';
$address  = $obj['as']       ?? '';
$pagename = $_SERVER['PHP_SELF'] ?? '';

$sql = $dbh->prepare("
    INSERT INTO portracker
    (country, region, city, zip, lat, lng, isp, org, address, timezone, pagename, timestamp)
    VALUES
    (:country, :region, :city, :zip, :lat, :lng, :isp, :org, :address, :timezone, :pagename, NOW())
");

$success = $sql->execute([
    ':country'  => $country,
    ':region'   => $region,
    ':city'     => $city,
    ':zip'      => $zip,
    ':lat'      => $lat,
    ':lng'      => $lng,
    ':isp'      => $isp,
    ':org'      => $org,
    ':address'  => $address,
    ':timezone' => $timezone,
    ':pagename' => $pagename
]);

if (!$success) {
    $error = $sql->errorInfo();

    $to = "sugardressed@gmail.com";
    $subject = "Xugarsoft Portfolio - Tracking Insert Failed";

    $message = "Tracking insert failed.\n\n";
    $message .= print_r($error, true);

    $headers = "From: no-reply@xugarsoft.com";

    mail($to, $subject, $message, $headers);

    error_log("DB Insert Failed: " . print_r($error, true));
}

?>


<!doctype html>
<html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Elizabeth's Portfolio">
        <meta name="author" content="Elizabeth Web Development and Process Improvement">
        <title>        <?php //Print the page title.
            if (defined('TITLE')) { //Is the title defined?
                print TITLE;
            } else { //The title is not defined.
                print 'Elizabeth\'s Portfolio';
            }
            ?></title>
        <!-- SITE TAB ICON -->
         <link rel="icon" type="image/png" sizes="32x32" href="assets/images/NewIcon.png">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- BOOTSTRAP CUSTOM STYLES -->
        <link href="styles/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="./styles/customStyles.css">
        <link rel="stylesheet" href="./styles/main.css">
        <!-- TAILWIND STYES -->
        <script src="https://cdn.tailwindcss.com/3.4.17"></script>
        <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
    
    </head>
 
<body class="min-h-screen">
    <div id="app" class="w-full">
  <!-- Navigation -->
<nav id="nav-section" class="site-nav">
  <div class="nav-container">
    
    <a href="#hero-section" class="brand">
      <img src="./assets/images/NewIcon.png" alt="Xugarsoft logo" class="brand-logo">
      <span class="brand-text">Xugarsoft</span>
    </a>

    <button class="menu-toggle" id="menu-toggle" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="nav-links desktop-nav">
      <a href="#services" class="nav-link">Experience</a>
      <a href="#about" class="nav-link">About</a>
      <a href="#portfolio" class="nav-link">Portfolio</a>
      <a href="#blog" class="nav-link">Blog</a>
      <a href="#contact" class="nav-link">Contact</a>
    </div>

    <a href="#contact" id="cta-nav" class="nav-cta">Start Now</a>
  </div>

  <div class="mobile-menu" id="mobile-menu">
    <a href="#services" class="mobile-link">Experience</a>
    <a href="#about" class="mobile-link">About</a>
    <a href="#portfolio" class="mobile-link">Portfolio</a>
    <a href="#blog" class="mobile-link">Blog</a>
    <a href="#contact" class="mobile-link">Contact</a>
  </div>
</nav>