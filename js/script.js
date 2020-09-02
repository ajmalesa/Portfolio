// Add active class on selected section and remove active class on all other desktop nav menu items 
document.getElementById('skills-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('projects-button').parentElement.classList.remove('uk-active');
    document.getElementById('about-button').parentElement.classList.remove('uk-active');
});
document.getElementById('projects-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button').parentElement.classList.remove('uk-active');
    document.getElementById('about-button').parentElement.classList.remove('uk-active');
});
document.getElementById('about-button').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button').parentElement.classList.remove('uk-active');
    document.getElementById('projects-button').parentElement.classList.remove('uk-active');
});

// Add active class on selected section and remove active class on all other mobile nav menu items 
document.getElementById('skills-button-mobile').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('projects-button-mobile').parentElement.classList.remove('uk-active');
    document.getElementById('about-button-mobile').parentElement.classList.remove('uk-active');
});
document.getElementById('projects-button-mobile').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button-mobile').parentElement.classList.remove('uk-active');
    document.getElementById('about-button-mobile').parentElement.classList.remove('uk-active');
});
document.getElementById('about-button-mobile').addEventListener('click', function() {
    this.parentElement.classList.add('uk-active');
    document.getElementById('skills-button-mobile').parentElement.classList.remove('uk-active');
    document.getElementById('projects-button-mobile').parentElement.classList.remove('uk-active');
});

// Expand all skills when show all button is clicked
document.getElementById('show-all-button').addEventListener('click', function() {
    // Go through each element that has a class of accordion
    document.querySelectorAll('.accordion').forEach(
        element => {
            // Only going to toggle this accordion if it's children are closed
            if (!element.children[0].classList.contains('uk-open')) {
                // Use UIkit's toggle method to change state of accordion 
                UIkit.accordion(element).toggle();
            }
        }
    );
});
// Collapse all skills when hide all button is clicked
document.getElementById('hide-all-button').addEventListener('click', function() {
    // Go through each element that has a class of accordion
    document.querySelectorAll('.accordion').forEach(
        element => {
            // Only going to toggle this accordion if it's children are already opened
            if (element.children[0].classList.contains('uk-open')) {
                // Use UIkit's toggle method to change state of accordion 
                UIkit.accordion(element).toggle();
            }
        }
    );
});

// Prevent the default action on show all and hide all buttons so page does not scroll on click
document.getElementById("show-all-button").addEventListener("click", function(event){
    event.preventDefault()
});
document.getElementById("hide-all-button").addEventListener("click", function(event){
    event.preventDefault()
});

