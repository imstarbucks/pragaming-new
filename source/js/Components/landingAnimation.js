import gsap from "gsap";
import ScrollTrigger from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger);
export default function landingAnimation() {
	animationOnScroll()
}

const animationOnScroll = () => {
	const section = document.querySelector('section.home')
	const welcomeHeader = document.querySelector("#welcome-header")
	const heroLogo = document.querySelector("#hero-logo")
	const desc = document.querySelector('.description')

	const tl = gsap.timeline({
		ease: 'ease-in-out'
	})

	tl.fromTo(welcomeHeader, {
		y: 0,
		opacity: 1,
		scale: 1,
		height: 100
	}, {
		y: -100,
		opacity: 0,
		scale: 0,
		height: 0,
	}).fromTo(heroLogo, {
		scale: 1
	}, {
		scale: 1.5
	}, '<').fromTo(desc, {
		height: 0,
		y: 100,
		opacity: 0
	}, {
		height: 100,
		opacity: 1,
		y: 0
	})

	ScrollTrigger.create({
		animation: tl,
		trigger: section,
		pin: true,
		scrub: 1,
		start: 'top top',
		end: 'bottom',
		// markers: true
	})
}
