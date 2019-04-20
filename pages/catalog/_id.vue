<template>
    <div class="x-container mh">
        <div class="x-content-fluid">
            <div class="col col-1"></div>
            <div class="col col-2"></div>
            <div class="col col-3">
                <button @click="showAuthForm">SHOW</button>
            </div>
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
.x-content-fluid{
    display: flex;
    background: red;
    height: 30px;
    padding: 20px 0;
}
.x-content-fluid .col{
    display: flex;
    flex-direction: column;
}
.x-content-fluid .col-1{
    width: 120px;
    height: 100px;
    background: chocolate;
}
.x-content-fluid .col-2{
    height: 500px;
    width: 520px;
    background: white;
}
.x-content-fluid .col-3{
    width: calc(100% - 640px);
    height: 100px;
    background: yellowgreen;
}
</style>
