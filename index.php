<!doctype html>
<html lang="en" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xugarsoft Portfolio</title>
  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
  <script src="/_sdk/element_sdk.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">


<style>
    :root {
      --bs-primary: #512da8;
      --bs-secondary: #673ab7;
      --bs-success: #198754;
      --bs-danger: #dc3545;
      --bs-warning: #ffc107;
      --bs-info: #0dcaf0;
      --bs-light: #f8f9fa;
      --bs-dark: #212529;
      --bs-gray-100: #f8f9fa;
      --bs-gray-200: #e9ecef;
      --bs-gray-300: #dee2e6;
      --bs-gray-500: #adb5bd;
      --bs-gray-700: #495057;
    }
    
    body {
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
    .app-gradient-hero {
      background: linear-gradient(135deg, #512da8 0%, #673ab7 100%);
    }
    
    .app-gradient-accent {
      background: linear-gradient(135deg, #673ab7 0%, #6f42c1 100%);
    }
    
    .service-card {
      transition: all 0.3s ease;
      border: 1px solid #e9ecef;
    }
    
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(81, 45, 168, 0.15);
      border-color: #512da8;
    }
    
    .project-card {
      position: relative;
      overflow: hidden;
      border: 1px solid #e9ecef;
      transition: all 0.3s ease;
    }
    
    .project-card:hover {
      border-color: #512da8;
      box-shadow: 0 12px 24px rgba(81, 45, 168, 0.15);
    }
    
    .project-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(81, 45, 168, 0.1), rgba(103, 58, 183, 0.1));
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .project-card:hover::before {
      opacity: 1;
    }
  </style>


<script src="/_sdk/data_sdk.js" type="text/javascript"></script>
 </head>
 <body class="h-full">
  <div id="app" class="h-full w-full overflow-auto" style="background-color: #f8f9fa;"><!-- Navigation -->
   <nav id="nav-section" class="w-full border-b" style="background-color: #ffffff; border-color: #dee2e6;">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
     <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded flex items-center justify-center app-gradient-accent" style="color: #ffffff;"><i data-lucide="box" class="w-6 h-6"></i>
      </div><span id="company-name" class="text-xl font-bold" style="color: #512da8;">Xugarsoft</span>
     </div>
     <div class="hidden md:flex items-center gap-8"><a href="#services" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Services</a> <a href="#about" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">About</a> <a href="#portfolio" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Portfolio</a> <a href="#blog" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Blog</a> <a href="#contact" class="text-sm font-medium hover:text-opacity-70 transition" style="color: #495057;">Contact</a>
     </div><button id="cta-nav" class="px-5 py-2 rounded-lg text-sm font-semibold transition hover:shadow-lg" style="background-color: #512da8; color: #ffffff;"> Get Started </button>
    </div>
   </nav><!-- Hero Section -->

<!-- MAIN SECTIONS -->
   <section id="hero-section" class="w-full py-20 px-6 app-gradient-hero text-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
     <div class="space-y-6">
      <div class="inline-block px-4 py-2 rounded-full text-xs font-medium" style="background-color: rgba(255, 255, 255, 0.2); color: #ffffff;">
       SOFTWARE SOLUTIONS
      </div>
      <h1 id="hero-title" class="text-4xl md:text-5xl font-bold leading-tight" style="color: #ffffff;">Building Digital Excellence</h1>
      <p id="hero-subtitle" class="text-lg leading-relaxed" style="color: rgba(255, 255, 255, 0.9);">We craft innovative software solutions that transform businesses and drive growth through cutting-edge technology.</p>
      <div class="flex flex-wrap gap-4 pt-4"><button id="cta-hero" class="px-8 py-3 rounded-lg font-semibold transition hover:shadow-lg flex items-center gap-2" style="background-color: #ffffff; color: #512da8;"> <span>Get Started</span> <i data-lucide="arrow-right" class="w-5 h-5"></i> </button> <button class="px-8 py-3 rounded-lg font-semibold transition border hover:bg-white hover:bg-opacity-10" style="border-color: #ffffff; color: #ffffff;"> Learn More </button>
      </div>
     </div>
     <div class="relative">
      <div class="aspect-square rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05)); border: 2px solid rgba(255, 255, 255, 0.2);">
       <div class="text-center space-y-4" style="color: rgba(255, 255, 255, 0.6);"><i data-lucide="image" class="w-16 h-16 mx-auto"></i>
        <p class="text-sm font-medium">Hero Image Placeholder</p>
        <p class="text-xs">800 x 800px</p>
       </div>
      </div>
      <div class="absolute -bottom-4 -left-4 w-24 h-24 rounded-xl" style="background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.2);"></div>
      <div class="absolute -top-4 -right-4 w-16 h-16 rounded-full" style="background: rgba(25, 135, 84, 0.2); border: 2px solid rgba(25, 135, 84, 0.4);"></div>
     </div>
    </div>
   </section><!-- Services Section -->
   <section id="services" class="w-full py-20 px-6" style="background-color: #f8f9fa;">
    <div class="max-w-6xl mx-auto">
     <div class="text-center mb-16">
      <p class="text-sm font-semibold uppercase tracking-wider mb-3" style="color: #512da8;">What We Offer</p>
      <h2 id="services-title" class="text-3xl md:text-4xl font-bold" style="color: #212529;">Our Services</h2>
     </div>
     <div class="grid md:grid-cols-3 gap-8"><!-- Service Card 1 -->
      <div class="p-8 rounded-2xl service-card" style="background-color: #ffffff;">
       <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, rgba(81, 45, 168, 0.1), rgba(103, 58, 183, 0.1)); color: #512da8;"><i data-lucide="code-2" class="w-7 h-7"></i>
       </div>
       <h3 class="text-xl font-bold mb-3" style="color: #212529;">Web Development</h3>
       <p class="text-sm leading-relaxed" style="color: #495057;">Custom web applications built with modern technologies and best practices.</p>
      </div><!-- Service Card 2 -->
      <div class="p-8 rounded-2xl service-card" style="background-color: #ffffff;">
       <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, rgba(25, 135, 84, 0.1), rgba(0, 202, 240, 0.1)); color: #198754;"><i data-lucide="smartphone" class="w-7 h-7"></i>
       </div>
       <h3 class="text-xl font-bold mb-3" style="color: #212529;">Mobile Apps</h3>
       <p class="text-sm leading-relaxed" style="color: #495057;">Native and cross-platform mobile solutions for iOS and Android devices.</p>
      </div><!-- Service Card 3 -->
      <div class="p-8 rounded-2xl service-card" style="background-color: #ffffff;">
       <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, rgba(103, 58, 183, 0.1), rgba(255, 193, 7, 0.1)); color: #673ab7;"><i data-lucide="cloud" class="w-7 h-7"></i>
       </div>
       <h3 class="text-xl font-bold mb-3" style="color: #212529;">Cloud Solutions</h3>
       <p class="text-sm leading-relaxed" style="color: #495057;">Scalable cloud infrastructure and deployment services for your business.</p>
      </div>
     </div>
    </div>
   </section><!-- About Section -->
   <section id="about" class="w-full py-20 px-6" style="background-color: #f8fafc;">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
     <div class="relative">
      <div class="aspect-video rounded-2xl wireframe-box flex items-center justify-center" style="border-color: #cbd5e1; background-color: #e2e8f0;">
       <div class="text-center space-y-4" style="color: #94a3b8;"><i data-lucide="play-circle" class="w-16 h-16 mx-auto"></i>
        <p class="text-sm font-medium">About Video/Image</p>
        <p class="text-xs">16:9 Aspect Ratio</p>
       </div>
      </div>
     </div>
     <div class="space-y-6">
      <p class="text-sm font-semibold uppercase tracking-wider" style="color: #3b82f6;">Who We Are</p>
      <h2 id="about-title" class="text-3xl md:text-4xl font-bold" style="color: #1e293b;">About Us</h2>
      <p class="leading-relaxed" style="color: #64748b;">We are a team of passionate developers and designers dedicated to creating exceptional digital experiences. Our mission is to help businesses thrive in the digital age.</p>
      <div class="grid grid-cols-2 gap-6 pt-4">
       <div class="p-4 rounded-xl wireframe-box" style="border-color: #e2e8f0;">
        <p class="text-3xl font-bold" style="color: #3b82f6;">150+</p>
        <p class="text-sm" style="color: #64748b;">Projects Completed</p>
       </div>
       <div class="p-4 rounded-xl wireframe-box" style="border-color: #e2e8f0;">
        <p class="text-3xl font-bold" style="color: #10b981;">50+</p>
        <p class="text-sm" style="color: #64748b;">Happy Clients</p>
       </div>
      </div>
     </div>
    </div>
   </section><!-- Portfolio Section -->
   <section id="portfolio" class="w-full py-20 px-6" style="background-color: #ffffff;">
    <div class="max-w-6xl mx-auto">
     <div class="text-center mb-16">
      <p class="text-sm font-semibold uppercase tracking-wider mb-3" style="color: #512da8;">Our Work</p>
      <h2 class="text-3xl md:text-4xl font-bold" style="color: #212529;">Featured Projects</h2>
     </div>
     <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6"><!-- Project 1 -->
      <div class="group rounded-2xl overflow-hidden project-card">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #512da8, #673ab7); color: rgba(255, 255, 255, 0.6);"><i data-lucide="layout" class="w-12 h-12"></i>
       </div>
       <div class="p-6" style="background-color: #ffffff;">
        <h3 class="font-bold mb-2" style="color: #212529;">Project Title</h3>
        <p class="text-sm" style="color: #495057;">Web Application</p>
       </div>
      </div><!-- Project 2 -->
      <div class="group rounded-2xl overflow-hidden project-card">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #673ab7, #0dcaf0); color: rgba(255, 255, 255, 0.6);"><i data-lucide="layers" class="w-12 h-12"></i>
       </div>
       <div class="p-6" style="background-color: #ffffff;">
        <h3 class="font-bold mb-2" style="color: #212529;">Project Title</h3>
        <p class="text-sm" style="color: #495057;">Mobile App</p>
       </div>
      </div><!-- Project 3 -->
      <div class="group rounded-2xl overflow-hidden project-card">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #198754, #ffc107); color: rgba(255, 255, 255, 0.6);"><i data-lucide="monitor" class="w-12 h-12"></i>
       </div>
       <div class="p-6" style="background-color: #ffffff;">
        <h3 class="font-bold mb-2" style="color: #212529;">Project Title</h3>
        <p class="text-sm" style="color: #495057;">Dashboard</p>
       </div>
      </div>
     </div>
    </div>
   </section><!-- Blog Section -->
   <section id="blog" class="w-full py-20 px-6" style="background-color: #f8f9fa;">
    <div class="max-w-6xl mx-auto">
     <div class="text-center mb-16">
      <p class="text-sm font-semibold uppercase tracking-wider mb-3" style="color: #512da8;">Latest Insights</p>
      <h2 class="text-3xl md:text-4xl font-bold" style="color: #212529;">Blog &amp; Resources</h2>
     </div>
     <div class="grid md:grid-cols-3 gap-8"><!-- Blog Card 1 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #512da8, #673ab7); color: rgba(255, 255, 255, 0.6);"><i data-lucide="lightbulb" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(81, 45, 168, 0.1); color: #512da8;">Technology</span> <span class="text-xs" style="color: #adb5bd;">5 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">The Future of Web Development</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Explore emerging trends and technologies shaping the web development landscape.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #512da8;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 2 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #673ab7, #0dcaf0); color: rgba(255, 255, 255, 0.6);"><i data-lucide="zap" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(103, 58, 183, 0.1); color: #673ab7;">Performance</span> <span class="text-xs" style="color: #adb5bd;">8 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Optimizing Application Performance</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Best practices for building faster, more efficient applications for better user experience.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #673ab7;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 3 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #198754, #ffc107); color: rgba(255, 255, 255, 0.6);"><i data-lucide="shield" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(25, 135, 84, 0.1); color: #198754;">Security</span> <span class="text-xs" style="color: #adb5bd;">6 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Security Best Practices</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Essential security measures to protect your applications and user data effectively.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #198754;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div>
     </div>
    </div>
   </section><!-- Contact Section -->
   <section id="contact" class="w-full py-20 px-6" style="background-color: #1e293b;">
    <div class="max-w-4xl mx-auto text-center">
     <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: #ffffff;">Ready to Start Your Project?</h2>
     <p class="text-lg mb-10" style="color: #94a3b8;">Let's build something amazing together. Get in touch with us today.</p>
     <div class="p-8 rounded-2xl wireframe-box" style="border-color: #475569; background-color: #334155;">
      <div class="grid md:grid-cols-2 gap-6 mb-6">
       <div class="text-left"><label class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Name</label>
        <div class="h-12 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569;"></div>
       </div>
       <div class="text-left"><label class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Email</label>
        <div class="h-12 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569;"></div>
       </div>
      </div>
      <div class="text-left mb-6"><label class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Message</label>
       <div class="h-32 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569;"></div>
      </div><button class="w-full py-4 rounded-lg font-semibold transition hover:opacity-90" style="background-color: #3b82f6; color: #ffffff;"> Send Message </button>
     </div>
    </div>
   </section><!-- Footer -->
   
<?php
include('templates/footer.html');
?>  
<!-- FOOTER SECTION------------------------------------------------- -->
