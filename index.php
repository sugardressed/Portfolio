<?php 
include __DIR__ . '/templates/header.php';
?>  
<!-- Hero Section -->
<!-- MAIN SECTIONS -->
   <section id="hero-section" class="w-full py-20 px-6 app-gradient-hero text-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
     <div class="space-y-6">
      <div class="inline-block px-4 py-2 rounded-full text-xs font-medium" style="background-color: rgba(255, 255, 255, 0.2); color: #ffffff;">
       WEB DESIGN + DEVELOPMENT
      </div>
      <h1 id="hero-title" class="text-4xl md:text-5xl font-bold leading-tight" style="color: #ffffff;">Turning Ideas into Outcomes</h1>
      <p id="hero-subtitle" class="text-lg leading-relaxed" style="color: rgba(255, 255, 255, 0.9);">I craft innovative software solutions that transform businesses and drive growth through cutting-edge technology.</p>
      <div class="flex flex-wrap gap-4 pt-4"><button id="cta-hero" class="px-8 py-3 rounded-lg font-semibold transition hover:shadow-lg flex items-center gap-2" style="background-color: #ffffff; color: #512da8;"> <span>Get Started</span> <i data-lucide="arrow-right" class="w-5 h-5"></i> </button> <button class="px-8 py-3 rounded-lg font-semibold transition border hover:bg-white hover:bg-opacity-10" style="border-color: #ffffff; color: #ffffff;"> Learn More </button>
      </div>
     </div>
     <div class="relative">
      <div class="aspect-square rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05)); border: 2px solid rgba(255, 255, 255, 0.2);">
       <div class="text-center space-y-4" style="color: rgba(255, 255, 255, 0.6);"><img src="./assets/images/EliPic.png" width="50%" alt="ElizabethRamirez">
       </div>
      </div>
      <div class="absolute -bottom-4 -left-4 w-24 h-24 rounded-xl" style="background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.2);"></div>
      <div class="absolute -top-4 -right-4 w-16 h-16 rounded-full" style="background: rgba(25, 135, 84, 0.2); border: 2px solid rgba(25, 135, 84, 0.4);"></div>
     </div>
    </div>
   </section>
   
   <!-- Services Section -->
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
   </section>
   
   <!-- About Section -->
   <section id="about" class="w-full py-20 px-6" style="background-color: #f8fafc;">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
     <div class="relative">
      <div class="aspect-video rounded-2xl wireframe-box flex items-center justify-center" style="border-color: #cbd5e1; background-color: #e2e8f0;">
       <div class="text-center space-y-4" style="color: #3F4B5F;"><i data-lucide="play-circle" class="w-16 h-16 mx-auto"></i>
        <p class="text-sm font-medium">About Video/Image</p>
        <p class="text-xs">16:9 Aspect Ratio</p>
       </div>
      </div>
     </div>
     <div class="space-y-6">
      <p class="text-sm font-semibold uppercase tracking-wider" style="color: #094CB9;">Who I Am</p>
      <h2 id="about-title" class="text-3xl md:text-4xl font-bold" style="color: #1e293b;">About Me</h2>
      <p class="leading-relaxed" style="color: #64748b;">I help businesses grow by streamlining operations, eliminating inefficiencies, and transforming complex processes into simple, effective solutions. Using innovative strategies and the latest technology tools, I create systems that save time, reduce effort, and drive sustainable growth.</p>
      <div class="grid grid-cols-2 gap-6 pt-4">
       <div class="p-4 rounded-xl wireframe-box" style="border-color: #e2e8f0;">
        <p class="text-3xl font-bold" style="color: #094CB9;">150+</p>
        <p class="text-sm" style="color: #64748b;">Projects Completed</p>
       </div>
       <div class="p-4 rounded-xl wireframe-box" style="border-color: #e2e8f0;">
        <p class="text-3xl font-bold" style="color: #0A8059;">50+</p>
        <p class="text-sm" style="color: #64748b;">Happy Clients</p>
       </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="w-full py-20 px-6" style="background-color: #ffffff;">
    <div class="max-w-6xl mx-auto">
     <div class="text-center mb-16">
      <p class="text-sm font-semibold uppercase tracking-wider mb-3" style="color: #512da8;">My Work</p>
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
  </section>

  <!-- Blog Section -->
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
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(81, 45, 168, 0.1); color: #512da8;">Technology</span> <span class="text-xs" style="color: #4F5663;">5 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">The Future of Web Development</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Explore emerging trends and technologies shaping the web development landscape.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #512da8;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 2 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #673ab7, #0dcaf0); color: rgba(255, 255, 255, 0.6);"><i data-lucide="zap" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(103, 58, 183, 0.1); color: #673ab7;">Performance</span> <span class="text-xs" style="color: #4F5663;">8 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Optimizing Application Performance</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Best practices for building faster, more efficient applications for better user experience.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #673ab7;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 3 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #198754, #ffc107); color: rgba(255, 255, 255, 0.6);"><i data-lucide="shield" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(25, 135, 84, 0.1); color: #198754;">Security</span> <span class="text-xs" style="color: #4F5663;">6 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Security Best Practices</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Essential security measures to protect your applications and user data effectively.</p><a href="#" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #198754;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div>
     </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="w-full py-20 px-6" style="background-color: #1e293b;">
    <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: #ffffff;">Ready to Start Your Project?</h2>
    <p class="text-lg mb-10" style="color: #ACB4C8;">Let's build something amazing together. Get in touch with me today.</p>

    <!-- ACTUAL CONTACT FORM -->
    <div class="p-8 rounded-2xl wireframe-box" style="border-color: #475569; background-color: #334155;">
      <div class="grid md:grid-cols-2 gap-6 mb-6">
      <form id="contactForm" action="confirmation.php" method="post" autocomplete="off" novalidate>
      <!-- Full name -->
        <div class="text-left form-floating mb-3">
          <label for="fname" class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Full name</label>
            <input
              class="form-control h-12 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569; color: #fff; padding:.7em;"
              id="fname"
              type="text"
              name="fName"
              placeholder="Enter your name"
              maxlength="100"
              required
            >
            <div class="invalid-feedback">Please enter your full name.</div>
        </div>
      <!-- Email -->
      <div class="text-left form-floating mb-3">
        <label for="email" class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Email address</label>
        <input
          class="form-control h-12 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569; color: #fff; padding:.7em;"
          id="email"
          name="email"
          type="email"
          placeholder="name@email.com"
          maxlength="150"
          required
          >
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>
      <!-- Phone -->
      <div class="text-left form-floating mb-1">
        <label for="phone" class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Phone number</label>
        <input
          class="form-control h-12 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569; color: #fff; padding:.7em;"
          id="phone"
          name="phone"
          type="tel"
          placeholder="(123) 123-1234"
          maxlength="14"
          inputmode="numeric"
          required
          >
        <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
      </div>
      <div class="form-text mb-3">Enter a 10-digit phone number.</div>
    </div>
      <!-- Message -->
      <div class="text-left form-floating mb-3">
      <label for="message" class="block text-sm font-medium mb-2" style="color: #cbd5e1;">Message</label>  
      <textarea
          class="form-control h-32 rounded-lg wireframe-box" style="border-color: #64748b; background-color: #475569; color: #fff; padding:.7em;"
          id="message"
          name="message"
          placeholder="Enter your message here..."
          style="height: 10rem"
          maxlength="2000"
          required
          ></textarea>
        <div class="invalid-feedback">Please enter a message.</div>
      </div>
      <!-- Honeypot -->
      <div style="display:none;">
      <label for="website">Website</label>
        <input
          type="text"
          id="website"
          name="website"
          value=""
          tabindex="-1"
          autocomplete="off"
          >
      </div>
      <!-- Time check -->
      <input type="hidden" name="form_time" value="<?php echo time(); ?>">
      <!-- Submit button -->
      <div class="d-grid">
      <button class="w-full py-4 rounded-lg font-semibold transition hover:opacity-80" style="background-color: #094CB9; color: #ffffff;">   
      <input
        class="btn btn-primary btn-lg"
        id="submitButton"
        type="submit"
        value="Send Message"
        >
      </button>
      </div>
      </form>
      </div>
    </div>
   </section>
   
   <!-- Footer -->
    <script src="./scripts/contactV.js"></script>
    <script src="./scripts/navigation.js"></script>
<?php 
include __DIR__ . '/templates/footer.html';
?>  

