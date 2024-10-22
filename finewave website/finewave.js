let prev=document.querySelector('.prev')
let next=document.querySelector('.next')

next.addEventListener('click',function(){
let items= document.querySelectorAll(".items")
document.querySelector('.list') .appendChild(items[0])

})