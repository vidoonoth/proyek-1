
// let closeButtons=document.querySelectorAll('.detail-close');
// let openButtons=document.querySelectorAll('.detail-open');

// close.addEventListener("click", function(){
//     close.style.display="none";
// });


// open.addEventListener("click", function(){
//     array.forEach(element => {
//         element.style.display="block";
//     });
// });



let closeButtons = document.querySelectorAll('.detail-close');
let openButtons = document.querySelectorAll('.detail-open');

closeButtons.forEach(close => {
    close.addEventListener("click", function() {
        closeButtons.forEach(btn => btn.style.display = "none");
    });
});

openButtons.forEach(open => {
    open.addEventListener("click", function() {
        closeButtons.forEach(btn => btn.style.display = "block");
    });
});