// Open Tabs, Get the by Name and Open theme
function openTab(evt, tabName) {

    var content, tablinks;

    content = document.getElementsByClassName("content-tab");

    for (var i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tab");

    for (i = 0; i < content.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" is-active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " is-active";
}

var tab = document.getElementById('comedy');
tab.style.display = "block";

var tab_nav = document.getElementById('comedy-nav');
tab_nav.classList.add('is-active');
