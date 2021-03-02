// Open Nav

function openNav() {
    document.querySelector('.main-menu').classList.toggle('main-menu--open');
    document.querySelector('.menu-toggle').classList.toggle('menu-toggle--black');
}


// Color Picker

function colorPicker() {
    let color = this.getAttribute('data-color');
    document.body.className = `theme-${color}`;
}

document.querySelectorAll('.theme-picker__choice').forEach( el => {
    el.addEventListener("click", colorPicker);
});


// Insert age



