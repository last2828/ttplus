import gsap from 'gsap'
import TweenMax from 'gsap'
import ScrollMagic from 'scrollmagic';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators'
import 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap'
let tl = gsap.timeline()
gsap.to('#bg', {duration: 1, opacity: 1, ease: "power4.out"})
gsap.to('#image', {duration: 0.5, scale: 1, ease: "back.out(2.2)", delay: 0.5})
gsap.to('#title', { duration: 2, opacity: 1, delay: 0.7, ease: "power4.out" })
gsap.to('#text', { duration: 2, opacity: 1, delay: 0.9, ease: "power4.out" })
gsap.to('#button-1', { duration: 1, scale: 1, delay: 1, ease: "power4.out"})
gsap.to('#button-2', { duration: 1, scale: 1, delay: 1.1, ease: "power4.out"})
gsap.to('#video', { duration: 2, opacity: 1, delay: 1.2, ease: "power4.out" })
gsap.to('#category', { duration: 2, opacity: 1, delay: 1.3, ease: "power4.out" })


let controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({triggerElement: '.about', duration: 300, offset: -100})
  .setTween([
    TweenMax.to('.card-1', 0.5, { y: 0, opacity: 1 }),
    TweenMax.to('.card-2', 0.5, { y: 0, opacity: 1 })
  ])
  // .addIndicators({name: 'карточки'}) // add indicators (requires plugin)
  .addTo(controller);

new ScrollMagic.Scene({triggerElement: '.about', duration: 300, offset: -250})
  .setTween([
    TweenMax.to('.about .heading', 0.5, { opacity: 1 }),
    TweenMax.to('.about__block-text', 0.5, { opacity: 1, delay: 0.5 })
  ])
  // .addIndicators({name: 'текст о компании'}) // add indicators (requires plugin)
  .addTo(controller);