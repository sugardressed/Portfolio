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