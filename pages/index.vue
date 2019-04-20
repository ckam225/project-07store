<template>
  <div class="x-container mh">
    <div class="x-navigator">
      <a href="/" class="nuxt-link-exact-active nuxt-link-active">Главная</a> 
      <span class="separator">&gt;</span> <a href="/admin">Каталог</a>
    </div> 
    <h2></h2> 
    <div class="products">
      <card v-for="(pdt,i) in $store.state.products.smartphones" :key="i" 
        :title="pdt.title"
        :price="pdt.price"
        :inSolde="pdt.inSolde"
        :ribbon="pdt.ribbon"
        :thumb="pdt.thumb"
        :id="i+1"
      />
    </div>
  </div>
</template>

<script>
import Card from '@/components/products/Card'
export default {
  head:{
    title: '07Store'
  },
  components: {
    Card
  },
}
</script>

<style>
.products{
  display: flex;
  flex-wrap: wrap
  
}
 .products > .card {
   width: calc(20% - 10px)
}
</style>

