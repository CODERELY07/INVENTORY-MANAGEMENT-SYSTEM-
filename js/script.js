const bar = document.getElementById("toggleBtn");
const dashboard_toggle = document.getElementById("dashboard_toggle");
let sidebarOpen = true;

bar.addEventListener("click", (event) => {
    event.preventDefault();

    if (sidebarOpen) {
        dashboard_toggle.style.width = "10%";

        // Get the menu icons
        let menuIcons = document.getElementsByClassName("menu-icons");
        for (let i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = "none";
        }
    } else {
        // Get the menu icons
        dashboard_toggle.style.width = "30%";
        let menuIcons = document.getElementsByClassName("menu-icons");
        for (let i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = "flex";
        }
    }

    // Toggle the sidebarOpen state
    sidebarOpen = !sidebarOpen;
});
