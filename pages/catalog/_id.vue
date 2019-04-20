<template>
    <div class="x-container mh">

        <div class="x-content-fluid">
            <!-- images assets products -->
            <div class="col col-1">
                <div class="col-img-list">
                    <a href="#" class="img-item"><img src="/img/pc/5.jpg" alt=""></a>
                    <a href="#" class="img-item"><img src="/img/pc/6.jpg" alt=""></a>
                    <a href="#" class="img-item"><img src="/img/pc/7.jpg" alt=""></a>
                    <a href="#" class="img-item"><img src="/img/pc/8.jpg" alt=""></a>
                </div>
                <div class="col-img">
                    <img src="/img/smartphones/model.jpg" alt="">
                </div>
            </div>

             <div class="w-separator"></div>
             
            <!-- infos for products -->
            <div class="col col-2">
                <div class="expo expo-title">
                    <p>Смартфон Apple iPhone XR 128GB Белый A2105 (MRYD2RU/A)</p>
                </div>
                <div class="expo expo-stats">
                   <div class="expo-stats-votes">
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                   </div>
                   <div class="w-separator"></div>
                   <div class="expo-stats-orders">
                        <a href="#">26 orders</a>
                   </div>
                   <div class="w-separator"></div>
                   <div class="expo-stats-likes">
                        <a href="#"><i class="ic-heart-o"></i> 76</a>
                   </div>
                </div>
                <div class="h-separator"></div>
                <table class="table-expo">
                    <!-- Price -->
                    <tr>
                        <td>Price: </td>
                        <td><div>€ 6,31 - 7,02</div> </td>
                    </tr>
                    <!-- colors -->
                    <tr class="tr-pin">
                        <td>Color: </td>
                        <td>
                            <div class="article-color-box">
                                <a href="#" class=" color-item"></a>
                                <a href="#" class=" color-item"></a>
                                <a href="#" class=" color-item"></a>
                                <a href="#" class=" color-item"></a>
                                <a href="#" class=" color-item"></a>
                                <a href="#" class=" color-item"></a>
                            </div> 
                        </td>
                    </tr>
                    <!-- size -->
                    <tr  class="tr-pin">
                        <td>Size: </td>
                        <td>
                            <div class="article-size-box">
                                <a href="#" class="size-item">S</a>
                                <a href="#" class="size-item">M</a>
                                <a href="#" class="size-item">L</a>
                                <a href="#" class="size-item">XL</a>
                                <a href="#" class="size-item">2XL</a>
                                <a href="#" class="size-item">3XL</a>
                                <a href="#" class="size-item">4XL</a>
                            </div> 
                        </td>
                    </tr>

                    <tr  class="tr-pin">
                                <td>Quantity:</td>
                                <td>
                                    <div class="numeric_updown">
                                        <button class="num_down"><i class="ic-minus"></i></button>
                                        <span class="num_value">0</span>
                                        <button class="num_up"><i class="ic-add"></i></button>
                                    </div>
                                </td>
                    </tr>
                </table>
                <div class="expo-action">
                    <a href="#" class="expo-btn-action btn-1">Buy now</a>
                    <a href="#" class="expo-btn-action btn-2">Add to cart</a>
                </div>
            </div>
        </div>
        <!-- for more details -->
        <div class="x-content-fluid">
            <h1>details</h1>
        </div>
    </div>
</template>
<script>
export default {
 validate ({ params }) {
    // Doit être un nombre
    return /^\d+$/.test(params.id)
  },
  components: {  },
  methods:{
        showAuthForm(){
            this.$store.commit('auth/SHOW_AUTH_FORM', true)
        }
  }
}
</script>
<style>
.w-separator{
    height: 100%;
    width: 1px;
    background: #ccc;
    margin: 0;
}
.h-separator{
    width: 100%;
    height: 1px;
    background: #eee;
    margin: 10px 0;
}
.x-content-fluid {
    display: flex;
    padding: 20px 0;
}
.x-content-fluid .col{
    display: flex;
    width: calc(50% - 1px);
}
.x-content-fluid .col-1{
    background: #fff;
}
.x-content-fluid .col-2{
    display: flex;
    flex-direction: column;
    padding: 10px;
}

.col-img-list{
    width: 120px;
    display: flex;
    flex-direction: column;
}
.col-img-list .img-item{
    width: 68px;
    height: 68px;
    margin: 10px 0;
    border: 2px solid #ccc;border-radius: 5px;
}
.col-img-list .img-item:hover{
    border-color: var(--orange);
    border-radius: 5px;
}
.col-img-list .img-item:focus{
  border-color: var(--orange);
    
}
.col-img-list .img-item img{
    width: 100%;
    height: 100%;
    background: #f9f9f9;

    border: 0;
}

.col-img{
    width: calc(100% - 120px);
    display: flex;
    justify-content: center;
    overflow: hidden;
    padding: 10px 0;
}
.col-img img{
    width: 300px;
}
.col-2 .expo {
    width: 100%;
    display: flex;
    padding: 10px 0;
    align-items: center
}
.col-2 .expo .w-separator{
    margin: 0 15px;
}
.col-2 .expo-stats .expo-stats-votes{
   display: flex;
   align-items: center;
}
.col-2 .expo-stats .expo-stats-votes .votes{
    color: var(--orange)
}
.article-color-box, .article-size-box{
    display: flex;
    flex-wrap: wrap;
}
.article-color-box .color-item{
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #ccc;
    background: #ccc;
    margin: 5px 2px ;
    cursor: pointer;
}
.article-color-box .color-item:hover,
.article-color-box .color-item:focus
{
    border-color: var(--orange);
}
.article-size-box .size-item{
    padding: 5px 10px;
     border: 1px solid #ccc;
       margin: 5px 2px ;
    cursor: pointer;
    background: #fff
}
.article-size-box .size-item:hover,
.article-size-box .size-item:focus{
   border-color: var(--orange);
}

.numeric_updown{
    max-width: 100px;
 height: 30px;
 display: flex;
 border: 1px solid #ddd;
 background: #fff;
 align-items: center;
 justify-content: space-between;
 padding: 0px;
}
.numeric_updown button, .numeric_updown input{
    outline: none;
    border: none;
    padding: 0 10px;
    font-size: 15px;
    background: none;
}
.numeric_updown input{
    width: 45px;
}
.numeric_updown .num_down{
    font-weight: bold;
    color: #555;
    cursor: pointer;
}
.numeric_updown .num_up{
    font-weight: bold;
    cursor: pointer;
}
.table-expo{
    width: 100%;
    border-collapse: collapse;
}
.table-expo td{
   padding: 5px;
}
.table-expo .tr-pin{
   background: #eee
}
.expo-action{
    display: flex;
    padding: 15px 0;
}
.expo-btn-action{
    padding: 10px 0;
    width: calc(50% - 0px);
    border-radius: 5px;
    text-align: center;
     color: #fff;
   transition: all 0.3s;
}
.expo-btn-action.btn-1{
    margin-right: 5px;
     background: var(--main-color);
    
}
.expo-btn-action.btn-1:hover{
     background: var(--main-color);
     opacity: 0.8;   
}
.expo-btn-action.btn-2{
    margin-left: 5px;
     background: var(--blue-1);
}.expo-btn-action.btn-2:hover{
     background: var(--blue-1);
     opacity: 0.8;
}
</style>
