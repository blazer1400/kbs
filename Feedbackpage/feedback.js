let feedBox = document.getElementById("feedBox");
document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const selectedRating = document.querySelector(".star-container.clicked").getAttribute("data-rating");
    const selectedFeedbackType = document.querySelector(".typefeed.clicked").textContent;
    const feedbackText = document.querySelector("textarea[name='feedbackText']").value;
    document.getElementById("feedbackForm").reset();
    removeFeedBack()
});

// Here, you can send the feedback data to your server or perform any desired actions.
// Function to display the feedBox pop-up
function displayFeedBox() {
    feedBox.classList.remove("remove");
    feedBox.classList.add("display");
    feedBox.classList.add("height");
    feedBox.classList.remove("none");
    feedBack.classList.remove("none");
    feedBox.classList.remove("changesize");
    thank.classList.remove("display");
    thank.classList.add("none");
}

// Function to remove the feedBox pop-up
function removeFeedBox() {
    feedBox.classList.remove("display");
    feedBox.classList.add("remove");
    thank.classList.remove("display")
    feedBox.classList.remove("changesize")
}
function removeFeedBack() {
    feedBack.classList.add("none");
    thank.classList.add("display");
    feedBox.classList.add("changesize");
    thank.classList.remove("none");
    const input = document.querySelector('.input');
    input.value = '';
    isClicked1 = false;
    isClicked2 = false;
    isClicked3 = false;
    colorButton.classList.remove('clicked');
    colorButton2.classList.remove('clicked');
    colorButton3.classList.remove('clicked');

        // Get the selected feedback type
    let feedbackType;
    if (isClicked1) {
            feedbackType = "Suggestie";
        } else if (isClicked2) {
            feedbackType = "Iets ging fout";
        } else if (isClicked3) {
            feedbackType = "Compliment";
        }
        document.getElementById("feedbackType").value = feedbackType;
        document.getElementById("feedbackForm").submit();
}
let starRating = document.getElementById("starRating");
let star1 = document.getElementById("star1");
let star2 = document.getElementById("star2");
let star3 = document.getElementById("star3");
let star4 = document.getElementById("star4");
let star5 = document.getElementById("star5");
let feedBack = document.getElementById("feedBack");
let thank = document.getElementById("thank");

function addChecked1() {
    star1.classList.add("checked");
    star2.classList.remove("checked");
    star3.classList.remove("checked");
    star4.classList.remove("checked");
    star5.classList.remove("checked");
    star1.classList.add("clicked");
    removeHoverListeners();
    star1.addEventListener("mouseover", addChecked1); // Re-add hover listener for this star
}

function addChecked2() {
    star2.classList.add("checked");
    star1.classList.remove("checked");
    star3.classList.remove("checked");
    star4.classList.remove("checked");
    star5.classList.remove("checked");
    star2.classList.add("clicked");
    removeHoverListeners();
    star2.addEventListener("mouseover", addChecked2); // Re-add hover listener for this star
}

function addChecked3() {
    star3.classList.add("checked");
    star2.classList.remove("checked");
    star1.classList.remove("checked");
    star4.classList.remove("checked");
    star5.classList.remove("checked");
    star3.classList.add("clicked");
    removeHoverListeners();
    star3.addEventListener("mouseover", addChecked3); // Re-add hover listener for this star
}

function addChecked4() {
    star4.classList.add("checked");
    star2.classList.remove("checked");
    star3.classList.remove("checked");
    star1.classList.remove("checked");
    star5.classList.remove("checked");
    star4.classList.add("clicked");
    removeHoverListeners();
    star4.addEventListener("mouseover", addChecked4); // Re-add hover listener for this star
}

function addChecked5() {
    star5.classList.add("checked");
    star2.classList.remove("checked");
    star3.classList.remove("checked");
    star4.classList.remove("checked");
    star1.classList.remove("checked");
    star5.classList.add("clicked");
    removeHoverListeners();
    star5.addEventListener("mouseover", addChecked5); // Re-add hover listener for this star
}

star1.addEventListener("mouseout", function () {
    if (!star1.classList.contains("clicked")) {
        star1.classList.remove("checked");
    }
});

star2.addEventListener("mouseout", function () {
    if (!star2.classList.contains("clicked")) {
        star2.classList.remove("checked");
    }
});

star3.addEventListener("mouseout", function () {
    if (!star3.classList.contains("clicked")) {
        star3.classList.remove("checked");
    }
});

star4.addEventListener("mouseout", function () {
    if (!star4.classList.contains("clicked")) {
        star4.classList.remove("checked");
    }
});

star5.addEventListener("mouseout", function () {
    if (!star5.classList.contains("clicked")) {
        star5.classList.remove("checked");
    }
});

function removeHoverListeners() {
    star1.removeEventListener("mouseover", addChecked1);
    star2.removeEventListener("mouseover", addChecked2);
    star3.removeEventListener("mouseover", addChecked3);
    star4.removeEventListener("mouseover", addChecked4);
    star5.removeEventListener("mouseover", addChecked5);
}
let isClicked1 = false;
let isClicked2 = false;
let isClicked3 = false;

let colorButton = document.getElementById("colorButton");
let colorButton2 = document.getElementById("colorButton2");
let colorButton3 = document.getElementById("colorButton3");

colorButton.addEventListener('click', () => {
    if (isClicked1) {
        colorButton.classList.remove('clicked');
    } else {
        colorButton.classList.add('clicked');
    }
    isClicked1 = !isClicked1;
    isClicked2 = false; // Unselect the other buttons
    isClicked3 = false;
    colorButton2.classList.remove('clicked');
    colorButton3.classList.remove('clicked');
});

colorButton2.addEventListener('click', () => {
    if (isClicked2) {
        colorButton2.classList.remove('clicked');
    } else {
        colorButton2.classList.add('clicked');
    }
    isClicked2 = !isClicked2;
    isClicked1 = false; // Unselect the other buttons
    isClicked3 = false;
    colorButton.classList.remove('clicked');
    colorButton3.classList.remove('clicked');
});

colorButton3.addEventListener('click', () => {
    if (isClicked3) {
        colorButton3.classList.remove('clicked');
    } else {
        colorButton3.classList.add('clicked');
    }
    isClicked3 = !isClicked3;
    isClicked1 = false; // Unselect the other buttons
    isClicked2 = false;
    colorButton.classList.remove('clicked');
    colorButton2.classList.remove('clicked');
});






