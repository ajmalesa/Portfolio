document.getElementById('skills-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('projects-button').parentElement.classList.remove('uk-active');
    
})

document.getElementById('projects-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button').parentElement.classList.remove('uk-active');
})