function addStars(count) {
    const room6 = document.querySelector('.light-box6');
    const shineStarSize = 17; // The size of each star

    function getRandomPosition() {
        const x = Math.floor(Math.random() * (100 - shineStarSize));
        const y = Math.floor(Math.random() * (100 - shineStarSize));
        return { x, y };
    }

    function createShineStar() {
        const shineStar = document.createElement('div');
        shineStar.className = 'shine-star';

        // Add three new divs inside each star
        for (let j = 0; j < 3; j++) {
            const lineStar = document.createElement('div');
            lineStar.className = `line-star line${j + 1}-star`;
            shineStar.appendChild(lineStar);
        }

        return shineStar;
    }

    for (let i = 0; i < count; i++) {

        const shineStar6 = createShineStar();
        const { x: x6, y: y6 } = getRandomPosition();
        shineStar6.style.left = `${x6}%`;
        shineStar6.style.top = `${y6}%`;
        room6.appendChild(shineStar6);
        animateBall(shineStar6);
    }

    function animateBall(shineStar) {
        moveBall(shineStar);

        setInterval(() => {
            moveBall(shineStar);
        }, 4000);
    }

    function moveBall(shineStar) {
        const { x, y } = getRandomPosition();
        shineStar.style.left = `${x}%`;
        shineStar.style.top = `${y}%`;
    }
}

addStars(5);



let styleCustomer = document.querySelector('.style-customer');

let styleMenu = document.querySelector('.style-menu');

styleCustomer.onclick = function () {
    styleMenu.classList.toggle('active')

    styleGroup2.classList.remove('back')
    styleGroup3.classList.remove('back')
    styleGroup4.classList.remove('show')
    styleGroup5.classList.remove('show')
    styleGroup6.classList.remove('show')
    styleGroup7.classList.remove('show')
    styleGroup8.classList.remove('show')
    styleGroup9.classList.remove('show')
}

let closeStyleMenu = document.querySelector('.close-style-menu');
closeStyleMenu.onclick = function () {
    styleMenu.classList.remove('active')

    styleGroup2.classList.remove('back')
    styleGroup3.classList.remove('back')
    styleGroup4.classList.remove('show')
    styleGroup5.classList.remove('show')
    styleGroup6.classList.remove('show')
    styleGroup7.classList.remove('show')
    styleGroup8.classList.remove('show')
    styleGroup9.classList.remove('show')
}


let font = document.querySelector('.font');
let colors = document.querySelector('.colors');
let shadows = document.querySelector('.shadows');
let radius = document.querySelector('.radius');
let textShadow = document.querySelector('.text-shadow');
let layout = document.querySelector('.layout');

let styleGroup2 = document.querySelector('.style-group2');

let styleGroup3 = document.querySelector('.style-group3');

let styleGroup4 = document.querySelector('.style-group4');

let styleGroup5 = document.querySelector('.style-group5');

let styleGroup6 = document.querySelector('.style-group6');

let styleGroup7 = document.querySelector('.style-group7');

let styleGroup8 = document.querySelector('.style-group8');

let styleGroup9 = document.querySelector('.style-group9');

let resetStyles = document.querySelectorAll('.reset-styles');

font.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup4.classList.add('show')
}
colors.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup5.classList.add('show')
}
shadows.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup6.classList.add('show')
}
radius.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup7.classList.add('show')
}

textShadow.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup8.classList.add('show')
}

layout.onclick = function () {
    styleGroup2.classList.add('back')
    styleGroup3.classList.add('back')
    styleGroup9.classList.add('show')
}


resetStyles.forEach(resetStyles => {
    resetStyles.onclick = function () {
        styleGroup2.classList.remove('back')
        styleGroup3.classList.remove('back')
        styleGroup4.classList.remove('show')
        styleGroup5.classList.remove('show')
        styleGroup6.classList.remove('show')
        styleGroup7.classList.remove('show')
        styleGroup8.classList.remove('show')
        styleGroup9.classList.remove('show')
    }
});

