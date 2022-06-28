var header = document.getElementById('header');
var altura = header.offsetTop;
var justa = document.getElementsByClassName('navbar');
var lihov = document.getElementsByClassName('lihov');
var ulhov = document.getElementsByClassName('ulhov');


window.addEventListener('scroll',function(){
	if (window.pageYOffset > altura) {
		header.classList.add('header-sticky');
		for (var i = 0; i < justa.length; i++) {
			justa[i].classList.add('a-sticky');
		}
		for (var i = 0; i < lihov.length; i++) {
			lihov[i].classList.add('lihov-sticky');
		}
		for (var i = 0; i < ulhov.length; i++) {
			ulhov[i].classList.add('ulhov-sticky');
		}
	}
	else {
		header.classList.remove('header-sticky');
		for (var i = 0; i < justa.length; i++) {
			justa[i].classList.remove('a-sticky');
		}
		for (var i = 0; i < lihov.length; i++) {
			lihov[i].classList.remove('lihov-sticky');
		}
		for (var i = 0; i < ulhov.length; i++) {
			ulhov[i].classList.remove('ulhov-sticky');
		}
	}
})

// A partir de aquí viene el slider
const slider = document.querySelector('#slider');
let sliderSection =document.querySelectorAll('.slider__section');
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin',sliderSectionLast);

function Next(){
  let sliderSection = document.querySelectorAll(".slider__section");
  let sliderSectionFirst = sliderSection[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s";

  setTimeout(function() {
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend',sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  },500);
}

function Prev(){
  let sliderSection = document.querySelectorAll(".slider__section");
  let sliderSectionLast = sliderSection[sliderSection.length -1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all 0.5s";

  setTimeout(function() {
    slider.style.transition = "none";
    slider.insertAdjacentElement('afterbegin',sliderSectionLast);
    slider.style.marginLeft = "-100%";
  },500);
}

btnRight.addEventListener('click',function() {
  Next();
});

btnLeft.addEventListener('click',function(){
  Prev();
});

setInterval(
  function(){
    Next();
  },5000);
