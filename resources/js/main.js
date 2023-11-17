let navbar = document.querySelector('nav');





window.addEventListener('scroll',()=>{
    if (window.scrollY>0) {
        navbar.classList.remove('navbar-rounded')
        navbar.classList.add('navbar-scroll')
    } else{
        navbar.classList.remove('navbar-scroll')
        navbar.classList.add('navbar-rounded')
    }
})