 const defaultConfig = {
      company_name: "Xugarsoft",
      hero_title: "Building Digital Excellence",
      hero_subtitle: "We craft innovative software solutions that transform businesses and drive growth through cutting-edge technology.",
      services_title: "Our Services",
      about_title: "About Us",
      cta_button_text: "Get Started",
      background_color: "#f8f9fa",
      surface_color: "#ffffff",
      text_color: "#212529",
      primary_color: "#512da8",
      secondary_color: "#495057"
    };

    async function onConfigChange(config) {
      document.getElementById('company-name').textContent = config.company_name || defaultConfig.company_name;
      document.getElementById('hero-title').textContent = config.hero_title || defaultConfig.hero_title;
      document.getElementById('hero-subtitle').textContent = config.hero_subtitle || defaultConfig.hero_subtitle;
      document.getElementById('services-title').textContent = config.services_title || defaultConfig.services_title;
      document.getElementById('about-title').textContent = config.about_title || defaultConfig.about_title;
      
      const ctaText = config.cta_button_text || defaultConfig.cta_button_text;
      document.getElementById('cta-nav').textContent = ctaText;
      document.getElementById('cta-hero').innerHTML = `<span>${ctaText}</span><i data-lucide="arrow-right" class="w-5 h-5"></i>`;
      
      // Apply colors
      const bgColor = config.background_color || defaultConfig.background_color;
      const surfaceColor = config.surface_color || defaultConfig.surface_color;
      const textColor = config.text_color || defaultConfig.text_color;
      const primaryColor = config.primary_color || defaultConfig.primary_color;
      const secondaryColor = config.secondary_color || defaultConfig.secondary_color;
      
      document.getElementById('app').style.backgroundColor = bgColor;
      document.getElementById('nav-section').style.backgroundColor = surfaceColor;
      
      // Re-initialize icons after innerHTML changes
      lucide.createIcons();
    }

    function mapToCapabilities(config) {
      return {
        recolorables: [
          {
            get: () => config.background_color || defaultConfig.background_color,
            set: (value) => { config.background_color = value; window.elementSdk.setConfig({ background_color: value }); }
          },
          {
            get: () => config.surface_color || defaultConfig.surface_color,
            set: (value) => { config.surface_color = value; window.elementSdk.setConfig({ surface_color: value }); }
          },
          {
            get: () => config.text_color || defaultConfig.text_color,
            set: (value) => { config.text_color = value; window.elementSdk.setConfig({ text_color: value }); }
          },
          {
            get: () => config.primary_color || defaultConfig.primary_color,
            set: (value) => { config.primary_color = value; window.elementSdk.setConfig({ primary_color: value }); }
          },
          {
            get: () => config.secondary_color || defaultConfig.secondary_color,
            set: (value) => { config.secondary_color = value; window.elementSdk.setConfig({ secondary_color: value }); }
          }
        ],
        borderables: [],
        fontEditable: undefined,
        fontSizeable: undefined
      };
    }

    function mapToEditPanelValues(config) {
      return new Map([
        ["company_name", config.company_name || defaultConfig.company_name],
        ["hero_title", config.hero_title || defaultConfig.hero_title],
        ["hero_subtitle", config.hero_subtitle || defaultConfig.hero_subtitle],
        ["services_title", config.services_title || defaultConfig.services_title],
        ["about_title", config.about_title || defaultConfig.about_title],
        ["cta_button_text", config.cta_button_text || defaultConfig.cta_button_text]
      ]);
    }

    // Initialize
    if (window.elementSdk) {
      window.elementSdk.init({
        defaultConfig,
        onConfigChange,
        mapToCapabilities,
        mapToEditPanelValues
      });
    }

    lucide.createIcons();


    (function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9de8edad671578e4',t:'MTc3Mzg4NjA5Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();