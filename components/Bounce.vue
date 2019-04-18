<template>
    <span class="x-bounce" :style="{ background: color }"></span>
</template>
<script>
export default {
    props: {
        color: {
            type:String,
            default: '#5b87e9'
        }
    }
}
</script>

<style>
.x-bounce {
    position: absolute;
    z-index: 1;
    top: -3px;
    right: -3px;
    width: 6px;
    height: 6px;
    background-color: #5b87e9;
    border-radius: 50%;
    border: 2px solid #fff;
    box-sizing: content-box;
    z-index: 200;
}
</style>
