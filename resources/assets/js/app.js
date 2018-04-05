// // Create a token or display an error when the form is submitted.
// var form = document.getElementById('payment-form');
// form.addEventListener('submit', function(event) {
// 	//disable the submt button to prevent the repeated clicks;
// 	// $form.find('.submit').prop('disabled','true');
//     event.preventDefault();

// //token is created...
// //stripe.createToken returns a Promise which resolves with a result object. This object has either:
// //either be result.error which shows error or can be result.token that shows successfully token
//   stripe.createToken(card).then(function(result) {
//     if (result.error) {
//       // Inform the customer that there was an error
//       var errorElement = document.getElementById('card-errors');
//       errorElement.textContent = result.error.message;
//     } else {
//       // Send the token to your server
//       stripeTokenHandler(result.token);
//     }
//   });
// });


// //The last step is to submit the token, along with any additional information that has been collected, to your server
// function stripeTokenHandler(token) {
//   // Insert the token ID into the form so it gets submitted to the server
//   var form = document.getElementById('payment-form');
//   var hiddenInput = document.createElement('input');
//   hiddenInput.setAttribute('type', 'hidden');
//   hiddenInput.setAttribute('name', 'stripeToken');
//   hiddenInput.setAttribute('value', token.id);
//   form.appendChild(hiddenInput);

//   // Submit the form
//   form.submit();
// }





/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'


