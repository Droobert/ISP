function myFunction(){
	document.getElementById("demo").innerHTML = "Paragraph changed.";
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("clock").innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

//The snippet below is inspired by code from https://codepen.io/rm89/pen/aNOmzQ?editors=1000
var container = document.querySelector("#contentContainer");
var kitty = document.querySelector("#helloKitty");

container.addEventListener("click", function(event) {
	var xPosition = event.clientX - container.getBoundingClientRect().left - (kitty.clientWidth /2);
	var yPosition = event.clientY - container.getBoundingClientRect().top - (kitty.clientHeight /2);
	kitty.style.left = xPosition + "px";
	kitty.style.top = yPosition + "px";
	}
);
