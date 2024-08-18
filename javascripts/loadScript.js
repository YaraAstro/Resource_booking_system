const loadFrame = document.querySelector('.load-container');

window.addEventListener('load', () => {

    setTimeout(function(){
        loadFrame.style.display = 'none';
    }, 3000);
});