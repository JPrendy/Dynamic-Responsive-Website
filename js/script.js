// the following changes the date on the footer so every year, the date will change to the current year
document.getElementById("foot01").innerHTML =
"<p>&copy;  " + new Date().getFullYear() + "  Youth Project. All rights reserved.</p>";

// we get the button elements for the nextpage and previouspage buttons assigned to el and la
var el = document.getElementById("nextPage")
var la = document.getElementById("previousPage")

//Need these if conditions because we remove these buttons with the ids from the page under certain conditions
if(el !== null){
el.addEventListener("click", nextpage);
}
if(la !== null){
la.addEventListener("click", previouspage);
}

// the following is a function that is called whenever the nextpage button is pressed bringing us the next contents in the news page
function nextpage(){
    console.log("the button was pressed");
    console.log("Page location is " + window.location.href);
    var x =  window.location.href;
    //var y = x.length - 1;
    //var numberString = x[y];
    var numberString = x.split('=').pop();
    console.log(numberString);
    var number = parseInt(numberString);
    console.log(typeof(number));
    number++;
    console.log(number);
    location.href='http://127.0.0.1/YouthProjectApplication_PHP/news.php?n=' + number;
}

// the following is a function that is called whenever the previos button is pressed bringing us the previous contents in the news page
function previouspage(){
    console.log("Page location is " + window.location.href);
    var x =  window.location.href;
    // var y = x.length - 1;
    // var numberString = x[y];
    var numberString = x.split('=').pop();
    console.log(numberString);
    var number = parseInt(numberString);
    console.log(typeof(number));
    number--;
    console.log(number);
    location.href='http://127.0.0.1/YouthProjectApplication_PHP/news.php?n=' + number;
}


//Fixed header example
// https://www.w3schools.com/howto/howto_js_sticky_header.asp
// the following has a scrolling effect where the the following is called when the screen is scrolled
window.onscroll = function() {myFunction()};

var header = document.getElementById("fixedHeader");
var header2 = document.getElementById("notificationTag");
var sticky = header.offsetTop;

// the following function makes the header sticky when a certain height is reached scrolling
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}



// The guide how to do a fullscreen overlay
// https://www.w3schools.com/howto/howto_js_fullscreen_overlay.asp
//the following gets the welcome overlay, if we have seen it once the cache wont show the overlay
myNav = document.getElementById("myNav")
var welcomeScreen = localStorage.getItem("welcomeScreen");
if(welcomeScreen !== "Saw"){
if(myNav !== null){
    myNav.style.display = "block"; 
}
}

  function closeNav() {
    document.getElementById("myNav").style.display = "none";
    //the following sets to the cache that we have seen the welcome screen and when we press the exit button it is saved we saw it and won't
    // load till we clear the cache.
    localStorage.setItem("welcomeScreen", "Saw");
  }



