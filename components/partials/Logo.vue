<template>
     <a href="/" class="app-logo">
        <span class="logo-start" :style="{fontSize:fontSize}">07.</span>
        <span class="logo-end" :style="{fontSize:fontSize}">Store</span>
     </a> 
       <!-- <a href="/" class="brand-logo">
                        <img src="/img/logo.png" width="89.2" height="31" alt="">
                    </a>  -->
</template>
<script>
export default {
    props:{
        fontSize:{
            type: String,
            default: "16px" 
        }
    }
}
</script>

<style>
.app-logo{
    display: flex;
    align-items: center;
}
.app-logo .logo-start{
    background: var(--main-color);
    font-weight: bold;
    color: #fff;
    padding: 5px;
}
.app-logo .logo-end{
    padding: 5px 0;
    margin-top: 2px;
    font-weight: bold;
    font-family: 'Roboto', Tahoma, Geneva, Verdana, sans-serif
}
</style>
