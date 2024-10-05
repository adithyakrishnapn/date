let one = document.getElementById("one");
let two = document.getElementById("two");
let three = document.getElementById("three");
let four = document.getElementById("four");
let five = document.getElementById("five");
let six = document.getElementById("six");
let seven = document.getElementById("seven");
let eight = document.getElementById("eight");
let form = document.getElementById('form');

// Store the elements in an array
const arr = [one, two, three, four, five, six, seven, eight];
var i = 1;

// Function to change the display of elements
function change() {
    if (i < arr.length) {
        // Ensure we don't go beyond the array length
        if (arr[i].style.display === "none" || arr[i].style.display === "") {
            arr[i].style.display = "block"; // Set the display to block for the current element
        }
        if (i !== 0) {
            arr[i - 1].style.display = "none"; // Hide the previous element
        }
    }
    i++; // Increment the index
}

function display(){
    if(form.style.display==="none" || form.style.display===""){
        form.style.display = "flex";
    }
}


var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
  setTimeout(function () {
    loader.style.display = "none";
  }, 2000);

  this.alert("HIGHLY CONFEDENTIAL DON'T SHARE IT WITH ANYONE");
});



