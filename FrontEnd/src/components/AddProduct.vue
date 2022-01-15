<template>
    <div> 
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                      <h2>Product Add</h2>
                </div>
                <div class="col-lg-4">
                     <b-button v-on:click="addProduct()"  class="mx-3">

                         <router-link to="/">
                            Save
                        </router-link>
                     </b-button>
                    <b-button class="mx-2" >
                         <router-link to="/">
                            Cancel
                        </router-link>
                    </b-button>
                     
                   
                </div>
             
    
         </div>

        </div> 
        
       
       <LineProduct/>
      <b-container >
         <b-form>
           <b-row class="my-3">
                <b-col lg="2">
                         <label for="sku">SKU</label>
                </b-col>
                 <b-col lg="6">
                       <b-form-input  id="sku" v-model="SKU" placeholder="Enter your SKU" type="text" ></b-form-input>
                </b-col>
           </b-row>
            <b-row class="my-3">  
                 <b-col lg="2">
                         <label for="Name">Name</label>
                </b-col>
                 <b-col lg="6">
                       <b-form-input  id="name" v-model="name" placeholder="Enter your name" type="text" ></b-form-input>
                </b-col>
            </b-row>
            <b-row class="my-3">
                 <b-col lg="2">
                         <label for="price">Price ($)</label>
                </b-col>
                 <b-col lg="6">
                       <b-form-input  id="price" v-model="price" min="1" placeholder="Enter your price" type="number"></b-form-input>
                </b-col>
           </b-row>
            <b-row class="my-3">
                 <b-col lg="2">
                         <label for="productType">Type Switcher</label>
                </b-col>
                 <b-col lg="6">
                        <b-form-select v-model="selected" :options="options" id="productType" ></b-form-select>
                </b-col>
           </b-row>
            <b-row class="my-3" v-if="selected=='DVD'">
                 <b-col lg="2">
                         <label for="size">Size (MB)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="price" v-model="size" min="1" placeholder="Enter your size" type="number"></b-form-input>

                </b-col>
           </b-row>
            <b-row class="my-3" v-if="selected=='Book'">
                 <b-col lg="2">
                         <label for="weight">Weight (KG)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="weight" v-model="weight" min="1" placeholder="Enter your weight" type="number" ></b-form-input>

                </b-col>
           </b-row>
           <b-row class="my-3" v-if="selected=='Furniture'">
                 <b-col lg="2">
                         <label for="height">Height (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="height" v-model="weight" min="1" placeholder="Enter your height" type="number" ></b-form-input>

                </b-col>
           </b-row>
           <b-row class="my-3" v-if="selected=='Furniture'">
                 <b-col lg="2">
                         <label for="width">Widtht (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="width" v-model="width" min="1" placeholder="Enter your width" type="number" ></b-form-input>

                </b-col>
           </b-row>
           <b-row class="my-3" v-if="selected=='Furniture'">
                 <b-col lg="2">
                         <label for="length">Length (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="length" type="number" min="1"  v-model="length" placeholder="Enter your length" ></b-form-input>

                </b-col>
           </b-row>

         </b-form>  
      </b-container>
       <LineProduct/>
    <h4>
        Scandiweb Test Assignment
    </h4>
    </div>
</template>
<script>

import LineProduct from './LineProduct.vue';
export default ({
   name:"AddProduct" ,
   components: {
     LineProduct,
 
   },
    data : function () {
         return {
               SKU: "",
               name:"",
               price:1,
               size:1,
               weight:1,
               height:1,
               width:1,
               length:1,
            selected: 'DVD',
            options: [
            { value: 'DVD', text: 'DVD' },
            { value: 'Book', text: 'Book' },
            { value:'Furniture' ,text:'Furniture'}
            ]
         };
    },
     methods :{
     
       addProduct : function () {
        //   if(this.selected == 'DVD'){
        //       console.log("ho");

        //   }
        //   else if(this.selected=='Book'){
        //         console.log('hi');

        //   }
        //   else if(this.selected=='Furniture'){
        //         console.log('hi');

        //   }
       }
    },
    
})
</script>
<style >
 *{
    margin: 0%;
    padding: 0%;
    color:black;
}

h2
{
    margin-right:30%;
}
</style>
