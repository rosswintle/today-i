
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

Vue.component('example', require('./components/Example.vue'));

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
                button.classList.remove('selected');
            } );
            this.classList.add('selected');
            var thisId = this.dataset.typeId;
            typeInput.value = thisId;
        });
    });
};


document.addEventListener("DOMContentLoaded", todayiButtonSetup);

