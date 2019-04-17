<template>
    <div class="x-container-crop">
         <div class="x-sidebar">
            <div class="crop-asise"></div>
             <div class="crop-nav"></div>
         </div>
        <div class="x-main">
            <nuxt/>
        </div>
    </div>
</template>

<style>
.x-container-crop{
    display: flex;
    width: 100%;
}
.x-container-crop .x-sidebar{
    position: fixed;
    display: flex;
    width: 305px;
    height: 100vh;
    background: #51bb7b;
}
.x-container-crop .crop-asise{
    display: flex;
    width: 64px;
    height: 100vh;
    /* background: rgba(0, 0, 0, 0.3); */
  
}
.x-container-crop .crop-nav{
    display: flex;
    width: 240px;
    height: 100vh;
    /* background: rgba(0, 0, 0, 0.1); */
      background:#f4f5f7
}
.x-container-crop .x-main{
    width: calc(100% - 305px);
    margin-left: 305px;
    height: 100vh;
}
</style>
