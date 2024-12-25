const close=document.getElementById('close');
const settingClose=document.querySelector('.setting-close');
const open=document.getElementById('setting-open');
// const close = document.querySelector(".close");

close.addEventListener("click", function(){
    settingClose.style.display="none";
});

open.addEventListener("click", function(){
    settingClose.style.display="block";
});
