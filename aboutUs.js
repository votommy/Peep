document.getElementById("copyrightInfo").innerHTML = "&copy; " + new Date().getFullYear() + " Peep. All rights reserved";
            
function transformHamburger() {
    if(!document.getElementById("hamburgerMenu").classList.contains("xBTN")) {
        showNavList();
    }
    else {
        hideNavList();
    }
}

function showNavList() {
    document.getElementById("hamburgerMenu").classList.add("xBTN");
    document.getElementById("navList").classList.add("navListVisible");
}
function hideNavList() {
    document.getElementById("hamburgerMenu").classList.remove("xBTN");
        document.getElementById("navList").classList.remove("navListVisible");
}