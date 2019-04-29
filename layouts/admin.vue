<template>
    <div class="x-container-crop">
         <div class="x-sidebar">
            <div class="crop-asise">
                <ul class="crop-asise-top">
                    <li><a href="#"><i class="ic-bell-o"></i></a></li>
                </ul>
                <ul class="crop-asise-bottom">
                    <li><a href="#"><i class="ic-menu-3"></i></a></li>
                    <li><a href="#"><i class="ic-cog"></i></a></li>
                    <li><a href="#"><i class="ic-user-o"></i></a></li>
                </ul>
            </div>
            <div class="crop-nav">
                <ul>
                    <li><nuxt-link to="/admin"><i class="ic-menu-3"></i>Products</nuxt-link></li>
                    <li><nuxt-link to="/admin/icons"><i class="ic-circle"></i>Icons</nuxt-link></li>
                </ul>
            </div>
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
   
}
.x-container-crop .crop-asise{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 64px;
    height: 100vh;
    /* background: rgba(0, 0, 0, 0.3); */
   background: #51bb7b;
}
.x-container-crop .crop-asise ul{
    list-style: none;
    margin: 0;
    padding: 0;
}
.x-container-crop .crop-asise ul li a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    transition: all 0.5s;
}
.x-container-crop .crop-asise ul li a:hover{
    background: rgba(0, 0, 0, 0.5);
}
.x-container-crop .crop-asise ul li a:focus{
    background: rgba(0, 0, 0, 0.1);
}


.x-container-crop .crop-nav{
    padding-top: 100px;
    display: flex;
    flex-direction: column;
    width: 240px;
    height: 100vh;
    background:#f4f5f7
}
.x-container-crop .crop-nav ul{
    list-style: none;
    margin: 0;
    padding: 0;
}
.x-container-crop .crop-nav ul li a{
    display: flex;
    align-items: center;
    padding: 10px 5px;
    color: #555;
    transition: all 0.5s;
}
.x-container-crop .crop-nav ul li a i{
   margin: 0 10px;
   margin-top: 5px;
}
.x-container-crop .crop-nav ul li a:hover{
    background: rgba(0, 0, 0, 0.1);
}


.x-container-crop .crop-nav ul li .nuxt-link-exact-active{
 background: rgba(0, 0, 0, 0.1);
}
.x-container-crop .x-main{
    width: calc(100% - 305px);
    margin-left: 305px;
    height: 100vh;
}
</style>
