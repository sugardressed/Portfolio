// Config
const defaultConfig = {
  error_title: "⚠️ Portal Misfire Detected ⚠️",
  error_message:
    "You’ve drifted outside the safe zone… let’s get you back.",
  redirect_text: "Stabilizing in",
  button_text: "Return to Safety",
  background_color: "#212529",
  surface_color: "#f8f9fa",
  text_color: "#adb5bd",
  primary_color: "#512da8",
  secondary_color: "#673ab7",
};

// Particles
const particleColors = ["#512da8", "#673ab7", "#ffc107", "#0dcaf0", "#dc3545"];
const particlesEl = document.getElementById("particles");
for (let i = 0; i < 20; i++) {
  const p = document.createElement("div");
  p.className = "particle";
  p.style.left = Math.random() * 100 + "%";
  p.style.top = Math.random() * 100 + "%";
  p.style.setProperty("--dx", Math.random() * 200 - 100 + "px");
  p.style.setProperty("--dy", Math.random() * 200 - 100 + "px");
  p.style.background = particleColors[i % particleColors.length];
  p.style.animationDelay = Math.random() * 4 + "s";
  p.style.animationDuration = 3 + Math.random() * 3 + "s";
  p.style.width = p.style.height = 4 + Math.random() * 8 + "px";
  particlesEl.appendChild(p);
}

// Fun facts
const funFacts = [
  "> This page is lost in the matrix...",
  "> 404: Brain cell not found 🧠",
  "> Houston, we have a problem 🚀",
  "> Error: Coffee not found ☕",
  "> The page is playing hide & seek 🙈",
  "> How did you get here? ❓",
];
document.getElementById("fun-fact").textContent =
  funFacts[Math.floor(Math.random() * funFacts.length)];

// Countdown
let countdown = 10;
const totalTime = 10;
const countdownEl = document.getElementById("countdown");
const progressBar = document.getElementById("progress-bar");
const ring = document.getElementById("countdown-ring");

const interval = setInterval(() => {
  countdown--;
  countdownEl.textContent = countdown;
  const pct = (countdown / totalTime) * 100;
  progressBar.style.width = pct + "%";
  const deg = (1 - countdown / totalTime) * 360;
  ring.style.transform = `rotate(${deg}deg)`;
  if (countdown <= 3) {
    countdownEl.style.color = "#dc3545";
  }
  if (countdown <= 0) {
    clearInterval(interval);
    triggerExplosion();
  }
}, 1000);

function triggerExplosion() {
  const wrapper = document.getElementById("app-wrapper");
  const countdownContainer = document.querySelector(".relative.inline-flex");

  // Add screen flash
  wrapper.classList.add("flash-bg");

  // Shake the entire page
  document.querySelector(".relative.z-10").classList.add("shake-on-zero");

  // Create explosion particles from countdown center
  const rect = countdownContainer.getBoundingClientRect();
  const centerX = rect.left + rect.width / 2;
  const centerY = rect.top + rect.height / 2;

  const explosionColors = [
    "#512da8",
    "#673ab7",
    "#ffc107",
    "#0dcaf0",
    "#dc3545",
    "#f8f9fa",
  ];
  for (let i = 0; i < 24; i++) {
    const particle = document.createElement("div");
    particle.className = "explosion-particle";
    particle.style.left = centerX + "px";
    particle.style.top = centerY + "px";

    const angle = (i / 24) * Math.PI * 2;
    const distance = 120 + Math.random() * 80;
    const ex = Math.cos(angle) * distance;
    const ey = Math.sin(angle) * distance;

    particle.style.setProperty("--ex", ex + "px");
    particle.style.setProperty("--ey", ey + "px");
    particle.style.width = 8 + Math.random() * 12 + "px";
    particle.style.height = particle.style.width;
    particle.style.background =
      explosionColors[Math.floor(Math.random() * explosionColors.length)];
    particle.style.borderRadius = "50%";
    particle.style.boxShadow = `0 0 12px ${particle.style.background}`;

    document.body.appendChild(particle);

    setTimeout(() => particle.remove(), 800);
  }

  // Show home page after explosion
  setTimeout(() => {
    window.location.href = "https://elizabeth.xugarsoft.com/";
  }, 200);
}

function handleGoHome() {
  clearInterval(interval);
  triggerExplosion();
}

// Element SDK
function applyConfig(config) {
  const c = { ...defaultConfig, ...config };
  document.getElementById("error-title").textContent = c.error_title;
  document.getElementById("error-message").textContent = c.error_message;
  document.getElementById("redirect-text").textContent = c.redirect_text;
  document.getElementById("btn-text").textContent = c.button_text;

  const wrapper = document.getElementById("app-wrapper");
  wrapper.style.background = `radial-gradient(ellipse at 30% 20%, ${c.primary_color}40 0%, transparent 50%), radial-gradient(ellipse at 70% 80%, ${c.secondary_color}26 0%, transparent 50%), ${c.background_color}`;

  document.getElementById("error-title").style.color = c.surface_color;
  document.getElementById("error-message").style.color = c.text_color;
  document.getElementById("redirect-text").style.color = c.text_color;
  document.getElementById("home-btn").style.background =
    `linear-gradient(135deg, ${c.primary_color}, ${c.secondary_color})`;

  progressBar.style.background = `linear-gradient(90deg, ${c.primary_color}, ${c.secondary_color})`;
}

if (window.elementSdk) {
  window.elementSdk.init({
    defaultConfig,
    onConfigChange: async (config) => applyConfig(config),
    mapToCapabilities: (config) => {
      const c = { ...defaultConfig, ...config };
      const makeColor = (key) => ({
        get: () => c[key],
        set: (v) => {
          c[key] = v;
          window.elementSdk.setConfig({ [key]: v });
        },
      });
      return {
        recolorables: [
          makeColor("background_color"),
          makeColor("surface_color"),
          makeColor("text_color"),
          makeColor("primary_color"),
          makeColor("secondary_color"),
        ],
        borderables: [],
        fontEditable: {
          get: () => c.font_family || "Outfit",
          set: (v) => {
            c.font_family = v;
            window.elementSdk.setConfig({ font_family: v });
          },
        },
        fontSizeable: undefined,
      };
    },
    mapToEditPanelValues: (config) => {
      const c = { ...defaultConfig, ...config };
      return new Map([
        ["error_title", c.error_title],
        ["error_message", c.error_message],
        ["redirect_text", c.redirect_text],
        ["button_text", c.button_text],
      ]);
    },
  });
}

lucide.createIcons();
(function () {
  function c() {
    var b = a.contentDocument || a.contentWindow.document;
    if (b) {
      var d = b.createElement("script");
      d.innerHTML =
        "window.__CF$cv$params={r:'9eb56932310a2ebd',t:'MTc3NjAzMDI1Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
      b.getElementsByTagName("head")[0].appendChild(d);
    }
  }
  if (document.body) {
    var a = document.createElement("iframe");
    a.height = 1;
    a.width = 1;
    a.style.position = "absolute";
    a.style.top = 0;
    a.style.left = 0;
    a.style.border = "none";
    a.style.visibility = "hidden";
    document.body.appendChild(a);
    if ("loading" !== document.readyState) c();
    else if (window.addEventListener)
      document.addEventListener("DOMContentLoaded", c);
    else {
      var e = document.onreadystatechange || function () {};
      document.onreadystatechange = function (b) {
        e(b);
        "loading" !== document.readyState &&
          ((document.onreadystatechange = e), c());
      };
    }
  }
})();
