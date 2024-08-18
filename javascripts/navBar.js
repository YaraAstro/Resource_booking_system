function showNavigators(){
    var checkbox = document.getElementById("checker");
    var navBox = document.getElementById("navbox");

    if(checkbox.checked == false){
        navBox.style.transform = 'scale(0, 1)';
    }else{
        navBox.style.transform = 'scale(1, 1)';
    }
}