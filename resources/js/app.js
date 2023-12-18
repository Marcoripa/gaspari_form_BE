import './bootstrap';

import { createApp } from "vue";
import UserForm from "./components/UserForm.vue"

const app = createApp();

app.component('userform', UserForm)


app.mount('#app');