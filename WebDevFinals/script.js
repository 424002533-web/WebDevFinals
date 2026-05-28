// NAVBAR BACKGROUND ON SCROLL
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
    if(window.scrollY > 50){
        header.style.background = "rgba(0,0,0,0.85)";
        header.style.padding = "0px";
    } else {
        header.style.background = "rgba(0,0,0,0.6)";
    }
});


// MENU CARD CLICK EFFECT
const cards = document.querySelectorAll(".menu-card");

cards.forEach(card => {
    card.addEventListener("click", () => {

        card.style.transform = "scale(0.95)";

        setTimeout(() => {
            card.style.transform = "scale(1)";
        }, 150);

    });
});


// BUTTON RIPPLE EFFECT
const btn = document.querySelector(".btn");

btn.addEventListener("click", function(e){

    let x = e.clientX - e.target.offsetLeft;
    let y = e.clientY - e.target.offsetTop;

    let ripple = document.createElement("span");

    ripple.style.left = `${x}px`;
    ripple.style.top = `${y}px`;

    ripple.classList.add("ripple");

    this.appendChild(ripple);

    setTimeout(() => {
        ripple.remove();
    }, 600);
});


// FADE-IN ON SCROLL
const sections = document.querySelectorAll("section");

window.addEventListener("scroll", () => {

    sections.forEach(section => {

        const sectionTop = section.getBoundingClientRect().top;

        if(sectionTop < window.innerHeight - 100){
            section.classList.add("show");
        }

    });

});