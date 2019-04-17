<template>
   <span class="x-badge" :style="{ background:bcolor, color:tcolor }">{{ content }}</span>
</template>
<script>
export default {
    name:'badge',
    props:{
        content:{
            type: String,
            default:''
        },
        bcolor:{
            type: String,
            default:'#5b87e9'
        },
        tcolor:{
            type: String,
            default:'#fff'
        }
    }
}
</script>

<style>
.x-badge {
    position: absolute;
    z-index: 1;
    top: -10px;
    left: calc(100% - 10px);
    display: block;
    height: 26px;
    width: 26px;
    line-height: 21px;
    text-align: center;
    font-size: 13px;
    border-radius: 50%;
    /* background: #5b87e9;
    color: #fff; */
    border: 2px solid #fff;
    overflow: hidden;
}
</style>
