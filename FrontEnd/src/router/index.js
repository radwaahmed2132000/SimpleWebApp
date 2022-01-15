import Vue from "vue";
import VueRouter from "vue-router";
import AddProduct from "../components/AddProduct.vue";
import Product from "../components/Product.vue";
Vue.use(VueRouter);
const routes = [
    {
      path: "/AddProduct",
      name: "AddProduct",
      component: AddProduct,

      meta: {
        allowAnonymous: true,
       
      },
      
    },
    {
      path: "/",
      name: "Product",
      component: Product,
      meta: {
        allowAnonymous: true,
      
      },
    },
];
const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
  });
router.beforeEach((to, from, next) => {
 
    next();
 
});
// router.afterEach((to) => {
//   Vue.nextTick(() => {
//     document.title = to.meta.title || "Instabug";
//  });
// });

 
export default router;