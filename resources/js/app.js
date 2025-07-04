import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

Alpine.plugin(collapse);
window.Alpine = Alpine;

// Wait for Livewire to be ready before starting Alpine
document.addEventListener("DOMContentLoaded", () => {
    if (window.Livewire) {
        document.addEventListener("livewire:initialized", () => {
            Alpine.start();
        });
    } else {
        Alpine.start();
    }
});
