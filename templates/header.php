
    <!-- <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0"> -->
            <!-- Navigation-->
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Elizabeth Ramirez Profile</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav> -->


 <!-- NEW HEADER --------------------- -->
<!doctype html>
<html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Elizabeth's Portfolio" />
        <meta name="author" content="Elizabeth Web Development and Process Improvement" />
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
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- BOOTSTRAP CUSTOM STYLES -->
        <link href="styles/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="./styles/customStyles.css">
        <link rel="stylesheet" href="./styles/main.css">
        <!-- TAILWIND STYES -->
        <script src="https://cdn.tailwindcss.com/3.4.17"></script>
        <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
        <script src="/_sdk/element_sdk.js"></script>
        <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
    </head>
 
 <body class="h-full">
  <div id="app" class="h-full w-full overflow-auto" style="background-color: #f8f9fa;">
    
  <!-- Navigation -->
   <nav id="nav-section" class="w-full border-b" style="background-color: #ffffff; border-color: #dee2e6;">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
     <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded flex items-center justify-center app-gradient-accent" style="color: #ffffff;"><i data-lucide="box" class="w-6 h-6"></i>
      </div><span id="company-name" class="text-xl font-bold" style="color: #512da8;">Xugarsoft</span>
     </div>
     <div class="hidden md:flex items-center gap-8"><a href="#services" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Services</a> <a href="#about" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">About</a> <a href="#portfolio" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Portfolio</a> <a href="#blog" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Blog</a> <a href="#contact" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Contact</a>
     </div><button id="cta-nav" class="px-5 py-2 rounded-lg text-sm font-semibold transition hover:shadow-lg" style="background-color: #512da8; color: #ffffff;"> Get Started </button>
    </div>
   </nav>