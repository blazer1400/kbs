let popUpBox = document.getElementById("popUp");

//DISPLAY POP-UO
function displayPopup(){
    popUpBox.classList.remove("display");
}
document.getElementById('show-button').addEventListener('click', function() {
    var overlay = document.getElementById('overlay');
    var elementToDisplay = document.getElementById('popUp');

    overlay.style.display = 'block'; // Show the overlay
    elementToDisplay.style.display = 'block'; // Show the element
});