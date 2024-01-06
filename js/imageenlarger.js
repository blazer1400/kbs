document.addEventListener('DOMContentLoaded', function() {

    function imageEnlargerFunction(naam) {
        let selectedAdress;
        if (naam === "blauw1") {
           console.log(321)
            selectedAdress = "foto's/refurb-iphone-13-blue-2023-removebg-preview.png"
        } else if (naam === "starlight1") {
            selectedAdress = "foto's/refurb-iphone-13-starlight-2023-removebg-preview.png"
        } else if (naam === "groen1") {
            selectedAdress = "foto's/refurb-iphone-13-pro-green-2023-removebg-preview.png"
        } else if (naam === "midnight1") {
            selectedAdress = "foto's/iiPhone-13-Zwart-Middernacht-Achterkant-mobisite.png"
        }
        document.getElementById("vergrotefoto").src = selectedAdress
    }

    document.getElementById("blauw1").addEventListener('click', function() {
        imageEnlargerFunction("blauw1");
    });
    document.getElementById("starlight1").addEventListener('click', function() {
        imageEnlargerFunction("starlight1");
    });
    document.getElementById("groen1").addEventListener('click', function() {
        imageEnlargerFunction("groen1");
    });
    document.getElementById("midnight1").addEventListener('click', function() {
        imageEnlargerFunction("midnight1");
    });
    document.querySelector('.favorieten-button').addEventListener('click', function () {
        playEasterEgg();
    });

    function playEasterEgg() {
        // Grappige easter egg code
        const body = document.querySelector('body');
        const randomColor = getRandomColor();

        body.style.transition = 'color 1s ease'; //
        body.style.color = randomColor;

        setTimeout(() => {
            body.style.color = '';
            body.style.transition = '';
        }, 10000);

    }

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

});
