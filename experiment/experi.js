let next = querySelector('.next');

next.addEventListener('click', function(){
    let item = document.querySelectorAll(".item")
    document.querySelector('.list') .appendChild(item[0]);
})