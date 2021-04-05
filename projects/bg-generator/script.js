// Elements
const docBody = document.querySelector('body');
const colorPickers = document.querySelectorAll('.color-picker');
const rangePicker = document.querySelector('.range-picker');
const bgToggle = document.querySelector('.control-group__bg');
const bgSelector = document.querySelector('.bg-selector');
const bgs = document.querySelectorAll('.bg');
const opacityPicker = document.querySelector('.opacity-picker');
const controls = document.querySelector('.controls');


// Set defaults
let gradColors = ['rgba(34,193,195,0.8)', 'rgba(253,187,45,0.8)'];
let gradAngle = 90;
let gradOpacity = 0.6;
let img = "jigsaw";


// Controllers
function hexToRGB(hex) {
    var r = parseInt(hex.slice(1, 3), 16),
        g = parseInt(hex.slice(3, 5), 16),
        b = parseInt(hex.slice(5,7), 16);
    return `${r}, ${g}, ${b}`;
}


function updateColors(el) {
    if(el.classList.contains('color-picker__one')) {
        gradColors[0] = `rgba(${hexToRGB(el.value)}, ${gradOpacity})`;
    } else {
        gradColors[1] = `rgba(${hexToRGB(el.value)}, ${gradOpacity})`;
    }
}

function colorControl() {
    updateColors(this);
    docBody.style.backgroundImage = `linear-gradient(${gradAngle}deg, ${gradColors[0]}, ${gradColors[1]}), url('img/${img}.svg')`;
}


function rangeControl() {
    gradAngle = this.value;
    docBody.style.backgroundImage = `linear-gradient(${gradAngle}deg, ${gradColors[0]}, ${gradColors[1]}), url('img/${img}.svg')`;
}

function toggleBgSelector() {
    bgSelector.classList.toggle('bg-selector--show');
}

function bgControl() {
    img = this.dataset.bg;
    docBody.style.backgroundImage = `linear-gradient(${gradAngle}deg, ${gradColors[0]}, ${gradColors[1]}), url('img/${img}.svg')`;
}

function opacityControl() {
    gradOpacity = `${this.value}`;
    gradColors.forEach(function(color, index) {
        color = color.split(",");
        color.pop();
        color.push(` ${gradOpacity}`);
        color = `${color.join()})`;
        gradColors[index] = color;
    });
    console.log(gradColors);
    docBody.style.backgroundImage = `linear-gradient(${gradAngle}deg, ${gradColors[0]}, ${gradColors[1]}), url('img/${img}.svg')`;
}


function controlToggle() {
    controls.classList.toggle('controls--hide');
}



// Event listeners
colorPickers.forEach(picker => picker.addEventListener('input', colorControl));
rangePicker.addEventListener('input', rangeControl);
bgToggle.addEventListener('click', toggleBgSelector);
bgs.forEach(bg => bg.addEventListener('click', bgControl));
opacityPicker.addEventListener('input', opacityControl);

