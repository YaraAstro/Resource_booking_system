const slideshow = document.getElementsByClassName('sliders');
const images = document.getElementsByClassName('slides');
let currentIndex = 0;

function showImage(index) {
  // Hide all images
  for (let i = 0; i < images.length; i++) {
    images[i].classList.remove('activate');
  }

  // Show the specified image
  images[index].classList.add('activate');
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
}

// Set an interval to change images automatically
setInterval(nextImage, 5000); // Change slide every 3 seconds (adjust as needed)

