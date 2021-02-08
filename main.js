const phoneNav= document.getElementsByClassName("upperul")[0];
const menu= document.getElementsByClassName("menu")[0];
const con= document.getElementsByClassName("con")[0];




menu.addEventListener("click",()=>{
    phoneNav.style.top="0";
})

con.addEventListener("click",()=>{
    phoneNav.style.top="-100%";
})