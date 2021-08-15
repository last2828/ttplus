if ($('.main-catalog__content').length) {
  var lowerSlider = document.querySelector('#lower');
  var inputLower = document.querySelector('#lower-num');
  var inputUpper = document.querySelector('#upper-num');
  var upperSlider = document.querySelector('#upper');
  var lowerVal = parseInt(lowerSlider.value);
  var upperVal = parseInt(upperSlider.value);

  upperSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    if (upperVal < lowerVal + 100) {
      lowerSlider.value = upperVal - 100;
      if (lowerVal === lowerSlider.min) {
        upperSlider.value = 2900;

      }
    }

    inputLower.value = lowerVal;
    inputUpper.value = upperVal;

  };

  lowerSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    if (lowerVal > upperVal - 100) {
      upperSlider.value = lowerVal + 100;

      if (upperVal === upperSlider.max) {
        lowerSlider.value = parseInt(upperSlider.max);
      }

    }

    inputLower.value = lowerVal;
    inputUpper.value = upperVal;
  };
}