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

