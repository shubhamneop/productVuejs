<template>
  <div class="container">
      <div >
             <input type="text" v-model="search" class="pull-right" placeholder="Search.." @keyup.enter="searchProduct" v-bind:style="{ position: 'relative',left: 75 +'%',padding: 5+'px'}">
            </div>
    
    <div class="col">   
        <div class="row">
            
            <div v-for="product in lists" :key="product.id" class="col-12 col-md-6 col-lg-4" >
                <div class="card">
                    <img class="card-img-top"  :src="product.image[0].product_image" alt="Card image cap" v-bind:style="{ height:250 +'px'}">
                    <div class="card-body">
                        <h4 class="card-title"><a href="product.html" title="View Product">{{ product.name }}</a></h4>
                        <p class="card-text">{{ product.discription }}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block">{{ product.size[0].price }} $</p>
                            </div>
                            <div class="col">
                                <a :href="`products/${product.id}`" class="btn btn-success btn-block">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</template>

<script>
import axios from "axios";
export default {
 props: {
     products: Array,
        },
  data () {
    return {
      img : 'product/phpixGH5I.jpeg',
      search:'',
      lists:[]
        }
   },
   mounted() {
   this.lists = this.products
        },
   methods: {
     searchProduct: function() {
         if(this.search){
            axios.get(`products`, { params: { search: this.search } })
                .then(response => this.lists = response.data)
                .catch(error => {});
         }else{
             this.lists = this.products
         }
      
    }       
   }
}
</script>

<style>

</style>