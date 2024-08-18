document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementsByTagName("form");
    const stepsContainer = document.querySelector(".appl");
    const steps = Array.from(stepsContainer.getElementsByClassName("phase"));
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const submitBtn = document.querySelector(".submit");
  
    let currentStep = 0;
  
    showStep(currentStep);
  
    prevBtn.addEventListener("click", goToPrevStep);
    nextBtn.addEventListener("click", goToNextStep);
  
    form.addEventListener("submit", function(e) {
      e.preventDefault();
      // Perform form submission or validation here
      console.log("Form submitted");
    });
  
    function showStep(stepIndex) {
      steps.forEach(step => {
        step.style.display = "none";
      });
      steps[stepIndex].style.display = "block";
  
      if (stepIndex === 0) {
        prevBtn.style.display = "none";
      } else {
        prevBtn.style.display = "inline-block";
      }
  
      if (stepIndex === steps.length - 1) {
        nextBtn.style.display = "none";
        submitBtn.style.display = "inline-block";
      } else {
        nextBtn.style.display = "inline-block";
        submitBtn.style.display = "none";
      }
    }
  
    function goToPrevStep() {
      currentStep--;
      showStep(currentStep);
    }
  
    function goToNextStep() {
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    }
  });
  