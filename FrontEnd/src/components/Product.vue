<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                      <h2>Product List</h2>
                </div>
                <div class="col-lg-4 buttons">
                    <button @click="addNewProduct()">
                         
                            ADD
                      
                    </button>
                     
                    <button @click="deleteProduct()" id="delete-product-btn">MASS DELETE</button>
                </div>
             
    
            </div>
        </div>
       
       <LineProduct/>
           
               <div class="container mb-5">
                   <div class="row">
                      
                       <div class="col-lg-3 my-2"  v-for="product in products" :key="product.id"  >
                           
                         <b-card-group >  
                           <b-card  >  
                             
                                <b-form-checkbox class="delete-checkbox"
                           
                            v-model="ids"
                            :value="product.id"
                            :name="product.name"
                        >
                         
                        </b-form-checkbox>
                        <br>
                       
                       <b-card-text>{{product.SKU}}</b-card-text>
                        <b-card-text >{{product.name}}</b-card-text>
                           <b-card-text >{{product.price}}</b-card-text>
                        <b-card-text v-if="product.type=='DVD'">Size: {{product.size}} MB
                        </b-card-text>
                         <b-card-text v-if="product.type=='Furniture'" >Dimension: {{product.width}}x{{product.height}}x{{product.length}}</b-card-text>
                         <b-card-text v-if="product.type=='Book'">Weight: {{product.weight}}KG</b-card-text>

                           <br>
                          </b-card>
                           </b-card-group >
                       </div>
                    
            
                   </div>
               </div>
                
                
           
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
    name: 'Product',
    components: {
     LineProduct,
 
   },
    data : function () {
         return {
             /**
              * all products 
              * @value array of product
              */
               products :[] ,
               /**
                * number of products
                */
               count:0,
               /**
                * ids of selected products
                */
               ids : [],
               data: [],
               status:"",
               deletedIds: []
               
         };
    },
    methods :{
        /**
         * get all products
         * @return void
         */
       getAllProducts : function()
       {
           this.products =[];
          
            axios.get('https://newoneagainadkjdkw.azurewebsites.net/index.php/products')
           .then(response=>
               { 
                    this.data = response.data.response;
                    this.status= response.data.meta.status;
                    if(this.status=="200"){
                            this.count =this.data.length;
    
                    for(let i=0; i<this.count ;i++) {
                            this.products.push(
                                {
                                name: this.data[i].name,
                                SKU:this.data[i].sku,
                                type: this.data[i].type,
                                price :this.data[i].price,
                                width :this.data[i].width ,
                                height:this.data[i].height,
                                length:this.data[i].length,
                                size:this.data[i].size,
                                weight:this.data[i].weight,
                                id :String(this.data[i].id)
                                 }
                            );
                    }
                    }    
            
           });
    
        
           
         

       },
       /**
        * delete  selected products
        * @return void
        */
      deleteProduct : function () {
           
           console.log(this.ids[0]);
           for (let i=0;i< this.ids.length;i++){
                this.deletedIds.push(
                    {
                        "id":this.ids[i]
                    }
                )
           }
      
            axios.post("https://newoneagainadkjdkw.azurewebsites.net/index.php/del",JSON.stringify(this.deletedIds));
      location.reload();
         
            
       },
       addNewProduct:function()
       {
            this.$router.push("/AddProduct");
          
       }
       
    },
    
  mounted () {
    this.getAllProducts()
}
 , 
})
</script>
<style  >
*{
    margin: 0%;
    padding: 0%;
    color:black;
}

h2
{
    margin-right:30%;
    
}
#delete-product-btn{
  
    margin-left:20% ;
}

button{
    background: blue;
}
.delete-checkbox{
    position: relative;
    right: 40%;
}

</style>

