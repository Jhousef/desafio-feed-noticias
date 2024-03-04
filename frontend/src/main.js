import './assets/main.css';

import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import axios from 'axios';

const http = axios.create({
  baseURL: 'http://localhost:8000/api',
});

window.axios = http;

const app = createApp(App);

app.use(router);

app.mount('#app');
