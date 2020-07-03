// Set typeSpeed by what option the user selects
let typeSpeedSetByUser = 50;
function handleClick(speedSelected) {
  document.getElementById("dialog").innerText = ""
  var typed = new typed('dialog', options);
  alert(speedSelected.value);
  typeSpeedSetByUser = speedSelected.value;
}

// Used to keep track of where the user is in the intro
let partOfIntro = 0;
let previousPartOfIntro = 0;


// Set options for text that will be typed
var options = {
  strings: [
    "^1300 Hello there." +
    "^250 My name is Ajmal." +
    "^250 This is a place with things." 
  ],
  typeSpeed: typeSpeedSetByUser,
  showCursor: false,
  onComplete: function(self) {
    partOfIntro += 1;
    document.getElementById("down-arrow").removeAttribute("hidden");
  }
};

// Set options for text that will be typed
var options2 = {
  strings: [
    "^1300 Which thing do you want to open?" 
  ],
  typeSpeed: typeSpeedSetByUser,
  showCursor: false,
  onComplete: function(self) {
    partOfIntro += 1;
    document.getElementById("down-arrow").removeAttribute("hidden");
  }
};
   
// Display text given in options on element with an ID of dialog 
var typed = new Typed('#dialog', options);

console.log(options.strings);

// Handle controls for game
document.addEventListener('keydown', function(event) {
    if (event.code == "Escape") {
        document.body.style.cursor = "inherit";
    }

    if (event.code == "Space" || event.code == "Enter") {
      if (partOfIntro > previousPartOfIntro) {
        document.getElementById("dialog").innerHTML = "";
        document.getElementById("down-arrow").setAttribute("hidden", "true");
        var typed2 = new Typed('#dialog', options2);
      } else {
        partOfIntro += 1;
        typed.destroy();
        document.getElementById("dialog").innerHTML =
          " Hello there." +
          " My name is Ajmal." +
          " This is a place with things.";
          document.getElementById("down-arrow").removeAttribute("hidden");
      }
    }
});

// Handle controls for game
document.addEventListener('click', function(event) {  
    if (partOfIntro > previousPartOfIntro) {
      document.getElementById("dialog").innerHTML = "";
      document.getElementById("down-arrow").setAttribute("hidden", "true");
      var typed2 = new Typed('#dialog', options2);
    } else {
      partOfIntro += 1;
      typed.destroy();
      document.getElementById("dialog").innerHTML =
        " Hello there." +
        " My name is Ajmal." +
        " This is a place with things.";
        document.getElementById("down-arrow").removeAttribute("hidden");
    }
  
});

