function toggle (){
  var visibilityChecker = document.getElementById("paswd");
    if (visibilityChecker.type === "password") {
      visibilityChecker.type = "text";
    } else {
      visibilityChecker.type = "password";
    }
};