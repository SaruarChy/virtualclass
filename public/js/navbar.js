const hamburger = document.querySelector(".hamburger");
const mobile_menu = document.querySelector('.mobile-nav');

/*-------------opening side menu on mobile-----------*/
hamburger.addEventListener("click", () =>{
    hamburger.classList.toggle("active");
    mobile_menu.classList.toggle('is-active');
})

/*-------------closing side menu on mobile after click on menu-----------*/
document.querySelectorAll(".mob-nav-close").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    mobile_menu.classList.remove("is-active");
}))