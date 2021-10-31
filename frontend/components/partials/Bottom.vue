<template>
   <footer class="footer">
    <div class="x-container">

       <div class="footer-top">

        </div>
        <div class="footer-center">
            <div class="group">
                 <div class="group-nav flex-start">
                     <h6 style="margin: 10px 0">Subscription</h6>
                     <div class="search-box">
                         <input type="email" class="search-field" placeholder="Please enter your email" required>
                         <a  class="search-btn">Subscribe</a>
                     </div>
                 </div>
                <div class="group-nav">
                    <nuxt-link to="/" class="x-menu-item">Главная</nuxt-link>
                    <nuxt-link to="/catalog/smartphones" class="x-menu-item">Смартфоны</nuxt-link>
                    <nuxt-link to="/catalog/tablettes" class="x-menu-item">Планшеты</nuxt-link>
                    <nuxt-link to="/catalog/headphones" class="x-menu-item">Наушники</nuxt-link> 
                    <nuxt-link to="/catalog/accessoires" class="x-menu-item ">Аксессуары</nuxt-link>
                    <nuxt-link to="/catalog/gadgets" class="x-menu-item">Гаджеты</nuxt-link>
                </div>
                <div class="group-nav">
                    <nuxt-link to="/orders" class="x-menu-item">Доставка</nuxt-link> 
                    <nuxt-link to="/contacts" class="x-menu-item">Контакты</nuxt-link>
                </div> 
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-nav">
                <a href="#" class="footer-nav-item">Мобильная версия</a> 
                <a href="#" class="footer-nav-item">Статистика</a> 
                <a href="#" class="footer-nav-item">Пользовательское соглашение</a>
            </div> 
            <div class="footer-nav">
                <a href="#">© 2019   «07 Shop»</a>
            </div>
        </div>

    </div>
</footer>
</template>
<style>
  footer{
      background: #2b2b33;
      color: #999;
  }
  footer .x-container{
      padding: 20px 0;
      display: flex;
      flex-direction: column;
  }
  .footer-center{
      display: flex;
      padding: 30px 0;
  }
  .footer-center .group {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
  }
  
 .footer-center .group  .group-nav{
     border-radius: 5px;
       padding: 10px 20px;
      display: flex;
      flex-direction: column;
      /* align-items: center; */
      margin-right: 10px;
      /* width: calc(25% - 10px); */
      /* background: rgba(77, 77, 77, 0.1) */
  }
  .group-nav.flex-start{
      justify-content: left
  }
.footer-bottom{
      display: flex;
      justify-content: space-between;
  }
  footer .footer-nav{
      display: flex;
  }
  footer .footer-nav-item{
      margin: 5px;
  }
  footer .footer-nav-item:first-child{
      margin-left: 0;
  }
.search-box {
    display: flex;
    border: 1px solid rgba(77, 77, 77, 0.1);
}
.search-box  .search-field{
    border: 0;
    outline: none;
    padding: 8px 10px;
}
.search-box .search-btn{
    border: 0;
    padding: 4px;
    text-align: center;
    background: var(--main-color);
    color: #fff;
    cursor: pointer;
}
</style>
