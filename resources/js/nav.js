//
const btn = document.querySelector("button.mobile-menu-button");
const menu = doucument.querySelector(".mobile-menu");
btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
