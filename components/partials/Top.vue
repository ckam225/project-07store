<template>
    <header>
        <div class="x-navbar">
            <div class="x-container">
                <div class="x-navbar-brand">
                    <a href="#" class="x-nav-item x-btn-toggle" >
                        <i class="ic-menu-2x mr-15"></i>
                    </a>
                    <a href="/" class="brand-logo">
                        <img src="/img/logo.png" width="89.2" height="31" alt="">
                    </a> 
                    <div class="x-searchbox">
                        <input type="text"> 
                        <a href="#" class="x-btn-search" ><i class="ic-search-2x"></i></a>
                    </div>
                </div>
                <div class="x-navbar-nav ">
                    <nuxt-link to="catalog/favorites" class="x-nav-item">
                        <i class="ic-like-love"></i>
                        <bounce :color="bounce"  v-if="$store.state.products.favorites.length > 0" />
                    </nuxt-link>
                    <nuxt-link to="catalog/cart" class="x-nav-item">
                        <i class="ic-shop-cart"></i>
                        <badge :content="$store.state.products.cart.length" />
                    </nuxt-link>
                    <a @click="activeLogin"  class="x-nav-item auth-icon " id="auth-btn" v-if="$store.state.auth.user ==null">Войти
                       
                    </a>       
                    <a href="#" class="x-nav-item auth-icon" v-else >
                        <i class="ic-user-o"></i>
                    </a>  
                     
                    <login v-show="showLogin"/>  
                </div>
            </div>
        </div> 
        
        <div class="x-menu box-shadow is-light">
            <div class="x-container">
                <div class="x-menu-nav">
                    <nuxt-link to="/" class="x-menu-item">Главная</nuxt-link>
                    <nuxt-link to="/catalog/smartphones" class="x-menu-item">Смартфоны</nuxt-link>
                    <nuxt-link to="/catalog/tablettes" class="x-menu-item">Планшеты</nuxt-link>
                    <nuxt-link to="/catalog/headphones" class="x-menu-item">Наушники</nuxt-link> 
                    <nuxt-link to="/catalog/accessoires" class="x-menu-item ">Аксессуары</nuxt-link>
                    <nuxt-link to="/catalog/gadgets" class="x-menu-item">Гаджеты</nuxt-link>
                </div> 
                <div class="x-separator"></div>
                <div class="x-menu-nav">
                    <nuxt-link to="/orders" class="x-menu-item">Доставка</nuxt-link> 
                    <nuxt-link to="/contacts" class="x-menu-item">Контакты</nuxt-link>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import Badge from '@/components/widgets/Badge'
import Bounce from '@/components/widgets/Bounce'
import Login from '@/components/widgets/Login'
export default {
  components: { Badge, Bounce, Login },
  data(){
      return{
          bounce: "coral", 
          showLogin: false
      }
  },
  computed: {
    counter () { return this.$store.state.counter }
  },
  methods: {
     activeLogin(){
         this.showLogin = !this.showLogin
     }
  }
}
</script>


<style>


header{
    background: #fff;
}
header  .brand-logo{
      display: flex;
}
header .x-navbar{
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #eee;
}
  header .x-navbar .x-container{
      display: flex;
      justify-content: space-between;
  }
  header .x-navbar-brand{
      display: flex;
      align-items: center;
      min-width: 70%;
  }
  header .x-searchbox{
      margin-left: 50px;
      width: calc(100% - 100px);
      height: 40px;
      border: 2px solid #ccc;
      border-radius: 0.25em;
      display: flex;
      justify-content: space-between;
  }
  header .x-searchbox input{
      outline: none;
      border: 0;
      padding: 0 10px;
      width: calc(100% - 30px);
  }
  header .x-searchbox input:focus + a{
     background: var(--main-color);
     color: #fff;
  }
  header .x-searchbox[focus-within]{
      border-color: var(--main-color);
  }
  header .x-searchbox:focus-within{
      border-color: var(--main-color);
  }
  header .x-btn-search{
      display: flex;
      align-items: center;
      background: #ccc;
      padding: 0px 15px;
  }
  header  .x-navbar-nav{
        display: flex;
  }
  header .x-navbar-nav .x-nav-item{
        position: relative;
        padding: 10px;
        display: flex;
        align-items: center;
  }
  header .x-navbar-nav .x-nav-item:hover{
    color: #04c504;
    color: var(--main-color);
  }
  header .x-navbar-nav .x-nav-item .x-badge{
    top: -5px;
    left: calc(100% - 15px);
  }
  header .x-navbar-nav .x-nav-item .x-bounce{
     top: 9px;
    right: 3px;
  }
  header  .x-nav-item.x-btn-toggle{
      display: none;
  }
    /* menu */
  header .x-menu{
     display: flex
  }
  header .x-menu .x-container{
      display: flex;
      justify-content: space-between;
  }
  header .x-menu .x-menu-nav{
    display: flex;
  }
  header .x-menu .x-menu-item{
        /* width: 150px; */
        padding: 10px 5px;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        font-size: 16px;
        margin-right: 10px;
        transition: all .3s;
       /* background: var(--green) */
  }
  header .x-menu .x-menu-item:first-child{
    margin-left: 0;
  }
  header .x-menu .x-menu-item:last-child{
    margin-right: 0;
  }
  header .x-menu .x-menu-item:hover{
      /* font-weight: 600; */
      /* text-decoration: underline; */
      border-bottom: 1px solid  var(--main-color);
  }

  header .x-menu .x-menu-item.active:hover{
    color: black;
  }
  
    /* header  .x-menu .nuxt-link-active{
     border-bottom: 2px solid  var(--main-color);
  } */
  header .auth-icon{
    margin-left: 20px;
    position: relative;
    cursor: pointer;
  }

  header .x-menu .nuxt-link-exact-active{
    border-bottom: 2px solid  var(--main-color);
  }
  /* header #auth-btn:hover .login{
      display: flex;
  } */
@media screen and (min-width: 870px) {
   header .x-menu{
     display: flex;
     height: 45px;
  }
}
@media screen and (max-width: 870px) {
     /* css */
    header .x-nav-item.x-btn-toggle{
        display: flex;
    }
    header {
        position: relative;
    }
    header .x-menu{
       position: absolute;
       width: 200px;
       overflow-y: auto;
        top: 41;
        left:0;
        box-shadow: 0px 1px 4px -2px #555;
        z-index: 100;
    }
   header .x-menu .x-container{
       width: 100%;
        display: flex;
        flex-direction: column; 
   }
   header .x-menu .x-menu-nav{
    display: flex;
    flex-direction: column;
   }
   
   header .x-separator{
       width: 100%;
       border-bottom: 1px solid #ddd;
       margin: 5px 0;
   }
  header .x-menu .nuxt-link-exact-active{
    background:   #f9f9f9;
    border-bottom: 0;
  }
  header .x-menu .x-menu-item, .x-menu-item:first-child{
      padding-left: 10px;
  }

  header .x-menu .x-menu-item:hover{
      border-bottom: 0px;
  }

}
@media screen and (max-width: 478px){
    header .x-searchbox{
        display: none;
    }
}

</style>
