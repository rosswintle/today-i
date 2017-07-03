
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('email-hour-selector', require('./components/email-hour-selector.vue'));

const app = new Vue({
    el: '#app'
});

function todayiButtonSetup() {
    var buttons = document.querySelectorAll('#types button');
    var typeInput = document.querySelector('#typeInput');
    buttons.forEach( function(e) {
        e.addEventListener('click', function(e) {
            e.preventDefault();
            buttons.forEach( function(button) {
                button.classList.remove('is-active');
                button.classList.remove('is-primary')
                button.classList.add('is-info');
            } );
            this.classList.add('is-active');
            this.classList.add('is-primary');
            this.classList.remove('is-info');
            var thisId = this.dataset.typeId;
            typeInput.value = thisId;
        });
    });
};


document.addEventListener("DOMContentLoaded", todayiButtonSetup);

