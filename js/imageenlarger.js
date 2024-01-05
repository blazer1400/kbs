document.addEventListener('DOMContentLoaded', function() {

    function imageEnlargerFunction(naam) {
        let selectedAdress;
        if (naam === "blauw1") {
           console.log(321)
            selectedAdress = "foto's/refurb-iphone-13-blue-2023.jpeg"
        } else if (naam === "starlight1") {
            selectedAdress = "foto's/refurb-iphone-13-starlight-2023.jpeg"
        } else if (naam === "groen1") {
            selectedAdress = "foto's/refurb-iphone-13-pro-green-2023.jpeg"
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
});
