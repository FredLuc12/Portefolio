const menuhamb = document.querySelector(".menu-hamb")
const navlinks = document.querySelector(".nav-links")

menuhamb.addEventListener("click", () => {
    navlinks.classList.toggle('mobile-menu')
})