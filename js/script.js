// Barra navegacion

let MenuBtn = document.getElementById('MenuBtn')

MenuBtn.addEventListener('click', function(e) {
    document.querySelector('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('fa-xmark')
})


//Efectos

let typed = new Typed('.auto-input', {
    strings: ['Desarrollador Web!', 'Freelancer!', 'Diseñador UI!', 'Youtuber!'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 2000,
    loop: true,
});
