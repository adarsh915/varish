  window.addEventListener("load", () => {
    gsap.from(".unique-navbar", {
      y: 80,          // starts 80px below
      opacity: 0,     // hidden
      duration: 1.8,  // animation time
      ease: "power3.out" // smooth motion
    });
  });

  // scroll
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
  const footerItems = document.querySelectorAll(
    "footer h2, footer h6, footer p, footer input, footer button, footer ul li, footer .custom-footer-section, footer .text-box"
  );

  gsap.fromTo(
    footerItems,
    { opacity: 0, y: 60 },
    {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power3.out",
      stagger: 0.08,
      scrollTrigger: {
        trigger: "footer",
        start: "top 90%",              // when footer enters
        end: "bottom 80%",             // when footer almost leaves
        toggleActions: "play reset play reset", 
        // 🔑 "play reset" → plays each time you scroll into view
        // and resets when you leave, so it replays next time
        once: false
      }
    }
  );
});

window.addEventListener("load", () => {
  ScrollTrigger.refresh();
});


// this is index image


  document.querySelectorAll(".project-card").forEach(function(card) {
    let revealImg = card.querySelector(".reveal-image");

    // Start hidden
    gsap.set(revealImg, { opacity: 0, xPercent: -50, yPercent: -50 });

    card.addEventListener("mousemove", function(e) {
      let rect = card.getBoundingClientRect();
      let x = e.clientX - rect.left;
      let y = e.clientY - rect.top;

      gsap.to(revealImg, {
        opacity: 1,
        x: x,
        y: y,
        duration: 0.25,
        ease: "power3.out"
      });
    });

    card.addEventListener("mouseleave", function() {
      gsap.to(revealImg, {
        opacity: 0,
        duration: 0.3,
        ease: "power3.in"
      });
    });
  });

//  gsap.registerPlugin(ScrollTrigger);

//     gsap.fromTo(".animated-video",
//       {
//         scaleX: 0.6,     // compressed horizontally
//         scaleY: 0.6,     // compressed vertically
//         y: 300,          // pushed down
//         opacity: 0.2
//       },
//       {
//         scaleX: 1,       // grow left + right
//         scaleY: 1,       // grow up
//         y: 0,
//         opacity: 1,
//         duration: 2.5,
//         ease: "power3.out",
//         scrollTrigger: {
//           trigger: ".animated-video",
//           start: "top 80%",   // when enters viewport
//           toggleActions: "play none none none"
//         }
//       }
//     );

    gsap.registerPlugin(ScrollTrigger);

    // Target each card separately
    document.querySelectorAll(".project-card").forEach((card) => {
      gsap.fromTo(card,
        {
          rotateX: -30,
          rotateY: 20,
          opacity: 0.3,
          scale: 0.8
        },
        {
          rotateX: 0,
          rotateY: 0,
          opacity: 1,
          scale: 1,
          duration: 1.5,
          ease: "power3.out",
          scrollTrigger: {
            trigger: card,
            start: "top 80%",  // trigger when card enters viewport
            toggleActions: "play none none none"
          }
        }
      );
    });
