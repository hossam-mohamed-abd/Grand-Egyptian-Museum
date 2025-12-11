const gemSidebar = document.getElementById("gemSidebar");
const sidebarToggle = document.getElementById("sidebarToggle");
const navlinkmopile = document.getElementsByClassName("museum-menu-btn")[0];

sidebarToggle.addEventListener("click", () => {
  gemSidebar.classList.toggle("test");
  navlinkmopile.classList.toggle("opacity-0");
});

navlinkmopile.addEventListener("click", () => {
  gemSidebar.classList.toggle("test");
  navlinkmopile.classList.toggle("opacity-0");
});

document
  .getElementsByClassName("documentNotNavbar")[0]
  .addEventListener("click", () => {
    gemSidebar.classList.remove("test");
    navlinkmopile.classList.remove("opacity-0");
  });






document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.getElementById("glassSidebar");
    const toggleBtn = document.getElementById("profileToggle");
    const closeBtn = document.querySelector(".glass-close");

    if (!sidebar || !toggleBtn) return;

    // فتح
    toggleBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        sidebar.classList.add("open");
    });

    // غلق بزر X
    closeBtn.addEventListener("click", () => {
        sidebar.classList.remove("open");
    });

    // اغلاق عند الضغط خارجها
    document.addEventListener("click", (e) => {
        if (!sidebar.contains(e.target) && e.target !== toggleBtn) {
            sidebar.classList.remove("open");
        }
    });
});
