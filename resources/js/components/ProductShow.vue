<template>
  <div>
    <b-card no-body>
      <b-tabs v-model="tabIndex" card>
        <b-tab title="Details" :title-link-class="linkClass(0)">
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img :src="url+product.image[0].product_image" class="newarrival" alt=""  v-bind:style="{ height:250 +'px'}"/>
                    <h2>{{ product.name }}</h2>
                    <p>{{ product.discription }}</p>
                    
                    <span>
                        <span>US ${{ product.size[0].price }}</span>
                        <label>Quantity:</label>
                        <input type="text" :value="product.qty" /><br>
                        <button type="button" class="btn btn-default">
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </span>
                </div><!--/product-information-->
            </div>
        </b-tab>
        <b-tab title="Price" :title-link-class="linkClass(1)">  
            <div v-for="size in product.size" :key="size.id" class="prize"  style="margin-bottom: 10px;">
             <input type="checkbox" :id="size.price" :value="size.price" v-model="checkedNumbers">     
              <label>{{ size.size }} {{ size.price }} </label>
             
              
            </div>
            <h3>Final Total:- {{sum}}</h3>
        </b-tab>
        <b-tab title="Images" :title-link-class="linkClass(2)"> 
          <div v-for="image in product.image" :key="image" class="images zoom">
              <img :src="url+image.product_image" class="newarrival" alt=""  v-bind:style="{ height:250 +'px'}"/>         
            </div>
        </b-tab>           
      </b-tabs>
    </b-card>
  </div>
</template>

<script>
  export default {
      props:{
       product: Object  
      },
    data() {
      return {
        url : 'http://127.0.0.1:8000/',
        checkedNumbers: [],
        tabIndex: 0
      }
    },
      computed: {
  	  sum() {
        return this.checkedNumbers.reduce(function (a, b) {
          return parseInt(a) + parseInt(b);
        }, 0);
      }
    },
    methods: {
      linkClass(idx) {
        if (this.tabIndex === idx) {
          return ['bg-primary', 'text-light']
        } else {
          return ['bg-light', 'text-info']
        }
      }
    }
  }
</script>

<style scoped>
.column {
  /* float: left; */
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.images {
  float: left;
  margin-left: 10px;
  border: 1px solid;
  padding: 7px;
}
.prize {
  border: 1px solid;
  width: 115px;
}
.zoom {
transition: transform .2s;

}

.zoom:hover {
transform: scale(1.5); 
}

</style>