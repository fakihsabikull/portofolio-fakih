
// NAVBAR SCROLL EFFECT
window.addEventListener("scroll", function(){
let navbar = document.querySelector(".navbar");

if(window.scrollY > 50){
navbar.classList.add("scrolled");
}else{
navbar.classList.remove("scrolled");
}
});


// REVEAL ANIMATION
window.addEventListener("scroll", function(){

let reveals = document.querySelectorAll(".reveal");

reveals.forEach((el) => {

let windowHeight = window.innerHeight;
let elementTop = el.getBoundingClientRect().top;

if(elementTop < windowHeight - 100){
el.classList.add("active");
}

});

});


// SKILL BAR ANIMATION (pakai data-skill)
let skillSection = document.querySelector("#skills");
let progressBars = document.querySelectorAll(".progress-bar");

let triggered = false;

window.addEventListener("scroll", function(){

let sectionTop = skillSection.getBoundingClientRect().top;
let windowHeight = window.innerHeight;

if(sectionTop < windowHeight - 100 && !triggered){

progressBars.forEach(bar => {
let value = bar.getAttribute("data-skill");
bar.style.width = value + "%";
});

triggered = true;
}

});


// BACK TO TOP BUTTON
let topBtn = document.getElementById("topBtn");

window.addEventListener("scroll", function(){

if(window.scrollY > 300){
topBtn.style.display = "flex";
}else{
topBtn.style.display = "none";
}

});

topBtn.onclick = function(){
window.scrollTo({
top:0,
behavior:"smooth"
});
};


// TYPING EFFECT
let text = "Hi, I'm Fakih";
let i = 0;

function typing(){
if(i < text.length){
document.getElementById("typing").innerHTML += text.charAt(i);
i++;
setTimeout(typing, 80);
}
}

typing();


// ACTIVE NAV LINK
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {

let current = "";

sections.forEach(section => {

const sectionTop = section.offsetTop - 200;

if(window.scrollY >= sectionTop){
current = section.getAttribute("id");
}

});

navLinks.forEach(link => {

link.classList.remove("active");

if(link.getAttribute("href") == "#" + current){
link.classList.add("active");
}

});

});