document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("theme-toggle");
    const html = document.documentElement;

    const storedTheme = localStorage.getItem("theme");
    if (storedTheme) {
        html.setAttribute("data-theme", storedTheme);
    }

    toggle.addEventListener("click", function () {
        const current = html.getAttribute("data-theme");
        const next = current === "dark" ? "light" : "dark";
        html.setAttribute("data-theme", next);
        localStorage.setItem("theme", next);
    });
});