document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("application");
    const stepsContainer = document.querySelector(".appl");
    const steps = Array.from(stepsContainer.getElementsByClassName("phase"));
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const submitBtn = document.querySelector(".submit");
    const specialPhase = document.getElementById("special");
    const birthdayInput = document.getElementById("dob");
  
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
      steps[stepIndex].style.display = "flex";
  
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
  
      if (stepIndex === 2) {
        if (isAgeBelow18()) {
          specialPhase.style.display = "flex";
        } else {
          specialPhase.style.display = "none";
          goToNextStep();
        }
      } else {
        specialPhase.style.display = "none";
      }
    }
  
    function goToPrevStep() {
      if (currentStep === 3 && !isAgeBelow18()) {
        currentStep = currentStep - 1 ;
      }
      currentStep--;
      showStep(currentStep);
      console.log(currentStep);
    }
  
    function goToNextStep() {
      if (currentStep === 1 && !isAgeBelow18()) {
        currentStep++;
      }
      currentStep++;
      showStep(currentStep);
      console.log(currentStep);
    }
  
    function isAgeBelow18() {
      const birthday = new Date(birthdayInput.value);
      const today = new Date();
      const age = today.getFullYear() - birthday.getFullYear();
      return age < 18;
    }

    
  });
  