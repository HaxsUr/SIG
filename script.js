const menu = document.getElementById('icon-menu');
const sidebar = document.getElementsByClassName('sidebar')[0];

menu.addEventListener('click',function(){
    sidebar.classList.toggle('hide');
});

let button=document.querySelector('.menu-btn');
console.log(button);
button.addEventListener('click',()=>{
    sidebar.classList.toggle('close');
});