// Set typeSpeed by what option the user selects
let typeSpeedSetByUser = 80;
function handleClick(speedSelected) {
  document.getElementById("dialog").innerText = ""
  var typed = new typed('dialog', options);
  alert(speedSelected.value);
  typeSpeedSetByUser = speedSelected.value;
}

// Set options for text that will be typed
var options = {
  strings: [
    "^1500 Welcome to my website." +
    "^250 My name is Ajmal." +
    "^250 People call me AJ." +
    "^250 Check back later for updates.▼"
  ],
  typeSpeed: typeSpeedSetByUser,
  showCursor: false,
  onComplete: (self) => {}
};
   
// Display text given in options on element with an ID of dialog 
var typed = new Typed('#dialog', options);


