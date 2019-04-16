<template>
    <header>
        <div class="x-navbar">
            <div class="x-container">
                <div class="x-navbar-brand">
                    <a href="/" class="brand-logo">
                        <img src="/img/logo.png" width="89.2" height="31" alt="">
                    </a> 
                    <div class="x-searchbox">
                        <input type="text"> 
                        <a href="/#" class="x-btn-search"><i class="ic-search-2x"></i></a>
                    </div>
                </div>
                <div class="x-navbar-nav ">
                    <a href="#" class="x-nav-item"><i class="ic-like-love"></i></a>
                    <a href="#" class="x-nav-item"><i class="ic-shop-cart"></i></a>
                    <a href="#" class="x-nav-item">Войти</a>
                </div>
            </div>
        </div> 
        
        <div class="x-menu box-shadow is-light">
            <div class="x-container">
                <div class="x-menu-nav">
                    <nuxt-link to="/" class="x-menu-item" style="padding-left:0px;justify-content:flex-start;">
                        <i class="ic-menu-2x mr-15"></i>Главная
                    </nuxt-link>
                    <nuxt-link to="/catalog/smartphones" class="x-menu-item">Смартфоны</nuxt-link>
                    <nuxt-link to="/catalog/tablettes" class="x-menu-item">Планшеты</nuxt-link>
                    <nuxt-link to="/catalog/headphones" class="x-menu-item">Наушники</nuxt-link> 
                    <nuxt-link to="/catalog/accessoires" class="x-menu-item ">Аксессуары</nuxt-link>
                    <nuxt-link to="/catalog/gadgets" class="x-menu-item">Гаджеты</nuxt-link>
                </div> 
                <div class="x-menu-nav">
                    <nuxt-link to="/orders" class="x-menu-item">Доставка</nuxt-link> 
                    <nuxt-link to="/contacts" class="x-menu-item">Контакты</nuxt-link>
                </div>
            </div>
        </div>
    </header>
</template>
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
      justify-content: space-between;
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
     background: greenyellow;
  }
  header .x-searchbox[focus-within]{
      border-color: greenyellow;
  }
  header .x-searchbox:focus-within{
      border-color: greenyellow;
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
        padding: 10px;
        display: flex;
        align-items: center;
  }
  header .x-navbar-nav .x-nav-item:hover{
    color: #04c504;
    color: var(--main-color);
  }
  
    /* menu */
  header .x-menu{
        display: flex;
        height: 45px;
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
  header .x-menu .x-menu-item:last-child{
    margin-right: 0;
  }
  header .x-menu .x-menu-item:hover{
      /* font-weight: 600; */
      /* text-decoration: underline; */
      border-bottom: 1px solid  #04c504;
      border-bottom: 1px solid  var(--main-color);
  }
  header .x-menu .x-menu-item.active{
      /* font-weight: bold; */
      /* color: var(--main-color) */
       border-bottom: 2px solid  #04c504;
       border-bottom: 2px solid  var(--main-color);
  }
  header .x-menu .x-menu-item.active:hover{
    color: black;
  }
  
    /* header  .x-menu .nuxt-link-active{
     border-bottom: 2px solid  var(--main-color);
  } */
  header .x-menu .nuxt-link-exact-active{
    border-bottom: 2px solid  #04c504;
    border-bottom: 2px solid  var(--main-color);
  }

</style>
