
//about menu section

var tablink = document.getElementsByClassName("tab_links");
var tabcont = document.getElementsByClassName("tab_content");
function tabClick(name) {

   for (tlink of tablink) {
    tlink.classList.remove("active_link");
}

for (tc of tabcont) {
 tc.classList.remove("active_tab");
}
    
    var activelink = document.getElementById(name);
    activelink.classList.add("active_link");

    var activetab = document.getElementById(name+"_tab");
    activetab.classList.add("active_tab");



    
    // var activatedlink = document.querySelector("active_link");
    // activatedlink.classList.remove("active_link");

    // var activatedtab = document.querySelector("active_tab");
    // activatedtab.classList.remove("active_tab");


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
        if (window.innerWidth <= 450)
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
    if (window.innerWidth > 450 && window.innerWidth <1410)
        bars.style.right = "0";
    else if (window.innerWidth <= 450)
        bars.style.right = "-850px";
    else if(window.innerWidth > 1410)
    {
        bars.style.right = "272px";
    }

});

//display hide more projects and services
function displayMoreProjects(condition) {
    var projects = document.querySelectorAll(".projects_box_hide");

    for (const pr of projects) {
        if (condition) {
            pr.style.display = "flex";
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


//background animations on hover name, links and logo

var rep;
var deg = 199;
document.getElementById("myname").onmouseover = function () { a(); };
document.getElementById("myname").onmouseout = function () { b(); };
document.getElementById("nav_links").onmouseover = function () { a(); };
document.getElementById("nav_links").onmouseout = function () { b(); };
document.getElementById("logo_text").onmouseover = function () { a(); };
document.getElementById("logo_text").onmouseout = function () { b(); };

function a() {
    // console.log(deg)
    document.getElementById("hero_page").style.background = "linear-gradient(" + deg + "deg, rgb(3 0 63) 0%, rgba(255,80,0,1) 183%, rgba(0,0,0,1) 0%)";


    if (deg >= 0 && deg <= 360) {
        deg++;
        if (deg == 360)
            deg = -1;
    }
    else {


        deg--;

        if (deg == -360)
            deg = 1;
    }

   rep = setTimeout(a, 5);

}

function b(){
    clearTimeout(rep);
}




//responsive for dekstop mode
if(window.innerHeight > 1500)
{
 document.getElementById("idservice_box").style.gridTemplateColumns = "none";
 document.getElementById("idprojects").style.gridTemplateColumns = "none";
 document.getElementById("about").style.fontSize = "1rem";
 document.getElementById("copyright").style.fontSize  = ".5vw";
 document.getElementById("copyrightsec_name").style.fontSize  = "2vw";
 document.getElementById("education").style.marginLeft = "5rem";
}

//scroll disable
function disableScroll() {
    // Get the current page scroll position
    scrollTop =
    window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft =
    window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted,
        // set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}

//project 4 vedant's electrohub

let project4 = document.querySelector("#project4");
let project4btn = document.querySelector("#project4btn");
let project4close = document.querySelector("#project4-close");

project4.style.display = "none";

project4btn.addEventListener('click',()=>{
    project4.style.display = "block";
});

project4close.addEventListener('click',()=>{
    project4.style.display = "none";
});

//Message Submit Alert
var msgalert = document.querySelector("#contact_alert");

msgalert.addEventListener('click',()=>{
    msgalert.style.display = "none";
});