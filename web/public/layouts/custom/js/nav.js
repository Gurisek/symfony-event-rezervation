const navSlide = () => {
    // constanty
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
        //otevření navbaru
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');

        //animace linků
        navLinks.forEach((link, index)=>{
            if(link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.7 }s`;
            }
        });
        // animace burgeru
        burger.classList.toggle('toggle');
    });
}

navSlide();