let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.check-button'), //ul li il
buttonClick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener('click', () => {
    console.log('test1');
    dropdown.classList.toggle( 'show-dropdown');
    if(submenu){
        submenu.classList.toggle( 'show-dropdown');
    }
    hamburger.classList.toggle( 'animate-button');
})