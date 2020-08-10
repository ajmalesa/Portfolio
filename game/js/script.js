// Set options for text that will be typed
var options = {
  strings: [
    "^1300 Hello there." +
    "^250 My name is Ajmal." +
    "^250 Here are some games I made." 
  ],
  typeSpeed: 80,
  showCursor: false,
  onComplete: function(self) {
    document.getElementsByTagName('table')[0].style.display = "block";
    // document.getElementById('avatar').style.display = "none";
  }
};

// Display text given in options on element with an ID of dialog 
var typed = new Typed('#dialog', options);



