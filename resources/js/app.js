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

// Add smooth transition for page changes (for non-Livewire navigation)
document.addEventListener("DOMContentLoaded", () => {
    // Add page transition class to body
    document.body.classList.add(
        "transition-opacity",
        "duration-150",
        "ease-in-out"
    );

    // Handle form submissions to maintain theme
    document.addEventListener("submit", () => {
        // Store current theme before form submission
        const currentTheme = localStorage.theme || "system";
        sessionStorage.setItem("pendingTheme", currentTheme);
    });

    // Restore theme after form submissions/redirects
    const pendingTheme = sessionStorage.getItem("pendingTheme");
    if (pendingTheme) {
        window.updateTheme(pendingTheme);
        sessionStorage.removeItem("pendingTheme");
    }
});

Alpine.plugin(collapse);
window.Alpine = Alpine;

// Wait for DOM to be ready before starting Alpine
document.addEventListener("DOMContentLoaded", () => {
    // Apply theme immediately when page loads
    applyTheme();

    if (window.Livewire) {
        document.addEventListener("livewire:initialized", () => {
            Alpine.start();
        });

        // Reapply theme after Livewire navigation (for settings pages)
        document.addEventListener("livewire:navigated", () => {
            applyTheme();
        });
    } else {
        Alpine.start();
    }
});
