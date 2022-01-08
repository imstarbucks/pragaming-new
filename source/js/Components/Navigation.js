export default function Nav() {
	hamburgerToggle()
}

const hamburgerToggle = () => {
	const hamburger = document.querySelector(".hamburger")
	const menu = document.querySelector(".navigation-menu")


	console.log("nav init")
	hamburger.addEventListener('click', (e) => {
		e.currentTarget.classList.toggle('is-shown')

		if (hamburger.classList.contains("is-shown")) {
			menu.classList.add('is-shown')
		} else {
			menu.classList.remove('is-shown')
		}
	})
}
