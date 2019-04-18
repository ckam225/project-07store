<template>
<div class="x-card" >
    <div class="x-ribbon" >
        <a href="#" >
            <i class="icon ic-heart-o" ></i>
        </a>
    </div> 
    <div class="x-card-image" >
        <img :src="thumb" alt="" width="79" height="159" >
    </div> 
    <div class="x-card-title" >
        <a href="#" >{{ title }}</a>
    </div> 
    <div class="x-card-rate" >
        <div class="x-rates" >
            <a href="#" ><i class="icon ic-star" ></i> </a> 
            <a href="#" ><i class="icon ic-star-o" ></i> </a> 
            <a href="#" ><i class="icon ic-star-half" ></i></a> 
            <a href="#" ><i class="icon ic-star-half-o" ></i></a>
        </div> 
        <div class="x-likes" >
            <i class="fas fa-comment x-likes-item" ></i> 
            <span class="x-likes-item" >{{ likes }}</span>
        </div>
    </div> 
    <div class="x-card-footer" >
        <div class="x-prices" >
            <span class="x-sold" >{{ solde }}  {{ $store.state.settings.devise }}</span> 
            <span class="x-price" >{{ price }} {{ $store.state.settings.devise }}</span>
        </div> 
        <div class="x-cart" >
            <a href="#" @click="addToCart">
                <i class="icon ic-shop-cart-in" ></i>
            </a>
        </div>
    </div>
</div>
</template>

<script>
export default {
     props: {
        title:{
            type: String,
            default: ""
        },
        price:{
            type: String,
            default: ""
        },
        thumb:{
            type: String,
            default: ""
        },
        inSolde:{
            type: Boolean,
            default: false
        },
        ribbon:{
            type: String,
            default: ""
        },
        solde:{
            type: String,
            default: ""
        },
        likes: {
            type: Number,
            default: 0
        },
    },
    methods: {
      addToCart(){
          var product = {
              id: 1,
              name: 'Iphone X',
              price: '$ 1500'
          }
          this.$store.commit('products/addToCart', product)
      }
   }
}
</script>


<style>
.x-card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 200px;
    border: 1px solid #eee;
    margin: 5px;
    transition: all .3s;
}
.x-card:hover{
    box-shadow: 0 1px 4px -2px #777;
}
.x-card:hover > .x-ribbon{
    display: flex;
}
.x-card .x-card-image{
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center
}
/* .x-card .x-card-image img{
   /* background: #eee; */
/* width: 79px;
   height: 159px; 
} */
.x-card .x-card-title{
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    padding: 5px 15px;
}
.x-card .x-card-title a:hover{
    color: #ffa300;
}
.x-card .x-card-rate{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15px ;
}
.x-card .x-card-rate a{
    font-size: 14px;
    color: #ffcc00;
    color: var(--color-accent)
}
.x-likes{
 display: flex;
 align-items: center;
 margin: 10px 0;
}
.x-likes .x-likes-item {
    margin: 0 2px;
    color: #b9b9b9;
}
.x-card .x-card-footer{
    padding: 5px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.x-card-footer .x-prices{
    display: flex;
    flex-direction: column;
}
.x-prices .x-sold{
    text-decoration: line-through;
    color: #777;
}
.x-prices .x-price{
    font-weight: bold;
    font-size: 18px;
}
.x-card-footer .x-cart a{
    text-align: center;
   padding: 5px 10px;
   color: #fff;
   background: #04c504;
   background: var(--main-color);
   border-radius: 3px;
   transition: all .3s;
}
.x-card-footer .x-cart a:hover{
    background: rgba(4, 197, 4, 0.6)
}
.x-ribbon{
    display: none;
    background: #fff;
    color: #ffa300;
    position: absolute;
    right: 0;
    padding: 5px 15px;
    transition: all 0.3s;
}
.x-ribbon .icon{
    font-size: 25px;
}

</style>
