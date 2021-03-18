const phoneNav= document.getElementsByClassName("upperul")[0];
const menu= document.getElementsByClassName("menu")[0];
let con;


if(document.getElementsByClassName("con")[0]){
    con=document.getElementsByClassName("con")[0];
}
else if(document.getElementsByClassName("con-about")[0]){
    con=document.getElementsByClassName("con-about")[0];
}
else{
    con=document.getElementsByClassName("services-con")[0];
}








menu.addEventListener("click",()=>{
    phoneNav.style.top="0";
})

con.addEventListener("click",()=>{
    phoneNav.style.top="-100%";
})