// AV animate
// image load varish AD
gsap.to(".loadimage", {
  opacity: 1,
  duration: 6,
  ease: "power4.out",
  delay: 4,     // ⬅ animation starts after delay
});

gsap.to(".unique-hero-subtitle", {
  opacity: 1,
  duration: 6,
  ease: "power4.out",
  delay: 3.5,     // ⬅ animation starts after delay
});
// end

//varish mansuri animation AD

gsap.registerPlugin(ScrollTrigger);

// head 1 → biggest reveal
gsap.to(".head-1", {
  y: 35,
  ease: "power2.out",     // smooth easing
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 3,             // smooth scroll following
  }
});

// head 2 → medium reveal
gsap.to(".head-2", {
  y: 60,
  ease: "power2.out",
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 3,
  }
});

// head 3 → smallest reveal
gsap.to(".head-3", {
  y: 75,
  ease: "power2.out",
  scrollTrigger: {
    start: "top top+=1",
    end: "+=600",
    scrub: 3,
  }
});
//end

// homepage video AD
gsap.registerPlugin(ScrollTrigger);

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
      start: "top bottom-=1",  // ⬅ starts even with 1px scroll
      end: "top 70%",
      scrub: 3.2,
    }
  }
);
// end


// video pin image effect AD
gsap.registerPlugin(ScrollTrigger);

const images = document.querySelectorAll(".img-item");

// ⭐ Set custom bottom positions for each image
const startBottom = ["-140%", "-140%", "-140%"];  
const endBottom   = ["160%", "160%", "160%"];      

// pin area height based on images
const segment = 1400;
const totalScroll = images.length * segment;

// Pin the wrapper
ScrollTrigger.create({
    trigger: "#pinArea",
    start: "top 20%",
    end: "+=" + totalScroll,
    pin: true,
    scrub: 1.2,           // ⭐ smoother scrub
    pinSpacing: true,
    // anticipatePin: 1   // ⭐ FIX jump
});

// Timeline
const t5 = gsap.timeline({
    scrollTrigger: {
        trigger: "#pinArea",
        start: "top 25%",
        end: "+=" + totalScroll,
        scrub: 1.2,        // ⭐ smooth scrub
    }
});

// Animate images one-by-one
images.forEach((img, i) => {

  // Apply custom starting position
  gsap.set(img, { bottom: startBottom[i], opacity: 0 });

  // ⭐ Smooth appear + move toward center
  t5.to(img, {
      opacity: 1,
      bottom: "10%",
      ease: "power1.out",      // ⭐ smooth
      duration: 0.5,           // ⭐ smoother transition
  }, i);

  // ⭐ Smooth exit upward
  t5.to(img, {
      bottom: endBottom[i],
      opacity: 1,
      ease: "power1.inOut",    // ⭐ smooth exit
      duration: 0.5
  });
});
// end



// homepage cards AD

gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".animate_card").forEach((card, i) => {

  // alternate direction
  const direction = i % 2 === 0 ? -80 : 80;

  gsap.from(card, {
    scrollTrigger: {
      trigger: card,
      start: "top 85%",
      end: "bottom 60%",       // helps smoother reversing
      scrub: 3,                // ★ smooth forward & reverse
      toggleActions: "play none none reverse",
    },
    x: direction,
    opacity: 1,
    duration: 3.2,
    ease: "power3.out"
  });

});
// end


// button text AD
const btn = document.querySelector('.talk-btn');
const a = document.querySelector('.text-a');
const b = document.querySelector('.text-b');

// GPU optimization = smoother
a.style.willChange = "transform";
b.style.willChange = "transform";

// Create timeline
const tl = gsap.timeline({ paused: true });

// Positions
gsap.set(a, { yPercent: 0 });
gsap.set(b, { yPercent: 100 });

// Smoothest swap animation
tl.to(a, {
  yPercent: -100,
  duration: 0.55,
  ease: "power4.out"
}, 0);

tl.to(b, {
  yPercent: 0,
  duration: 0.55,
  ease: "power4.out"
}, 0.05); // small delay = smoother flow

tl.to(btn, {
  duration: 0.55,
  ease: "power2.out"
}, 0);

// Smooth playback
tl.timeScale(0.9);

// Hover events
btn.addEventListener("mouseenter", () => tl.play());
btn.addEventListener("mouseleave", () => tl.reverse());

// Focus (keyboard)
btn.addEventListener("focus", () => tl.play());
btn.addEventListener("blur", () => tl.reverse());

// Touch (mobile)
let touchTimer = null;
btn.addEventListener("touchstart", (e) => {
  e.preventDefault();
  tl.play();
  clearTimeout(touchTimer);
  touchTimer = setTimeout(() => tl.reverse(), 1200);
}, { passive: false });
// end


// footer image AD

gsap.registerPlugin(ScrollTrigger);

gsap.to(".scroll-image", {
  y: 0,               // move image UP smoothly
  opacity: 1,           // fade clearly
  ease: "power3.out",   // smooth soft motion
  duration: 1.5,
  scrollTrigger: {
    trigger: ".text-box",
    start: "top bottom",      // trigger when image enters screen
    end: "top center",        // finish animation when you reach near bottom
    scrub: 2.5,               // SUPER smooth
  }
});
// end

// shine animation bottom footer AD

gsap.registerPlugin(ScrollTrigger);

// Start outside screen
gsap.set(".shine-overlay", { x: "-150%" });

// Trigger when the user reaches the very bottom of the page
ScrollTrigger.create({
  trigger: document.documentElement,
  start: () =>
    (document.documentElement.scrollHeight - window.innerHeight) + " bottom",
  once: true,   // triggers only first time you reach bottom
  onEnter: () => {
    gsap.to(".shine-overlay", {
      x: "400%",
      duration: 3,
      ease: "power2.out",
      repeat: -1,      // ⭐ keeps looping forever
      repeatDelay: 0.5 // optional pause between loops
    });
  }
});

// Refresh on load for accurate page height
window.addEventListener("load", () => ScrollTrigger.refresh());
// end
// AD animate end