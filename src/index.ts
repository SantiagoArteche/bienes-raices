document.addEventListener("DOMContentLoaded", (): void => {
  eventListeners();
});

const eventListeners = (): void => {
  const mobileMenu: HTMLElement = document.querySelector(".hamburguer")!;

  mobileMenu.addEventListener("click", responsiveNavigation);

  darkMode();
};

function responsiveNavigation(): void {
  const navigation: HTMLElement = document.querySelector(".navigation")!;
  const darkMode: SVGAElement = document.querySelector(".darkMode")!;

  navigation.classList.toggle("hidden");
  navigation.classList.add("flex-col");
  navigation.classList.add("flex");
  darkMode.classList.toggle("hidden");
}

function darkMode(): void {
  const preferDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  if (preferDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  preferDarkMode.addEventListener("change", () => {
    if (preferDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const darkModeButton: SVGAElement = document.querySelector(".darkMode")!;

  darkModeButton.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });
}
