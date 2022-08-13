const burgerMenu = document.querySelector(".burger__menu");
const navList = document.querySelector(".nav__list");
const carsItemBtn = document.querySelectorAll(".cars__item-btn");
const popup = document.querySelector(".popup");
const modalClose = document.querySelector(".modal__close");
const konsult = document.querySelector(".konsult");

burgerMenu.addEventListener("click", function () {
    navList.classList.toggle("active");
    burgerMenu.classList.toggle("active");
})

konsult.addEventListener("click", function () {
    popup.classList.toggle("active");
})

for (let i = 0; i < carsItemBtn.length; i++) {
    const element = carsItemBtn[i];
    element.addEventListener("click", function () {
        popup.classList.toggle("active");
    })
    modalClose.addEventListener("click", function () {
        popup.classList.remove("active");
    })
}