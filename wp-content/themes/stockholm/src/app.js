import $ from 'jquery';
import './scss/styles.scss';
import katalog from './js/katalog';
import menuToggle from './js/responsive';

console.log(menuToggle);

$(document).ready(function(){

$('.navbar-toggle').click(function(){
  menuToggle();
})


})
