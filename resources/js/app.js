import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

// Global theme management functions
window.updateTheme = function (value) {
    if (
        value === "dark" ||
        (value === "system" &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
        localStorage.theme = value;
    } else {
        document.documentElement.classList.remove("dark");
        localStorage.theme = value === "system" ? "system" : "light";
    }
};

// Apply theme function for reuse
function applyTheme() {
    const theme = localStorage.theme || "system";
    if (
        theme === "dark" ||
        (theme === "system" &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }
}

// Listen for system theme changes
window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", () => {
        if (localStorage.theme === "system") {
            window.updateTheme("system");
        }
    });

// Reapply theme when page becomes visible (fixes tab switching issue)
document.addEventListener("visibilitychange", () => {
    if (!document.hidden) {
        applyTheme();
    }
});

Alpine.plugin(collapse);
window.Alpine = Alpine;

// Wait for Livewire to be ready before starting Alpine
document.addEventListener("DOMContentLoaded", () => {
    if (window.Livewire) {
        document.addEventListener("livewire:initialized", () => {
            Alpine.start();
        });

        // Reapply theme after Livewire navigation
        document.addEventListener("livewire:navigated", () => {
            applyTheme();
        });
    } else {
        Alpine.start();
    }
});
