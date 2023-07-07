
const tl = gsap.timeline({ defaults: {ease: "power1.out"}});
tl.to(".text", {y: "-100%", duration:1, delay: 0.8, stagger: 0.25});
tl.to("#slider", {y:"-300%", duration:1.5, delay:0.5});
tl.to("#intro", {y:"-100%", duration:1},"-=1");

tl.fromTo("nav", {opacity: 0}, {opacity:1, duration:1});
tl.fromTo("#hero_text", {opacity: 0}, {opacity:1, duration:1},  "-=0.5");