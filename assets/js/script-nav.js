let toggleNav = document.getElementById('btn-sidebar');
let sidenav = document.querySelector('.mynavbar-list');
let search = document.querySelector('.search-layout');

function toggleSidenav(){
    sidenav.classList.toggle('show');
}

function toggleSearch(){
    search.classList.toggle('show');
}

/* ----- script untuk memberikan efek shadow 
   		pada navbar ketika scroll -------------*/

window.onscroll = function() {scFunction()};

function scFunction(){
    if (document.documentElement.scrollTop > 120) {
    document.getElementById("mynav").classList.add("show-shadow");
    }
    if (document.documentElement.scrollTop < 80) {
        document.getElementById("mynav").classList.remove("show-shadow");
    }
    // if (document.documentElement.scrollTop > 700){
    //     document.getElementById("btn-up").classList.add("show-up");
    // }
    // if (document.documentElement.scrollTop < 700){
    //     document.getElementById("btn-up").classList.remove("show-up");
    // }
}