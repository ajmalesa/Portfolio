document.getElementById('skills-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('projects-button').parentElement.classList.remove('uk-active');
    
})

document.getElementById('projects-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button').parentElement.classList.remove('uk-active');
})

document.getElementById('skills-button-mobile').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('projects-button-mobile').parentElement.classList.remove('uk-active');
})

document.getElementById('projects-button-mobile').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button-mobile').parentElement.classList.remove('uk-active');
})