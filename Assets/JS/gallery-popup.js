const popup = document.getElementById("imagePopup");
const popupImg = document.getElementById("popupImage");
const gallery_closeBtn = document.querySelector(".close-btn");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let images = document.querySelectorAll(".gallery-item img");
let currentIndex = 0;

// Open popup
images.forEach((img, index) => {
    img.addEventListener("click", function () {
        popup.style.display = "block";
        popupImg.src = this.src;
        currentIndex = index;
    });
});

// Close popup
gallery_closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
});

// Next image
nextBtn.addEventListener("click", () => {
    currentIndex++;
    if (currentIndex >= images.length) currentIndex = 0;
    popupImg.src = images[currentIndex].src;
});

// Previous image
prevBtn.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) currentIndex = images.length - 1;
    popupImg.src = images[currentIndex].src;
});

// Close when clicking outside
popup.addEventListener("click", (e) => {
    if (e.target === popup) {
        popup.style.display = "none";
    }
});