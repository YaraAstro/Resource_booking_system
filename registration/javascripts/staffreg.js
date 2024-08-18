

function nextStep(nextStepNumber) {
    // Perform form validation here if needed

    // Update the summary
    if (currentStep === 1) {
        document.getElementById('summaryFirstName').textContent = document.getElementById('firstName').value;
        document.getElementById('summaryLastName').textContent = document.getElementById('lastName').value;
        document.getElementById('summaryEmail').textContent = document.getElementById('email').value;
        document.getElementById('summaryMobile').textContent = document.getElementById('mobile').value;
    } else if (currentStep === 2) {
        document.getElementById('summaryProfession').textContent = document.getElementById('profession').value;
        document.getElementById('summarySpecialization').textContent = document.getElementById('specialization').value;
    } else if (currentStep === 3) {
        document.getElementById('summaryAddress').textContent = document.getElementById('address').value;
        document.getElementById('summaryCity').textContent = document.getElementById('city').value;
        document.getElementById('summaryGender').textContent = document.getElementById('gender').value;
        document.getElementById('summaryDob').textContent = document.getElementById('dob').value;
        document.getElementById('summaryNic').textContent = document.getElementById('nic').value;
        document.getElementById('summaryDistrict').textContent = document.getElementById('district').value;
    }

    showStep(nextStepNumber);
    currentStep = nextStepNumber;
}

function prevStep(prevStepNumber) {
    showStep(prevStepNumber);
    currentStep = prevStepNumber;
}

function updateSpecializationDropdown() {
    const professionDropdown = document.getElementById('profession');
    const specializationDropdown = document.getElementById('specialization');

    specializationDropdown.innerHTML = '';

    if (professionDropdown.value === 'doctor') {
        const doctorSpecializations = [  "Allergist/Immunologist",  "Anesthesiologist",  "Cardiologist",  "Dermatologist",  "Endocrinologist",  "Gastroenterologist",  "Hematologist",  "Infectious Disease Specialist",  "Internal Medicine Specialist",  "Medical Geneticist",  "Nephrologist",  "Neurologist",  "Obstetrician/Gynecologist",  "Oncologist",  "Ophthalmologist",  "Orthopedic Surgeon",  "Otolaryngologist",  "Pediatrician",  "Plastic Surgeon",  "Psychiatrist",  "Pulmonologist",  "Radiologist",  "Rheumatologist",  "Surgeon",  "Urologist",  "Virologist",  "Pathologist",  "Nuclear Medicine Specialist",  "Geriatrician",  "Sports Medicine Specialist",  "Pain Management Specialist",  "Sleep Medicine Specialist",  "Rehabilitation Specialist",  "Forensic Pathologist",  "Disaster Medicine Specialist",  "Aerospace Medicine Specialist",  "Telemedicine Specialist",  "Addiction Medicine Specialist",  "Tropical Medicine Specialist",  "Palliative Care Specialist"];
        doctorSpecializations.forEach(function (specialization) {
            const option = document.createElement('option');
            option.value = specialization;
            option.textContent = specialization;
            specializationDropdown.appendChild(option);
        });
    } else if (professionDropdown.value === 'nurse') {
        const nurseSpecializations = [  "Adult-Gerontology Nurse Practitioner",  "Pediatric Nurse Practitioner",  "Family Nurse Practitioner",  "Psychiatric-Mental Health Nurse Practitioner",  "Neonatal Nurse Practitioner",  "Women's Health Nurse Practitioner",  "Certified Nurse Midwife",  "Clinical Nurse Specialist",  "Certified Registered Nurse Anesthetist",  "Critical Care Nurse",  "Emergency Nurse",  "Medical-Surgical Nurse",  "Operating Room Nurse",  "Pediatric Nurse",  "Obstetric Nurse",  "Cardiac Nurse",  "Dermatology Nurse",  "Diabetes Nurse",  "HIV/AIDS Nurse",  "Oncology Nurse",  "Pain Management Nurse",  "Rehabilitation Nurse",  "School Nurse",  "Forensic Nurse",  "Flight Nurse",  "Informatics Nurse",  "Legal Nurse Consultant",  "Holistic Nurse",  "Occupational Health Nurse",  "Public Health Nurse",  "Research Nurse",  "Transplant Nurse",  "Wound Care Nurse",  "Nurse Educator",  "Nurse Administrator",  "Nurse Researcher"];
        nurseSpecializations.forEach(function (specialization) {
            const option = document.createElement('option');
            option.value = specialization;
            option.textContent = specialization;
            specializationDropdown.appendChild(option);
        });
    } else if (professionDropdown.value === 'lab technician') {
        const technicianSpecializations = [ "Clinical Laboratory Technician", "Clinical Biochemistry Technician", "Clinical Hematology Technician", "Clinical Microbiology Technician", "Immunology Technician", "Pathology Technician", "Phlebotomy Technician", "Cytogenetics Technician", "Histology Technician", "Molecular Biology Technician", "Genetic Testing Technician", "Blood Bank Technician", "Toxicology Technician", "Urine Analysis Technician", "Immunohematology Technician", "Serology Technician", "Virology Technician", "Parasitology Technician", "Clinical Research Technician", "Clinical Genetics Technician", "Anatomical Pathology Technician", "Forensic Science Technician", "Microscopy Technician", "Chemistry Analyzer Technician", "Radiology Technician", "Electrocardiography (EKG) Technician", "Pharmacology Technician", "Medical Laboratory Assistant", "Blood Gas Analysis Technician", "Clinical Flow Cytometry Technician", "Clinical Mass Spectrometry Technician", "Histopathology Technician", "Neurophysiology Technician", "Ophthalmic Technician", "Renal Dialysis Technician", "Respiratory Therapy Technician", "Sleep Study Technician", "Cardiac Catheterization Laboratory Technician", "Nuclear Medicine Technician", "Medical Imaging Technician", "Ultrasound Technician" ];
        technicianSpecializations.forEach(function (specialization) {
            const option = document.createElement('option');
            option.value = specialization;
            option.textContent = specialization;
            specializationDropdown.appendChild(option);
        });
    } else if (professionDropdown.value === 'instructor') {
        const instructorSpecializations = [ "Physical Fitness Instructor", "Group Exercise Instructor", "Aerobics Instructor", "Yoga Instructor", "Pilates Instructor", "Dance Instructor", "Zumba Instructor", "Tai Chi Instructor", "Martial Arts Instructor", "Aquatic Exercise Instructor", "Spin/Cycling Instructor", "Strength Training Instructor", "Cardio Kickboxing Instructor", "Boot Camp Instructor", "Mindfulness Instructor", "Meditation Instructor", "Breathing Techniques Instructor", "Stress Management Instructor", "Prenatal Fitness Instructor", "Postnatal Fitness Instructor", "Senior Fitness Instructor", "Balance and Fall Prevention Instructor", "Chronic Disease Management Instructor", "Weight Management Instructor", "Nutrition Instructor", "Healthy Cooking Instructor", "Smoking Cessation Instructor", "Health Education Instructor", "Diabetes Education Instructor", "Heart Health Education Instructor", "Cancer Prevention and Awareness Instructor", "Pain Management Instructor", "Rehabilitation Instructor", "Physical Therapy Instructor", "Occupational Therapy Instructor", "Speech Therapy Instructor", "Cardiac Rehabilitation Instructor", "Respiratory Rehabilitation Instructor", "Chronic Pain Management Instructor", "Wellness Coach", "Lifestyle Coach", "Health and Wellness Instructor", "Patient Education Instructor", "Stretches and Flexibility Instructor", "Sports Conditioning Instructor", "Functional Training Instructor", "Posture Correction Instructor", "Fitness for Special Populations Instructor", "Disease-Specific Exercise Instructor", "Adaptive Fitness Instructor", "Injury Prevention Instructor", "Holistic Health Instructor", "Wellness Retreat Instructor", "Mental Health and Wellness Instructor", "Body-Mind Connection Instructor", "Emotional Wellbeing Instructor", "Self-Care Instructor", "Social Support and Group Facilitator" ];
        instructorSpecializations.forEach(function (specialization) {
            const option = document.createElement('option');
            option.value = specialization;
            option.textContent = specialization;
            specializationDropdown.appendChild(option);
        });
    }
}


