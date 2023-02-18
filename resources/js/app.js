/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import ApresentacaoComponent from './components/ApresentacaoComponent.vue';
app.component('apresentacao-component', ApresentacaoComponent);

import ModalComponent from './components/ModalComponent.vue';
app.component('modal-component', ModalComponent);

import FormComponent from './components/FormComponent.vue';
app.component('form-component', FormComponent);

import ChamadosComponent from './components/ChamadosComponent.vue';
app.component('chamados-component', ChamadosComponent);

import DetalhesComponent from './components/DetalhesComponent.vue';
app.component('detalhes-component', DetalhesComponent);

import FormSimplesComponent from './components/FormSimplesComponent.vue';
app.component('formsimples-component', FormSimplesComponent);

import HomeComponent from './components/HomeComponent.vue';
app.component('home-component', HomeComponent);

import FormDisableComponent from './components/FormDisableComponent.vue';
app.component('formdisable-component', FormDisableComponent);

import FormDadosComponent from './components/FormDadosComponent.vue';
app.component('formdados-component', FormDadosComponent);

import InputComponent from './components/InputComponent.vue';
app.component('input-component', InputComponent);

import MontagemComponent from './components/MontagemComponent.vue';
app.component('montagem-component', MontagemComponent);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
