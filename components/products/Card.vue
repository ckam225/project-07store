<template>
    <div class="card"  @click="goToDetail(id)">
        <!-- <div class="ribbon ribbon-top-right ">
            <span>{{ ribbon }}</span>
        </div>  -->
        <ribbon :caption="ribbon"   v-if="inSolde"/>

        <div class="card-thumb">
            <img :src="thumb" alt="">
        </div> 
        <div class="card-title">
            <h1>{{ price }}</h1>
        </div> 
        <div class="card-desc">
            <p>{{ title }}</p>
        </div>
    </div>
</template>
<script>
import Ribbon from '@/components/widgets/Ribbon'
export default {
    components: { Ribbon },
    props: {
        id: {
            type: Number,
        },
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
        }
    },
    data(){
        return{
            ribbonBg: '#04c504'
        }
    },
    methods: {
         goToDetail(pid){
          this.$router.push(`/catalog/${pid}`);
          //redirect(301, `/v/${params.title}/${params.id}`)
        }
    }
}
</script>

<style>

 
  .card{
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 200px;
      border: 1px solid #eee;
      padding: 5px;
      margin: 5px;
      cursor: pointer;
      transition: all .3s;
  }
  .card:hover{
       border-color: #04c504;
       border-color: var(--main-color);
      box-shadow: 0 1px 4px -2px #555;
  }
  .card .card-thumb{
      display: flex;
      justify-content: center;
      align-items: center
  }
  .card .card-thumb img{
     width: 79px;
     height: 159px;
  }
  
</style>
