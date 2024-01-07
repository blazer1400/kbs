let popUpBox = document.getElementById("popUp");
let form = document.getElementById("myForm");
//DISPLAY POP-UO
function displayPopup(){
    popUpBox.classList.remove("display");
    form.submit();
}
document.getElementById('show-button').addEventListener('click', function() {
    var overlay = document.getElementById('overlay');
    var elementToDisplay = document.getElementById('popUp');

    overlay.style.display = 'block'; // Show the overlay
    elementToDisplay.style.display = 'block'; // Show the element
});