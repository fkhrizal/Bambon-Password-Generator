$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {
	$("#ex6SliderVal").text(slideEvt.value);
});

// Without JQuery
var slider = new Slider("#ex6");
slider.on("slide", function(sliderValue) {
	document.getElementById("ex6SliderVal").textContent = sliderValue;
});