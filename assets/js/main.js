console.log("hello CV");

function myBurger() {
    var element = document.getElementById("burger");
    element.classList.toggle("active");
}


window.scrollBy({
    top: 0, // could be negative value
    left: 0,
    behavior: 'smooth'
});