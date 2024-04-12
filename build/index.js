"use strict";
document.addEventListener("DOMContentLoaded", () => {
    eventListeners();
});
const eventListeners = () => {
    const mobileMenu = document.querySelector(".hamburguer");
    mobileMenu.addEventListener("click", responsiveNavigation);
    darkMode();
};
function responsiveNavigation() {
    const navigation = document.querySelector(".navigation");
    const darkMode = document.querySelector(".darkMode");
    navigation.classList.toggle("hidden");
    navigation.classList.add("flex-col");
    navigation.classList.add("flex");
    darkMode.classList.toggle("hidden");
}
function darkMode() {
    const preferDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
    if (preferDarkMode.matches) {
        document.body.classList.add("dark-mode");
    }
    else {
        document.body.classList.remove("dark-mode");
    }
    preferDarkMode.addEventListener("change", () => {
        if (preferDarkMode.matches) {
            document.body.classList.add("dark-mode");
        }
        else {
            document.body.classList.remove("dark-mode");
        }
    });
    const darkModeButton = document.querySelector(".darkMode");
    darkModeButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
}
