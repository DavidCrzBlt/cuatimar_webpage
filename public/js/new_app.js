var header = document.getElementById('header');
var altura = header.offsetTop;
var justa = document.getElementsByClassName('navbar');
var lihov = document.getElementsByClassName('lihov');
var ulhov = document.getElementsByClassName('ulhov')


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

// Slider de proyectos

const slider = document.querySelector('#slider');
let sliderSection =document.querySelectorAll('.slider__section');
let sliderSectionLast = sliderSection[sliderSection.length -1];

const slider_text =document.querySelector('#slider_text');
let sliderText = document.querySelectorAll('.texto');
let sliderTextLast = sliderText[sliderText.length-1];

const btn_next=document.querySelector("#btn-next");

slider.insertAdjacentElement('afterbegin',sliderSectionLast);

function Next(){
  let sliderSection = document.querySelectorAll(".slider__section");
  let sliderSectionFirst = sliderSection[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s linear";

  setTimeout(function() {
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend',sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  },500);
}

slider_text.insertAdjacentElement('afterbegin',sliderTextLast);

function Up(){
     let sliderText = document.querySelectorAll(".texto");
     let sliderSectionFirst = sliderText[0];
     slider_text.style.marginLeft = "-200%";
     slider_text.style.transition = "all 0.5s linear";

     setTimeout(function() {
       slider_text.style.transition = "none";
       slider_text.insertAdjacentElement('beforeend',sliderSectionFirst);
       slider_text.style.marginLeft = "-100%";
     },500);
}

btn_next.addEventListener('click',function(){
	Up();
	Next();
});

setInterval(
  function(){
    Up();
    Next();
},15000);
