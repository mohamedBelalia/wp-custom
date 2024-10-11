function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
    document.getElementById("overlay").classList.remove("hidden");
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("overlay").classList.add("hidden");
}

console.log("navbar");
