<template>
  <div>
    <b-card no-body>
      <b-tabs v-model="tabIndex" card>
        <b-tab title="Details" :title-link-class="linkClass(0)">
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img :src="url+product.image[0].product_image" class="zoom" alt=""  v-bind:style="{ height:250 +'px'}"/><br>
                    <span class="title">{{ product.name }}</span>  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                         Edit
                        </button>
                    <p>{{ product.discription }}</p>
                    
                    <span>
                        <span>US ${{ product.size[0].price }}</span>
                        <label>Quantity:</label>
                        <input type="text" :value="product.qty" /><br>
                        
                    </span>
                </div><!--/product-information-->
            </div>
            
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Name</h4>
                </div>
                <div class="modal-body">
                  <label>Name</label>
                  <input type="text" :id="name"  name="name" v-model="name" />            
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   <button class="btn btn-success" data-dismiss="modal" @click="edit">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </b-tab>
        <b-tab title="Price" :title-link-class="linkClass(1)">  
          <div style="border:1px solid;padding:10px;">
            <div v-for="size in product.size" :key="size.id" class="prize"  style="margin-bottom: 10px;">
            <label class="badge badge-success"> <input type="checkbox" :id="size.price" :value="size.price" v-model="checkedNumbers">     
              {{ size.size }} {{ size.price }} </label>
            </div>
          
            <h3>Final Total:- {{sum}}</h3>
          </div>
        </b-tab>
        <b-tab title="Images" :title-link-class="linkClass(2)"> 
          <div v-for="image in product.image" :key="image.id" class="images zoom">
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
        name:'',
        id:'',
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
     mounted() {
      this.id = this.product.id,
      this.name = this.product.name
    },
    methods: {
      linkClass(idx) {
        if (this.tabIndex === idx) {
          return ['bg-primary', 'text-light']
        } else {
          return ['bg-light', 'text-info']
        }
      },
      edit() {
        axios.post('/products', {
            id: this.id,
            name: this.name
          }).then(response => this.product = response.data);
      }
    }
  }
</script>

<style scoped>
.column {
  width: 50%;
  padding: 10px;
}

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

.zoom {
transition: transform .2s;

}

.zoom:hover {
transform: scale(1.5); 
}
.product-information{
  border: 1px solid;
  padding: 10px;
}
.title {
  font-size:40px;
  color: black;
}
</style>