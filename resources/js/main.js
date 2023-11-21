let navbar = document.querySelector('nav');
let divGif = document.querySelectorAll('.div-gif')

divGif.forEach(el => {
    let gif = el.getAttribute('data-gif');
    el.addEventListener('mouseover',()=>{
        el.style.backgroundImage=`url(${gif})`
    })
    el.addEventListener('mouseleave',()=>{
        el.style.backgroundImage=`none`
    })

    
});


window.addEventListener('scroll',()=>{
    if (window.scrollY>0) {
        navbar.classList.remove('navbar-rounded')
        navbar.classList.add('navbar-scroll')
    } else{
        navbar.classList.remove('navbar-scroll')
        navbar.classList.add('navbar-rounded')
    }
})
