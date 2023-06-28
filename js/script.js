
var tablink = document.getElementsByClassName("tab_links");
var tabcont = document.getElementsByClassName("tab_content");
function tabClick(name) {
    for (tl of tablink) {
        tl.classList.remove("active_link");
    }
    for (tc of tabcont) {
        tc.classList.remove("active_tab");
    }

    var activelink = document.getElementById(name);
    activelink.classList.add("active_link");

    var activetab = document.getElementById(name + "_tab");
    activetab.classList.add("active_tab");

}


//navbar enable after scroll


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        var nav = document.getElementById("navbar");
        var menubar = document.getElementById("menubar");
        var menu = document.getElementById("menu");

        nav.classList.add("nav_scroll");
        menubar.classList.add("menu_scroll");
        menu.classList.add("disp_conetents");

    } else {
        document.getElementById("navbar").classList.remove("nav_scroll");
        document.getElementById("menubar").classList.remove("menu_scroll");
        document.getElementById("menu").classList.remove("disp_conetents");
    }
}

// scroll effect on link click

let anchorList =
    document.querySelectorAll('a[href^="#"]');

for (link of anchorList) {

    link.onclick = function (e) {
        e.preventDefault();
        let destination =
            document.querySelector(this.hash);
        destination.scrollIntoView({
            behavior: 'smooth'
        });
        if (window.innerWidth <= 1058)
            bars.style.right = "-850px";



    }
}



//menubar for phones
var bars = document.getElementById("menubar");
var menu_open = false;
function menuOpen() {
    bars.style.right = "0"
    menu_open = true;
}
function menuClose() {
    bars.style.right = "-850px";
    menu_open = false;
}

//close menu if user clicks outside the menu

document.addEventListener("click", function (event) {

    if (event.target.closest("#menu"))
        return
    else
        if (menu_open == true)
            bars.style.right = "-850px"

});

//add scroll menu if window is maximized after opened in small screen
window.addEventListener("resize", function (event) {
    if (window.innerWidth > 1058)
        bars.style.right = "0";
    else if (window.innerWidth <= 1058)
        bars.style.right = "-850px";

});


function displayMoreProjects(condition) {
    var projects = document.querySelectorAll(".projects_box_hide");

    for (const pr of projects) {
        if (condition) {
            pr.style.display = "block";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn2-alt").style.display = "block";


        }
        else {

            pr.style.display = "none";
            document.getElementById("btn2").style.display = "block";
            document.getElementById("btn2-alt").style.display = "none";

        }
    }
}

function displayMoreSkills(condition) {
    var skills = document.querySelector(".more_skills");

        if (condition) {
            skills.style.display = "block";
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn1-alt").style.display = "block";


        }
        else {

            skills.style.display = "none";
            document.getElementById("btn1").style.display = "block";
            document.getElementById("btn1-alt").style.display = "none";

        }
    
}