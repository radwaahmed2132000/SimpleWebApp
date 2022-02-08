import Vue from 'vue'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from "./router";
import PortalVue from 'portal-vue'
Vue.use(PortalVue);
import { LayoutPlugin, CardPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(LayoutPlugin);
Vue.use(CardPlugin);

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
