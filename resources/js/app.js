import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

// Theme management - Initialize immediately before any DOM is rendered
(function() {
    function applyTheme() {
        const theme = localStorage.theme || 'system';
        if (theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }
    
    // Apply theme immediately
    applyTheme();
    
    // Reapply theme when page becomes visible (fixes tab switching issue)
    document.addEventListener('visibilitychange', () => {
        if (!document.hidden) {
            applyTheme();
        }
    });
})();

// Global theme management functions
window.updateTheme = function(value) {
    if (value === 'dark' || (value === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        localStorage.theme = value;
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.theme = value === 'system' ? 'system' : 'light';
    }
};

// Listen for system theme changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (localStorage.theme === 'system') {
        window.updateTheme('system');
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
            const theme = localStorage.theme || 'system';
            if (theme === 'dark' || (theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    } else {
        Alpine.start();
    }
});
