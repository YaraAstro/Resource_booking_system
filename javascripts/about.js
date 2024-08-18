class SimpleSlideshow {
    constructor(containerId, autoplayDelay = 3000) {
      this.container = document.getElementById(containerId);
      this.slidesContainer = this.container.querySelector('.slides');
      this.slides = Array.from(this.slidesContainer.getElementsByClassName('slide'));
      this.paginationContainer = this.container.querySelector('.pagination');
      this.currentIndex = 0;
      this.autoplayInterval = null;
      this.autoplayDelay = autoplayDelay;
  
      this.init();
    }
  
    init() {
      this.createPagination();
      this.updatePagination();
      this.startAutoplay();
    }
  
    createPagination() {
      this.slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dot.addEventListener('click', () => {
          this.goToSlide(index);
        });
        this.paginationContainer.appendChild(dot);
      });
    }
  
    goToSlide(index) {
      this.slides[this.currentIndex].style.display = 'none';
      this.slides[index].style.display = 'flex';
      this.currentIndex = index;
      this.updatePagination();
    }
  
    updatePagination() {
      const dots = this.paginationContainer.querySelectorAll('.dot');
      dots.forEach((dot, index) => {
        if (index === this.currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }
  
    startAutoplay() {
      this.autoplayInterval = setInterval(() => {
        const nextIndex = (this.currentIndex + 1) % this.slides.length;
        this.goToSlide(nextIndex);
      }, this.autoplayDelay);
    }
  
    stopAutoplay() {
      clearInterval(this.autoplayInterval);
    }
}
  

  