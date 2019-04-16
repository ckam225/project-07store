<template>
    <div class="x-container">
        <div class="x-content">
            <div class="x-col-1"></div>
            <div class="x-col-2">
                <div class="x-navigator">
                    <a href="/">Главная</a> 
                    <span class="separator">&gt;</span> 
                    <a href="/catalog/smartphones" >Каталог</a>
                </div>
                <h3 class="x-panel-title">Смартфоны</h3>
                <div class="prods">
                    <card v-for="(pdt,i) in products" :key="i"
                     :title="pdt.title"
                     :price="pdt.price"
                     :inSolde="pdt.inSolde"
                     :ribbon="pdt.ribbon"
                     :thumb="pdt.thumb"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Card from '@/components/products/Card'
export default {
    head: {
        title: 'Смартфоны'
    },
    components: { Card },
    data(){
        return{
            products: [
                {
                  thumb: '/img/smartphones/01.png',
                  price: '61 900 ₽',
                  title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
                  inSolde: false,
                  ribbon: ''
                }, 
                {
                  thumb: '/img/smartphones/02.png',
                  price: '61 900 ₽',
                  title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/03.png',
                  price: '68 990 ₽',
                  title: 'iPhone X 256GB как новый (серый космос)',
                  inSolde: true,
                  ribbon: 'New'
                },
                {
                  thumb: '/img/smartphones/04.png',
                  price: '63 990 ₽',
                  title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/02.png',
                  price: '61 900 ₽',
                  title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/03.png',
                  price: '68 990 ₽',
                  title: 'iPhone X 256GB как новый (серый космос)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/04.png',
                  price: '63 990 ₽',
                  title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
                  inSolde: true,
                  ribbon: 'Solde'
                },
                {
                  thumb: '/img/smartphones/02.png',
                  price: '61 900 ₽',
                  title: 'Смартфон Google Pixel 3 XL 128Gb Black (Черный)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/03.png',
                  price: '68 990 ₽',
                  title: 'iPhone X 256GB как новый (серый космос)',
                  inSolde: false,
                  ribbon: ''
                },
                {
                  thumb: '/img/smartphones/04.png',
                  price: '63 990 ₽',
                  title: 'Смартфон Apple iPhone X 64GB Silver (MQAD2RU/A)',
                  inSolde: false,
                  ribbon: ''
                }
            ]
        }
    }
}
</script>

<style>
.x-content {
    display: flex;
}
.x-content .x-col-1 {
    margin: 20px 0;
    width: 250px;
    min-height: 100px;
    background: rgb(215, 243, 215);
}
.x-content .x-col-2 {
    margin: 20px 0;
    width: calc(100% - 250px);
    display: flex;
    flex-direction: column;
}
.x-content .x-col-2 .prods {
    margin: 20px 0;
    display: flex;
    flex-wrap: wrap;
}
.x-content .x-col-2 .prods > .card {
   width: calc(25% - 10px)
}
.x-content .x-panel-title {
    margin-left: 10px;
}
</style>
