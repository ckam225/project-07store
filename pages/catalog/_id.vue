<template>
    <div class="x-container mh">

        <div class="x-content-fluid" >
            <!-- images assets products -->
            <div class="col col-1">
                <div class="col-img-list">
                    <a href="#" class="img-item" v-for="(item,i) in product.images" :key="i">
                        <img :src="item" alt="" >
                    </a>
                </div>
                <div class="col-img">
                    <img :src="product.image" alt="">
                </div>
            </div>

             <!-- <div class="w-separator"></div> -->
             <hr>
            <!-- infos for products -->
            <div class="col col-2">
                <div class="expo expo-title">
                    <p>{{product.name}}</p>
                </div>
                <div class="expo expo-stats">
                   <div class="expo-stats-votes">
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                       <a href="#" class="votes"><i class="ic-star"></i></a>
                   </div>
                   
                   <!-- <div class="w-separator"></div> -->
                   <separator :v="true" :h="false"/>
                    <hr>
                   <div class="expo-stats-orders">
                        <a href="#">{{product.orders}} {{$t('product.orders')}}</a>
                   </div>
                   <!-- <div class="w-separator"></div> -->
                   <separator :v="true" :h="false"/>

                   <div class="expo-stats-likes">
                        <a href="#"><i class="ic-heart-o"></i> {{ product.likes }}</a>
                   </div>
                </div>

                <separator />

                <table class="table-expo">
                   <tbody>
                        <!-- Price -->
                         <tr v-if="product.price_solde != null">
                            <td> {{ $t('product.price_reduced') }}:  </td>
                            <td class="text_bared">{{product.price_solde}} </td>
                        </tr>
                        <tr>
                            <td> {{ $t('product.price') }}:  </td>
                            <td>{{product.price_variant}} </td>
                        </tr>
                       
                        <!-- colors -->
                        <tr class="tr-pin">
                            <td><span>{{ $t('product.color') }}: </span></td>
                            <td>
                                <div class="article-color-box" >
                                    <a href="#" class="color-item" v-for="(color, i) in product.colors" :key="i" 
                                    :title="color.title"
                                    >
                                     <img :src="color.content" alt="">
                                    </a> 
                                </div> 
                            </td>
                        </tr>
                    
                        <!-- size -->
                        <tr  class="tr-pin">
                            <td>{{$t('product.size')}}: </td>
                            <td>
                                <div class="article-size-box">
                                    <a href="#" class="size-item"  v-for="(size, i) in product.sizes" :key="i">
                                        {{ size }}
                                    </a>
                                </div> 
                            </td>
                        </tr>

                        <tr  class="tr-pin">
                            <td>{{$t('product.quantity')}}:</td>
                            <td>
                                <div class="pad-updown">
                                    <input type="phone" name="" id="" v-model=" product.qte" 
                                    class="pad-updown-value">
                                    <div class="pad">
                                        <button class="pad-up" @click="UpQte"><i class="ic-caret-up" ></i></button>
                                        <button class="pad-down" @click="DownQte"><i class="ic-caret-down"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                     </tbody>
                </table>
                <div class="expo-action">
                    <a href="#" class="expo-btn-action btn-1">Buy now</a>
                    <a href="#" class="expo-btn-action btn-2">Add to cart</a>
                </div>

               
               <separator />

                <div class="expo-analytic">
                    <div class="expo-analytic-item" v-for="(feature, i) in product.features" :key="i">
                        <div class="expo-analytic-item-caption"> {{ feature.caption }}:</div>
                        <div class="expo-analytic-item-value">{{ feature.value }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- for more details -->
        <div class="x-content-fluid">
            <div class="row">
                <h3>More informations</h3>
            </div>
        </div>
    </div>
</template>


<script>
import Separator from '@/components/widgets/Separator'

export default {
 validate ({ params }) {
    // Doit être un nombre
    return /^\d+$/.test(params.id)
  },
  components: { Separator  },
  methods:{
        showAuthForm(){
            this.$store.commit('auth/SHOW_AUTH_FORM', true)
        }
  },
  data(){
      return{
          product:{
              id: 122,
              name:'Смартфон Apple iPhone XR 128GB Белый A2105 (MRYD2RU/A)',
              price: '€ 6,31',
              price_solde: '€ 16,31',
              price_variant: '€ 6,31 - 7,02',
              qte:0,
              qte_avaible:6, 
              orders: 26,
              likes: 73,
              rates: ['36','0','0','0','0'],
              image: '/img/smartphones/model.jpg',
              images: [
                  '/img/pc/5.jpg',
                  '/img/pc/6.jpg',
                  '/img/pc/7.jpg',
                  '/img/pc/8.jpg'
              ],
              colors: [
                  { type: 'image', content:'/img/smartphones/001.jpg', title: 'Blue'},
                  { type: 'image', content:'/img/smartphones/002.jpg', title: 'Gray'},
              ],
              sizes:['S', 'M', 'L','XL','2XL', '3XL', '4XL'],
              features: [
                  { caption: 'Бренд', value: 'APPLE'},
                  { caption: 'Встроенная память', value: '64 Г'},
                  { caption: 'Стандарты связи', value: 'GSM/WCDMA/LTE'}
              ]
          }
      }
  },
  methods:{
      UpQte(){
          if(this.product.qte < this.product.qte_avaible){
              this.product.qte++
          }
      },
      DownQte(){
           if(this.product.qte > 0 ){
              this.product.qte--
          }
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
}
.x-content-fluid .row{
    width: 100%;
    display: flex;
    background: #fff;
    padding: 10px;
     margin: 7px 0;
}
.x-content-fluid .col{
    display: flex;
    width: calc(50% - 1px);
     background: #fff;    
    margin: 7px 0;
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
    align-items: center;
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
    height: 500px;
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
.article-color-box .color-item img{
    width: 100%;
    height: 100%;
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
    border-radius: 2px;
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
.expo-analytic{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.expo-analytic-item{
    display: flex;
    align-items: center;
}
.expo-analytic-item > div{
    width: 50%;
    display: flex;
    align-items: center;
    padding-left: 5px;
}
.expo-analytic-item-caption{
    height: 30px;
    color: #888;
}
.expo-analytic-item-value{
    height: 30px;
}
</style>
