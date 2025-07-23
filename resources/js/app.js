import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const themeToggleBtn = document.getElementById("theme-toggle");
    const darkIcon = document.getElementById("theme-toggle-dark-icon");
    const lightIcon = document.getElementById("theme-toggle-light-icon");

    // Set icon saat load
    if (localStorage.getItem("theme") === "dark" ||
        (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.documentElement.classList.add("dark");
        darkIcon.classList.remove("hidden");
        lightIcon.classList.add("hidden");
    } else {
        document.documentElement.classList.remove("dark");
        darkIcon.classList.add("hidden");
        lightIcon.classList.remove("hidden");
    }

    themeToggleBtn?.addEventListener("click", function () {
        // Toggle class dark
        document.documentElement.classList.toggle("dark");

        // Toggle icons
        darkIcon.classList.toggle("hidden");
        lightIcon.classList.toggle("hidden");

        // Simpan ke localStorage
        if (document.documentElement.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
    });
});

