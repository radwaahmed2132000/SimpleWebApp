<template>
    <div> 
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                      <h2>Product Add</h2>
                </div>
                <div class="col-lg-4">
                     <button @click="addProduct()">Save</button>
        
                      <button @click="cancelProduct()">Cancel</button>
                  
                     
                   
                </div>
             
    
         </div>

        </div> 
        
       
       <LineProduct/>
      <b-container >
         <b-form id="product_form">
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
                        <b-form-select v-model="type" :options="options" id="productType" ></b-form-select>
               
                </b-col>
           </b-row>
            <b-row class="my-3" v-if="type=='DVD'">
                 <b-col lg="2">
                         <label for="size">Size (MB)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="size" v-model="size" min="1" placeholder="Enter your size" type="number"></b-form-input>
                      <br>
                            <b-card-text> Please provide DVD size in mega bytes </b-card-text>
                </b-col>
           </b-row>
            <b-row class="my-3" v-if="type=='Book'">
                 <b-col lg="2">
                         <label for="weight">Weight (KG)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="weight" v-model="weight" min="1" placeholder="Enter your weight" type="number" ></b-form-input>
                        <br>
                            <b-card-text>Please provide book weight in kilo grams </b-card-text>
                </b-col>
           </b-row>
           <b-row class="my-3" v-if="type=='Furniture'">
                 <b-col lg="2">
                         <label for="height">Height (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="height" v-model="height" min="1" placeholder="Enter your height" type="number" ></b-form-input>

                </b-col>
           </b-row>
           <b-row class="my-3" v-if="type=='Furniture'">
                 <b-col lg="2">
                         <label for="width">Width (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="width" v-model="width" min="1" placeholder="Enter your width" type="number" ></b-form-input>

                </b-col>
           </b-row>
           <b-row class="my-3" v-if="type=='Furniture'">
                 <b-col lg="2">
                         <label for="length">Length (CM)</label>
                </b-col>
                 <b-col lg="6">
                      <b-form-input  id="length" type="number" min="1"  v-model="length" placeholder="Enter your length" ></b-form-input>
                      <br>
                            <b-card-text> Please provide dimensions in HxWxL format </b-card-text>
                </b-col>
           </b-row>
             <b-row class="my-3" v-if="missinghtml==true">
                  Please, submit required data
             </b-row>
              <b-row class="my-3" v-if="invalidhtml==true">
                 Please, provide the data of indicated type
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
import axios from 'axios';
export default ({
   name:"AddProduct" ,
   components: {
     LineProduct,
 
   },
    data : function () {
         return {
              /**
               *  product atttribute name & sku
               * @value empty
               */
               SKU: "",
               name:"",
               /**
                * price  attribue
                * @value 1
                */
               price:1,
               /**
                * size/width/weight/length/height attribue
                * @value 1
                */
               size:1,
               weight:1,
               height:1,
               width:1,
               length:1,
               /**
                * missing input and validtion input
                * @value false
                */
               missing: false,
               invalid: false,
               missinghtml:false,
               invalidhtml:false,
               /**
                *  errors numbers of missing & invalid
                * @value 0
                */
               missingerrors:0,
               invaliderrors:0,
               /**
                * type attribute
                * @value DVD , Book ,  Furniture
                */ 
            type: '',
            options: [
            { value: 'DVD', text: 'DVD' },
            { value: 'Book', text: 'Book' },
            { value:'Furniture' ,text:'Furniture'}
            ]
         };
    },
     methods :{
           /**
           *  cancel product
           * @return void
           */
          cancelProduct:function()
          {
                 this.$router.push("/");
          },
          /**
           *  check inputs fields if not empty
           * @return void
           */
        checkMissing: function(){
               this.missingerrors=0;
               this.invaliderrors=0;
               if(this.SKU=="" || this.name=="" || this.price==""){
                    this.missing= true;
                    this.missingerrors++;
               }
               if(this.type == 'DVD'  && this.size==""){
               this.missing=true;
                    this.missingerrors++;
               }
               else if(this.type=='Book' && this.weight==""){
               this.missing=true;
                    this.missingerrors++;

               }
               else if(this.type=='Furniture' &&(this.width=="" || this.height=="" ||this.length=="")){
                    this.missing=true;
                    this.missingerrors++;

               }
               else if(this.type=="") {
                      this.missing=true;
                    this.missingerrors++;
               }
               if( this.missingerrors==0){
                    this.missing=false;
               }          
        },
        /**
         * check validtion of all inputs fields
         *  @return void
         */
        checkInvalid: function(){
               this.invalid= false;
               this.invaliderrors=0;
                if(!this.name.match(/^[A-Za-z0-9\s]+$/)){
                    this.invalid= true;
                    this.invaliderrors++;
                   
                  
               }
               if(!String(this.price).match(/^[0-9.]+$/)){
                    this.invaliderrors++;
                    this.invalid=true;
                     
               }
               else if (this.price<=0){
                      this.invaliderrors++;
                    this.invalid=true;
                    
               }
               if(!this.SKU.match(/^[a-zA-Z0-9-]*$/)){
                     this.invaliderrors++;
                    this.invalid=true;
                    
               }
               if(this.type=='DVD'){
                    if(!String(this.size).match(/^[0-9.]+$/)){
                            this.invaliderrors++;
                    this.invalid=true;
                     
                    }
                    else if(this.size<=0){
                            this.invaliderrors++;
                    this.invalid=true;

                    }
               }
               if(this.type=='Book'){
                     if(!String(this.weight).match(/^[0-9.]+$/)){
                            this.invaliderrors++;
                    this.invalid=true;
                    }
                    else if(this.weight<=0){
                            this.invaliderrors++;
                    this.invalid=true;
                    }

               }
               if(this.type=='Furniture'){
                     if(!String(this.width).match(/^[0-9.]+$/)){
                            this.invaliderrors++;
                    this.invalid=true;
                  
                    }
                    else if(this.width<=0){
                            this.invaliderrors++;
                    this.invalid=true;
                    
                    }
                     if(!String(this.height).match(/^[0-9.]+$/)){
                            this.invaliderrors++;
                    this.invalid=true;
               
                    }
                    else if(this.height<=0){
                            this.invaliderrors++;
                    this.invalid=true;
                    }
                     if(!String(this.length).match(/^[0-9.]+$/)){
                            this.invaliderrors++;
                    this.invalid=true;
                    }
                    else if(this.length<=0){
                            this.invaliderrors++;
                    this.invalid=true;
                    }

               }
               console.log(this.invalid);
        },
        /**
         * add new product to system
         * @return void
         */
       addProduct : function () {
          this.checkMissing();
          if(!this.missing ){
              this.checkInvalid();
              if(this.invalid){
                   this.invalidhtml =true;
              }
              else{
                   this.invalidhtml= false;
              }
              this.missinghtml=false;
          } 
          else{
               this.missinghtml =true;
          }
         
          let product ={};
          if( !this.missing && !this.invalid){
              
               product.price = this.price;
               product.name= this.name;
               product.type= this.type;
               product.sku= this.SKU;
               if(this.type == 'DVD'){
                 product.size= this.size;
               }
               else if(this.type =='Book'){
                    product.weight= this.weight;
               }
               else if(this.type=='Furniture'){
                    product.width= this.width;
                    product.height= this.height;
                    product.length =this.length;
               }
               console.log(JSON.stringify(product));
              
          axios.post("https://scandiwebtaskradwa.000webhostapp.com/index.php/products",JSON.stringify(product))
          .then( response=> {
               // sku is already exist
               console.log(response.data.meta.msg);
                    if(response.data.meta.status!="200"){
                        
                       this.invalidhtml= true;
                    }
                    else{
                        
                        this.invalidhtml= false;
                           this.$router.push("/");
                    }
                    
           });
                      
          }
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
button
{
     margin: 5%;
     border-radius: 5px 5px;
     padding: 2% 2%;
     background-color: #e7e7e7;
}

</style>
