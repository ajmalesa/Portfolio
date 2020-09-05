// Get the latest commit from GitHub and display on page
let xhttp = new XMLHttpRequest();
let latestCommitMessage;
let latestCommitTime;
let latestCommitLink;
let latestCommitProject;
let lastEvent;

// Send GET request to events endpoint of GitHub API
xhttp.open("GET", "https://api.github.com/users/ajmalesa/events", true);
xhttp.send();

// Run this when readystate of the request changes
xhttp.onload = (e) => {
    // Grab the last event
    try {
        lastEvent = JSON.parse(xhttp.responseText)[0];
    } catch {

    }

    // If the last event was a push, run this
    if (lastEvent.type === "PushEvent") {
        // Only add commit details class to commit section if there was a push
        // event. Commit detials class will add margin to the top on mobile
        document.querySelector("#commit-section").classList.add("commit-details");

        // Grab the latest commit details
        latestCommitLink = lastEvent.repo.name;
        latestCommitMessage = lastEvent.payload.commits[0].message;
        latestCommitTime = new Date(lastEvent.created_at);
        latestCommitProject = lastEvent.repo.name.split('/')[1];

        // Make a link variable to repo by prepending github domain to repo name
        latestCommitLink = "https://github.com/" + latestCommitLink;

        // Update text to show latest commit details
        document.querySelector("#latest-commit-display").innerHTML = "Latest commit";
        document.querySelector("#latest-commit-project").innerHTML = latestCommitProject;
        document.querySelector("#latest-commit-message").innerHTML = latestCommitMessage;
        document.querySelector("#latest-commit-time").innerHTML = latestCommitTime.toLocaleString();

        // Update link to URL created above
        document.querySelector("#latest-commit-link").href = latestCommitLink;
    }
}

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

// Validate contact form
function validateContactForm() {
    if (
        document.querySelector("#contact-email").value.length > 0 && 
        document.querySelector("#contact-message").value.length > 0
    )
    {
        try {
            document.querySelector("#send-message-button").attributes.removeNamedItem("disabled");
        }
        catch {

        }
    } 
    else  
    {
        document.querySelector("#send-message-button").setAttribute('disabled', 'true');
    }
}


// Send message using AJAX when send message button is clicked 
document.querySelector("#send-message-button").addEventListener("click", function() { 

    const form = new FormData(document.getElementById('contact-form'));
    fetch('/functions/contact-request.php', {
        method: 'POST',
        body: form
    });
    
});