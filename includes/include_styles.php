<style>
                .slider {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  border-radius: 5px;
  background: #FFFFFF;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 23px;
  height: 22px;
  border: 0;
    border-radius: 50%;
  background: url('./assets/img/heart-circle-plus-solid.svg');
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 23px;
  height: 22px;
  border: 0;
    border-radius: 50%;
    background: url('./assets/img/heart-circle-plus-solid.svg');
  cursor: pointer;
}
</style>