<?php 
include __DIR__ . '/templates/header.php';
?>  
<!-- Hero Section -->
<!-- MAIN SECTIONS -->
<section id="hero-section" class="w-full py-20 px-6 app-gradient-hero text-white">
<!-- MOTION DEMO STARTS-->
  <div class="code-bg" aria-hidden="true">
    <div class="code-panel" id="code-panel">
      <pre>
      <span class="kw">const</span> portfolio = <span class="fn">new</span> Xugarsoft();
      <span class="kw">function</span> buildExperience() {
      <span class="kw">return</span> skills.map(skill => skill.level);
      }
      <span class="fn">fetch</span>('/api/projects')
      .then(res => res.json())
      .then(data => render(data));
      <span class="sql">SELECT</span> * <span class="sql">FROM</span> Projects
      <span class="sql">ORDER BY</span> CreatedDate <span class="sql">DESC</span>;
      include('./templates/header.php');
      <span class="kw">const</span> menuToggle = document.getElementById("menu-toggle");
      </pre>
    </div>
  </div>
<!-- MOTION DEMO ENDS -->
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <!-- INTRODUCTION   -->
    <div class="space-y-6">
      <div class="inline-block px-4 py-2 rounded-full text-xs font-medium" style="background-color: rgba(255, 255, 255, 0.2);">
      WEB DESIGN + DEVELOPMENT
      </div>
      <h1 id="hero-title" class="text-4xl md:text-5xl font-bold leading-tight">Turning Ideas into Outcomes</h1>
      <p id="hero-subtitle" class="text-lg leading-relaxed">I craft innovative web solutions that transform businesses, driving growth and online presence.</p>
      <div class="flex flex-wrap gap-4 pt-4">
      <a href="#contact"><button id="cta-hero" class="px-8 py-3 rounded-lg font-semibold">Get Started </button> </a>
      <a href="#about"><button class="px-8 py-3 rounded-lg font-semibold transition border hover:bg-white hover:bg-opacity-10" style="border-color: #ffffff;color:#fff;"> Learn More </button></a>
      </div>
    </div>
    <!-- PICTURE -->
    <div class="relative">
      <div class="aspect-square rounded-2xl flex items-center justify-center"
          style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05)); border: 2px solid rgba(255, 255, 255, 0.2);"> 
        <img src="./assets/images/EliPic.png"
        alt="ElizabethRamirez"
        class="w-1/2 mx-auto object-cover rounded-full ">
      </div>
    </div>
  </div>
</section>
   
   <!-- Experience Section -->
   <section id="services" class="w-full py-20 px-6" style="background-color: #f8f9fa;">


    <div class="max-w-6xl mx-auto">
     <div class="text-center mb-16">
      <p class="text-sm font-semibold uppercase tracking-wider mb-3" style="color: #512da8;">What I do</p>
      <h2 id="services-title" class="text-3xl md:text-4xl font-bold" style="color: #212529;">Experience</h2>
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
        <h3 class="text-3xl font-bold" style="color: #094CB9;">150+</h3>
        <p class="text-sm" style="color: #64748b;">Projects Completed</p>
       </div>
       <div class="p-4 rounded-xl wireframe-box" style="border-color: #e2e8f0;">
        <h3 class="text-3xl font-bold" style="color: #0A8059;">50+</h3>
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
     <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      
     
     <!-- Project 1 UPDATED-->
    <div class="project-card rounded-2xl overflow-hidden">
    <!-- Image / Carousel Area -->
    <div class="project-carousel" data-interval="3500">
      <div class="project-carousel-track">
        <img
          src="./assets/images/foreveryoungpage.png"
          alt="Forever Young Supplements homepage"
          class="project-carousel-image active"
        >
        <img
          src="./assets/images/foreveryoungpage1.png"
          alt="Forever Young Supplements products page"
          class="project-carousel-image"
        >
        <img
          src="./assets/images/foreveryoungpage2.png"
          alt="Forever Young Supplements AI Bot Agent sample"
          class="project-carousel-image"
        >
        <img
          src="./assets/images/foreveryoungpage3.png"
          alt="Forever Young Supplements Check Out page"
          class="project-carousel-image"
        >
      </div>
      <!-- Carousel Buttons -->
      <button class="project-carousel-btn prev" type="button" aria-label="Previous image">
        &#10094;
      </button>
      <button class="project-carousel-btn next" type="button" aria-label="Next image">
        &#10095;
      </button>
      <div class="project-carousel-dots" aria-label="Carousel navigation">
        <button class="project-carousel-dot active" type="button" aria-label="Go to image 1"></button>
        <button class="project-carousel-dot" type="button" aria-label="Go to image 2"></button>
        <button class="project-carousel-dot" type="button" aria-label="Go to image 3"></button>
      </div>
    </div>
    <!-- Clickable Content Bottom Area Only -->
    <a
      href="https://foreveryoung.xugarsoft.com/index.php"
      target="_blank"
      rel="noopener noreferrer"
      class="project-card-link"
      aria-label="Open Forever Young Supplements website in a new tab"
    >
      <div class="project-content">
        <h3 class="project-title">Forever Young Supplements</h3>
        <p class="project-type"><strong>Web Application</strong></p>
        <p class="project-description">
          This site is an ecommerce sample for health vitamins and products.
          This demo-site was built with PHP/MySQL and includes an AI Agent powered by BotPenguin.
        </p>
      </div>
    </a>
    </div>

    <!-- Project 2 -->
      <div class="group rounded-2xl overflow-hidden project-card">
        <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #673ab7, #0dcaf0); color: rgba(255, 255, 255, 0.6);">
          <!-- <i data-lucide="layers" class="w-12 h-12"></i> -->
          <img class="img-fluid" src="./assets/images/PPScreen.png" alt="Policies and Procedures Site" />
        </div>
        <div class="p-6" style="background-color: #ffffff;">
          <a href="http://pp.xugarsoft.com/" target="new" aria-label="Policy and Procedures Site"><h3 class="font-bold mb-2" style="color: #212529;">Policies and Procedures Library</h3></a>
          <p class="text-sm" style="color: #495057;"><b>Web Application</b></p><br>
          <p>This site is a library that house policies and procedures for users to find content quick and easy. This demo-site was built with WordPress.</p>
        </div>
      </div>
      
      <!-- Project 3 -->
      <div class="group rounded-2xl overflow-hidden project-card">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #198754, #ffc107); color: rgba(255, 255, 255, 0.6);">
        <!-- <i data-lucide="monitor" class="w-12 h-12"></i> -->
      <img class="img-fluid" src="./assets/images/FileReview.PNG" alt="File Review Application" />
       </div>
       <div class="p-6" style="background-color: #ffffff;">
        <h3 class="font-bold mb-2" style="color: #212529;">File Review Application</h3>
        <p class="text-sm" style="color: #495057;"><b>Web Applciation</b></p><br>
        <p>The File Review Application is an system designed to perform internal file audits. This application was originally completed as desktop applciation in Access and SQL database. Web Application is in progress.</p>
       </div>
      </div>

      <!-- Project 4 -->
      <div class="group rounded-2xl overflow-hidden project-card">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #512da8, #673ab7); color: rgba(255, 255, 255, 0.6);">
        <!-- <i data-lucide="layout" class="w-12 h-12"></i> -->
       <img class="img-fluid" src="./assets/images/ApLibrary.png" alt="AP Library" />
       </div>
       <div class="p-6" style="background-color: #ffffff;">
        <h3 class="font-bold mb-2" style="color: #212529;">Forms and Directives Library</h3>
        <p class="text-sm" style="color: #495057;"><b>Web Application</b></p><br>
        <p>These libraries were designed to assist users to find forms and directives easily, the sites were designed with php and added AI Agents to improve the user experience.</p>
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
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">As technology advances, web developers will inevitably find new and innovative ways to create applications. To succeed as a developer, you'll want to anticipate these trends and be one of the first to implement useful features. However, you may not know what to expect going into the new year.</p><a href="https://codeless.co/web-development-trends/" target="_blank" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #512da8;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 2 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #673ab7, #0dcaf0); color: rgba(255, 255, 255, 0.6);"><i data-lucide="zap" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(103, 58, 183, 0.1); color: #673ab7;">Development</span> <span class="text-xs" style="color: #4F5663;">8 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Staying Focused and Productive</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">Discover effective techniques to stay focused and productive as a web developer. Learn how to prioritize tasks, manage distractions, and optimize your workflow for maximum efficiency. Boost your productivity and achieve your goals in the fast-paced world of web development.</p><a href="https://arwd.ca/staying-focused-and-productive-techniques-for-web-developers/#google_vignette" target="_blank" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #673ab7;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
       </div>
      </div><!-- Blog Card 3 -->
      <div class="rounded-2xl overflow-hidden transition hover:shadow-lg" style="background-color: #ffffff; border: 1px solid #e9ecef;">
       <div class="aspect-video flex items-center justify-center" style="background: linear-gradient(135deg, #198754, #ffc107); color: rgba(255, 255, 255, 0.6);"><i data-lucide="shield" class="w-12 h-12"></i>
       </div>
       <div class="p-6">
        <div class="flex items-center gap-2 mb-3"><span class="text-xs font-semibold px-3 py-1 rounded-full" style="background-color: rgba(25, 135, 84, 0.1); color: #198754;">Security</span> <span class="text-xs" style="color: #4F5663;">10 min read</span>
        </div>
        <h3 class="text-lg font-bold mb-2" style="color: #212529;">Cybersecurity</h3>
        <p class="text-sm leading-relaxed mb-4" style="color: #495057;">4 Things You Can Do To Keep Yourself Cyber Safe.</p><a href="https://www.cisa.gov/news-events/news/4-things-you-can-do-keep-yourself-cyber-safe" target="_blank" class="text-sm font-semibold inline-flex items-center gap-2 transition hover:gap-3" style="color: #198754;"> Read More <i data-lucide="arrow-right" class="w-4 h-4"></i> </a>
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
  <div class="contact-card">
  <form id="contactForm" action="confirmation.php" method="post" autocomplete="off" novalidate>
    <!-- Full name -->
    <div class="form-group">
      <label for="fname" class="sr-only">Full name</label>
      <input
        class="contact-field"
        id="fname"
        type="text"
        name="fName"
        placeholder="Full name"
        maxlength="100"
        minlength="3"
        required
      >
      <div class="invalid-feedback">Please enter your full name.</div>
    </div>
    <!-- Email -->
    <div class="form-group">
      <label for="email" class="sr-only">Email address</label>
      <input
        class="contact-field"
        id="email"
        name="email"
        type="email"
        placeholder="Email address"
        maxlength="150"
        required
      >
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
    <!-- Phone -->
    <div class="form-group">
      <label for="phone" class="sr-only">Phone number</label>
      <input
        class="contact-field"
        id="phone"
        name="phone"
        type="tel"
        placeholder="Phone number"
        maxlength="14"
        inputmode="numeric"
        required
      >
      <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
    </div>
    <!-- Message -->
    <div class="form-group">
      <label for="message" class="sr-only">Message</label>
      <textarea
        class="contact-field contact-textarea"
        id="message"
        name="message"
        placeholder="Enter your message here..."
        maxlength="2000"
        required
      ></textarea>
      <div class="invalid-feedback">Please enter a message.</div>
    </div>
      <!-- Check for autocomplete bots -->
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
      <!-- <button class="btn btn-primary btn-lg">   
      <input
        id="submitButton"
        type="submit"
        value="Send Message"
        >
      </button> -->
<button id="submitButton" type="submit" class="btn btn-primary btn-lg">
  Send Message
</button>

      </div>
      </form>
      </div>
    </div>
   </section>  
   <!-- Footer -->
    <script src="./scripts/contactV.js"></script>
    <script src="./scripts/navigation.js"></script>
    <script src="./scripts/projectsCard.js"></script>
<?php 
include __DIR__ . '/templates/footer.html';
?>  

