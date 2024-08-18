function openBlock(idName) {
    var block = document.getElementById(idName);
    var computedStyle = window.getComputedStyle(block);
  
    if (computedStyle.display === "none") {
      block.style.display = "block";
    }
}
  

function closeBlock(idName) {
    var block = document.getElementById(idName);
    var computedStyle = window.getComputedStyle(block);
  
    if (computedStyle.display !== "none") {
      block.style.display = "none";
      return true;
    }
  
    return false;
}  

function addRow() {
    var table = document.getElementById("medTable");
    var row = table.insertRow(-1); // Insert a new row at the end
  
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
  
    cell1.innerHTML = '<input type="text" name="med">';
    cell2.innerHTML = '<input type="text" name="med-dos">';
    cell3.innerHTML = '<input type="text" name="med-freq">';
    cell4.innerHTML = '<input type="text" name="med-dur">';
    cell5.innerHTML = '<button onclick="deleteRow()">&#9587;</button>';
}
  
function deleteRow() {
    var row = event.target.parentNode.parentNode; // Get the parent row
    row.parentNode.removeChild(row); // Remove the row from the table
}
  
function submitForm() {
    var form = document.getElementById("medTable");
    form.submit();
}
  
/* scripts for lab test */

const suggestionData = {
    'test-type-sugs': ["Hematology", "Clinical Chemistry", "Microbiology", "Serology/Immunology", "Molecular Diagnostics", "Pathology", "Clinical Microscopy", "Toxicology", "Endocrinology", "Immunohematology/Blood Banking", "Specialized Tests"],
    'sample-type-sugs': ["Blood", "Urine", "Stool", "Cerebrospinal Fluid (CSF)", "Tissue/Biopsy", "Swabs (e.g., Throat, Nasal)", "Respiratory Specimens", "Synovial Fluid", "Pericardial Fluid", "Pleural Fluid", "Ascitic Fluid", "Joint Fluid", "Gastric Fluid", "Sweat", "Bile", "Amniotic Fluid", "Bone Marrow", "Gingival Crevicular Fluid", "Scleral Scrapings", "Lymph Node Biopsy", "Rectal Biopsy", "Prostate Fluid", "Nasopharyngeal Wash", "Breast Tissue", "Thyroid Tissue", "Rectal Swab", "Cervical Mucus", "Eye Secretions", "Cerumen (Ear Wax)", "Nipple Discharge"],
    'test-name-sugs': ["Complete Blood Count (CBC)", "Basic Metabolic Panel (BMP)", "Comprehensive Metabolic Panel (CMP)", "Lipid Profile", "Liver Function Tests (LFTs)", "Kidney Function Tests", "Blood Glucose Test", "Coagulation Studies", "Blood Culture", "Urine Culture and Sensitivity", "Stool Culture", "Respiratory Specimen Culture", "Throat/Nasal Swab Culture", "Cerebrospinal Fluid (CSF) Analysis", "Antibody Testing", "Autoimmune Marker Testing", "Immunoglobulin Levels", "HIV Test", "Hepatitis Panel", "Sexually Transmitted Infection (STI) Tests", "Pap Smear", "Cervical Human Papillomavirus (HPV) Test", "Genetic Testing", "Polymerase Chain Reaction (PCR) Testing", "Fluorescence In Situ Hybridization (FISH)", "Next-Generation Sequencing (NGS)", "Tissue Biopsy", "Fine-Needle Aspiration (FNA) Biopsy", "Cytopathology", "Immunohistochemistry", "Frozen Sections", "Flow Cytometry", "Cytogenetics", "Molecular Pathology", "Tumor Marker Testing", "Urinalysis", "Stool Examination", "Electrolyte Panel", "Thyroid Function Tests", "Hormone Testing", "Drug Screening", "Therapeutic Drug Monitoring", "Blood Typing and Crossmatching", "Direct Coombs Test", "Indirect Coombs Test", "Allergy Testing", "Cardiac Enzyme Tests", "Arterial Blood Gas (ABG) Analysis", "Vitamin and Mineral Levels", "Electrocardiogram (ECG/EKG)"]
};

function showSuggestions(event, suggestionsId) {
    const inputField = event.target;
    const inputValue = inputField.value.toLowerCase();
    const suggestionsDiv = document.getElementById(suggestionsId);
  
    const suggestions = suggestionData[suggestionsId] || [];
  
    const filteredSuggestions = suggestions.filter(suggestion =>
      suggestion.toLowerCase().startsWith(inputValue)
    );
  
    if (filteredSuggestions.length === 0) {
      suggestionsDiv.style.display = 'none';
      return;
    }
  
    suggestionsDiv.innerHTML = '';
  
    filteredSuggestions.forEach(suggestion => {
      const suggestionDiv = document.createElement('div');
      suggestionDiv.classList.add('suggestion');
      suggestionDiv.textContent = suggestion;
      suggestionDiv.addEventListener('click', () => {
        inputField.value = suggestion;
        suggestionsDiv.style.display = 'none';
      });
  
      suggestionsDiv.appendChild(suggestionDiv);
    });
  
    suggestionsDiv.style.display = 'block';
  
    // Hide suggestions when input field loses focus
    inputField.addEventListener('blur', () => {
      suggestionsDiv.style.display = 'none';
    });
  }
  
  
  
  

