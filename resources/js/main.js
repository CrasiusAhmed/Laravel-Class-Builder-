function addStars(count) {
    const room1 = document.querySelector('.light-box');
    const room2 = document.querySelector('.light-box2');
    const room3 = document.querySelector('.light-box3');
    const room4 = document.querySelector('.light-box4');
    const room5 = document.querySelector('.light-box5');
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
        // Create and position stars for room 1
        const shineStar1 = createShineStar();
        const { x: x1, y: y1 } = getRandomPosition();
        shineStar1.style.left = `${x1}%`;
        shineStar1.style.top = `${y1}%`;
        room1.appendChild(shineStar1);
        animateBall(shineStar1);

        // Create and position stars for room 2
        const shineStar2 = createShineStar();
        const { x: x2, y: y2 } = getRandomPosition();
        shineStar2.style.left = `${x2}%`;
        shineStar2.style.top = `${y2}%`;
        room2.appendChild(shineStar2);
        animateBall(shineStar2);

        // Create and position stars for room 3
        const shineStar3 = createShineStar();
        const { x: x3, y: y3 } = getRandomPosition();
        shineStar3.style.left = `${x3}%`;
        shineStar3.style.top = `${y3}%`;
        room3.appendChild(shineStar3);
        animateBall(shineStar3);

        // Create and position stars for room 4
        const shineStar4 = createShineStar();
        const { x: x4, y: y4 } = getRandomPosition();
        shineStar4.style.left = `${x4}%`;
        shineStar4.style.top = `${y4}%`;
        room4.appendChild(shineStar4);
        animateBall(shineStar4);

        // Create and position stars for room 5
        const shineStar5 = createShineStar();
        const { x: x5, y: y5 } = getRandomPosition();
        shineStar5.style.left = `${x5}%`;
        shineStar5.style.top = `${y5}%`;
        room5.appendChild(shineStar5);
        animateBall(shineStar5);
    }

    function animateBall(shineStar) {
        moveBall(shineStar);

        setInterval(() => {
            moveBall(shineStar);
        }, 3000);
    }

    function moveBall(shineStar) {
        const { x, y } = getRandomPosition();
        shineStar.style.left = `${x}%`;
        shineStar.style.top = `${y}%`;
    }
}

addStars(8);

