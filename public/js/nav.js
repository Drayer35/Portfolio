const nav = document.getElementById('navegator')
let ubitactionScroll = window.scrollY;
window.onscroll = function(){
    let displace = window.scrollY;
    if(ubitactionScroll >= displace){
        nav.style.top='0';
    }else{
        nav.style.top='-100px';
    }
    ubitactionScroll =displace;
}