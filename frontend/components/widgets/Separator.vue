<template>
    <div class="separator" :class="{ IsVertical: v, IsHorizontal: h }"></div>
</template>
<script>
export default {
    props:{

        v:{
            type: Boolean,
            default: false
        },
        h:{
            type: Boolean,
            default: true
        }
    }
}
</script>
<style>
.separator{
    background: #ccc;
}
.separator.IsHorizontal{
  height: 1px;
  width: 100%;
  margin: 10px 0px;
}
.separator.IsVertical{
  height: 100%;
  width: 1px;
   margin: 0px 10px;
}
</style>
