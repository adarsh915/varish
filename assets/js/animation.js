// 3. Initialize Lenis


// --- CORE LENIS SETUP ---

// 3. Initialize Lenis
const lenis = new Lenis({
  duration: 1.5, // ⬅️ INCREASED: Slower, smoother scroll
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smoothWheel: true,
  wheelMultiplier: 0.8, // ⬅️ DECREASED: Slower scroll speed on mouse wheel
  // lerp: 0.075, // Uncomment this for slightly different control, especially on touchpads
});

// 4. Connect Lenis to ScrollTrigger (Crucial for all animations)
lenis.on('scroll', ScrollTrigger.update);

// 5. Use GSAP's Ticker to drive the Lenis animation loop
gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

// Force a ScrollTrigger refresh after the initial Lenis setup
window.addEventListener("load", () => ScrollTrigger.refresh());


// --- YOUR MODIFIED ANIMATIONS START HERE ---

// AV animate (No changes needed)
gsap.to(".loadimage", {
  opacity: 1,
  duration: 6,
  ease: "power4.out",
  delay: 4,
});

gsap.to(".unique-hero-subtitle", {
  opacity: 1,
  duration: 6,
  ease: "power4.out",
  delay: 3.5,
});
// end

// varish mansuri animation AD (Scrub increased for more fluidity)
// head 1 → biggest reveal
gsap.to(".head-1", {
  y: 35,
  ease: "power2.out",
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 4, // ⬅️ INCREASED SCRUB
  }
});

// head 2 → medium reveal
gsap.to(".head-2", {
  y: 60,
  ease: "power2.out",
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 4, // ⬅️ INCREASED SCRUB
  }
});

// head 3 → smallest reveal
gsap.to(".head-3", {
  y: 75,
  ease: "power2.out",
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 4, // ⬅️ INCREASED SCRUB
  }
});
// end

// homepage video AD (Scrub increased for more fluidity)
let mk = gsap.matchMedia();


mk.add("(max-width: 767px)", () => {
  gsap.fromTo(".video-div",
    {
      scale: 0.6,
      y: 60,
      opacity: 0,
    },
    {
      scale: 1,
      y: -20,
      opacity: 1,
      ease: "power3.out",
      duration: 1.6,
      scrollTrigger: {
        trigger: ".video-div",
        start: "top 50%",   // ⬅️ start when screen scroll reaches 50%
        toggleActions: "play none none none",
      }
    }
  );
});

gsap.fromTo(".video-div",
  {
    scale: 0.6,
    y: 0,
  },
  {
    scale: 1,
    y: 0,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".video-div",
      start: "top bottom-=1",
      end: "top 70%",
      scrub: 4, // ⬅️ INCREASED SCRUB
    }
  }
);
// end


// video pin image effect AD (Pin scrub increased for smoother transition)
const images = document.querySelectorAll(".img-item");
const startBottom = ["-140%", "-140%", "-140%"];
const endBottom   = ["160%", "160%", "160%"];
const segment = 1400;
const totalScroll = images.length * segment;

// Pin Area
ScrollTrigger.create({
    trigger: "#pinArea",
    start: "top 20%",
    end: "+=" + totalScroll,
    pin: true,
    scrub: 2, // ⬅️ INCREASED SCRUB
    pinSpacing: true,
});

// Timeline for image transitions
const t5 = gsap.timeline({
    scrollTrigger: {
        trigger: "#pinArea",
        start: "top 25%",
        end: "+=" + totalScroll,
        scrub: 2, // ⬅️ INCREASED SCRUB
    }
});

// Animate images one-by-one (no changes needed)
images.forEach((img, i) => {
    gsap.set(img, { bottom: startBottom[i], opacity: 0 });

    t5.to(img, {
        opacity: 1,
        bottom: "10%",
        ease: "power1.out",
        duration: 0.5,
    }, i);

    t5.to(img, {
        bottom: endBottom[i],
        opacity: 1,
        ease: "power1.inOut",
        duration: 0.5
    });
});
// end


// homepage cards AD (No changes needed)
gsap.utils.toArray(".animate_card").forEach((card, i) => {

    const direction = i % 2 === 0 ? -80 : 80;

    gsap.from(card, {
      scrollTrigger: {
        trigger: card,
        start: "top 85%",
        end: "bottom 60%",
        scrub: 3,
        toggleActions: "play none none reverse",
      },
      x: direction,
      opacity: 1,
      duration: 3.2,
      ease: "power3.out"
    });

});
// end


// button text AD (No changes needed)
const btn = document.querySelector('.talk-btn');
const a = document.querySelector('.text-a');
const b = document.querySelector('.text-b');

a.style.willChange = "transform";
b.style.willChange = "transform";

const tl = gsap.timeline({ paused: true });

gsap.set(a, { yPercent: 0 });
gsap.set(b, { yPercent: 100 });

tl.to(a, {
    yPercent: -100,
    duration: 0.55,
    ease: "power4.out"
}, 0);

tl.to(b, {
    yPercent: 0,
    duration: 0.55,
    ease: "power4.out"
}, 0.05);

tl.to(btn, {
    duration: 0.55,
    ease: "power2.out"
}, 0);

tl.timeScale(0.9);

btn.addEventListener("mouseenter", () => tl.play());
btn.addEventListener("mouseleave", () => tl.reverse());
btn.addEventListener("focus", () => tl.play());
btn.addEventListener("blur", () => tl.reverse());

let touchTimer = null;
btn.addEventListener("touchstart", (e) => {
    e.preventDefault();
    tl.play();
    clearTimeout(touchTimer);
    touchTimer = setTimeout(() => tl.reverse(), 1200);
}, { passive: false });
// end


// footer image AD (No changes needed)
let mm = gsap.matchMedia();

mm.add("(max-width: 576px)", () => {
  // Mobile animation
  gsap.to(".scroll-image", {
    y: -60,
    opacity: 1,
    ease: "power3.out",
    duration: 1.5,
    scrollTrigger: {
      trigger: ".text-box",
      start: "top bottom",
      end: "top center",
      scrub: 2.5,
    }
  });
});

mm.add("(min-width: 769px)", () => {
  // Desktop / large screens animation
  gsap.to(".scroll-image", {
    y: 0,          // different animation for desktop
    opacity: 1,
    ease: "power3.out",
    duration: 1.5,
    scrollTrigger: {
      trigger: ".text-box",
      start: "top bottom",
      end: "top center",
      scrub: 2.5,
    }
  });
});

// end

// shine animation bottom footer AD (FIXED)
gsap.set(".shine-overlay", { x: "-150%" });

ScrollTrigger.create({
  trigger: document.documentElement,
  // ⬅️ FIX: Changed 'top' to 'bottom' to trigger when the scroll ENDS.
  start: () =>
    (document.documentElement.scrollHeight - window.innerHeight) + " bottom",
  once: true,
  onEnter: () => {
    gsap.to(".shine-overlay", {
      x: "400%",
      duration: 3,
      ease: "power2.out",
      repeat: -1,
      repeatDelay: 0.5
    });
  }
});

// Refresh on load
window.addEventListener("load", () => ScrollTrigger.refresh());
// end
// end