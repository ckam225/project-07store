<template>
  <div class="error">
    <h1 class="error-404">404</h1>
    <h1 v-if="error.statusCode === 404"> {{ $t('messages.notFound') }}</h1>
    <h1 v-else>{{ $t('messages.errorOccurred') }}</h1>
    <nuxt-link class="btn-44" to="/">{{ $t('menu.home') }}</nuxt-link>
  </div>
</template>

<script>
export default {
  props: ['error'],
  layout: 'blank' // vous pouvez définir une mise en page personnalisée pour la page d'erreur
}
</script>
<style>
 .error{
     position: fixed;
     margin: 0;
     padding: 0;
     width: 100%;
     height: 100%;
     background: var(--main-color);
     color: #fff; 
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;

 }
 .error-404{
     font-size: 120px;
 }
 .btn-44{
     padding: 10px 20px;
    
     background: rgba(0, 0, 0, 0.3);
     border-radius: 2em;
     transition: all 0.3s;
 }
  .btn-44:hover{
     border: 1px solid rgba(255, 255, 255, 0.0.5);
     background: rgba(0, 0, 0, 0.4);
 }
</style>
