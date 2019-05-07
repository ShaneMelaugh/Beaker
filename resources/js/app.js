
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

// document.getElementById('lightBtn').onclick = function () {
//     document.getElementById('theme_css').href = '/css/light_theme.css';
// };

// document.getElementById('darkBtn').onclick = function () {
//     document.getElementById('theme_css').href = '/css/dark_theme.css';
// };

// document.getElementById('beakerBtn').onclick = function () {
//     document.getElementById('theme_css').href = '/css/beaker_theme.css';
// };

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

$(document).ready(function(){

    $('#dark').click(function(){
        $('#app-root').removeClass();
        $('#app-root').addClass('theme-dark');
        localStorage.clear();
        localStorage.setItem('theme', ['theme-dark']);
        localStorage.getItem('theme');
    });

    $('#light').click(function(){
        $('#app-root').removeClass();
        $('#app-root').addClass('theme-light');
        localStorage.clear();
        localStorage.setItem('theme', ['theme-light']);
        localStorage.getItem('theme');
    });

    $('#beaker').click(function(){
        $('#app-root').removeClass();
        $('#app-root').addClass('theme-beaker');
        localStorage.clear();
        localStorage.setItem('theme', ['theme-beaker']);
        localStorage.getItem('theme');
    });

    $('#outrun').click(function(){
        $('#app-root').removeClass();
        $('#app-root').addClass('theme-outrun');
        localStorage.clear();
        localStorage.setItem('theme', ['theme-outrun']);
        localStorage.getItem('theme');
    });

        $('#dyslexia').click(function(){
        $('#app-root').removeClass();
        $('#app-root').addClass('theme-dyslexia');
        localStorage.clear();
        localStorage.setItem('theme', ['theme-dyslexia']);
        localStorage.getItem('theme');
    });

    var localItem = localStorage.getItem('theme');

    $('body').addClass(localItem);

});

$(document).ready(function() {
$("#font-choice").change(function() {
    //alert($(this).val());
    $('.text__heading').css("font-family", $(this).val());
        localStorage.setItem('font', [$(this).val()]);
        localStorage.getItem('font');
    });

$("#font-weight").change(function() {
    //alert($(this).val());
    $('.text__heading').css("font-weight", $(this).val());
    });

$("#font-height").change(function() {
    //alert($(this).val());
    $('.text__heading').css("line-height", $(this).val());
    });

$("#font-choice-para").change(function() {
    //alert($(this).val());
    $('.text__para').css("font-family", $(this).val());
    });

$("#font-weight-para").change(function() {
    //alert($(this).val());
    $('.text__para').css("font-weight", $(this).val());
    });

$("#font-height-para").change(function() {
    //alert($(this).val());
    $('.text__para').css("line-height", $(this).val());
    });

    var localFont = localStorage.getItem('font');

    $('h1').css('font-family', localFont);
    $('h2').css('font-family', localFont);
    $('h3').css('font-family', localFont);
    $('h4').css('font-family', localFont);
    $('h5').css('font-family', localFont);
    $('h6').css('font-family', localFont);
    $('p').css('font-family', localFont);
    $('button').css('font-family', localFont);
    $('span').css('font-family', localFont);
    $('input').css('font-family', localFont);
    $('label').css('font-family', localFont);
    $('ul').css('font-family', localFont);
    $('li').css('font-family', localFont);
    $('a').css('font-family', localFont);

});

  // $('.prev').click(function(){
  //   console.log('hello');
  //   $('.questionwrap').next().css( "display", "none" );
  // });

  //   $('.next').click(function(){
  //     console.log('next');
  //   $('.questionwrap').next().css( "display", "flex" );
  // });

  //   var correct = "{{$answer->completed}}";

  // $('.test__button').click(function(){
  //   if (correct == "1") {
  //     console.log('answer is correct!'); 
  //   } else {
  //     console.log('incorrect!');
  //   }
  // });

  $(".test__search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".testWrap").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

  $('.testCount').css('margin-left', '20px');
  //$('.questionCount').css('margin-left', '20px');

  var testItems = $('.testWrap').length;
  $('.testCount').append(testItems);

    var resultsItems = $('.results__answer').length;
  $('.results__total--number').append(resultsItems);

      var resultsCorrect = $('.1').length;
  $('.results__total--correct').append(resultsCorrect);

    var questionItems = $('.acordian').length;
    console.log(questionItems);
  $('.questionCount').append(questionItems);

  //Scroll for Test
  
                $(document).ready(function() {
                if ($('.results__answer').attr("id") == "1") {
                  console.log('correct');
                $('.results__answer').addClass('correct');
                } 
                else {
                  console.log('incorrect');
                $('.results__answer').addClass('incorrect');
                }
                });

$(document).ready(function(){

$('.test__button').click(function (){
    var test_id = $(this).attr('tid');
    var question_id = $(this).attr('qid');
    var v = $(this).attr('value');
    $("#test-"+ test_id + "-"+ question_id+ "-answer").val(v)
  });
	
	$(".test-answers").submit(function(stay){
		
	   var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
	   console.log('formdata=>');
	   console.log(formdata)
	   var test_id = $(this).attr('test_id');
	    $.ajax({
	        type: 'POST',
	        url: "/tests/"+ test_id +"/results",
	        data: formdata, // here $(this) refers to the ajax object not form
	        success: function (data) {
	        },
	    });
	    stay.preventDefault(); 
	});

	
});








