<template>
    <div class="card">
        <div class="ribbon ribbon-top-right " v-if="inSold">
            <span>{{ ribbon }}</span>
        </div> 
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
        inSold:{
            type: Boolean,
            default: false
        },
        ribbon:{
            type: String,
            default: ""
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
