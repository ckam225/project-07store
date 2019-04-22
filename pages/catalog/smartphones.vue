<template>
    <div class="x-container mh"> 
   
        <div class="x-content">
            <div class="x-col-1"></div>
            <div class="x-col-2">
               
                <h3 class="x-panel-title">Смартфоны</h3>
                <div class="prods">
                    <item v-for="(pdt,i) in $store.state.products.smartphones" :key="i"
                     :title="pdt.title"
                     :thumb="pdt.thumb"
                     :solde="pdt.solde"
                     :price="pdt.price"
                     :id="i+1"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Item from '@/components/products/Items'
export default {
    head: {
        title: 'Смартфоны'
    },
    components: { Item },

}
</script>

<style>
.x-content {
    display: flex;
}
.x-content .x-col-1 {
    margin: 20px 0;
    width: 250px;
    min-height: 100px;
    background: rgb(215, 243, 215);
}
.x-content .x-col-2 {
    margin: 20px 0;
    width: calc(100% - 250px);
    display: flex;
    flex-direction: column; background: #fff;
}
.x-content .x-col-2 .prods {
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
}
.x-content .x-col-2 .prods > .card {
   width: calc(25% - 10px)
}
.x-content .x-panel-title {
    margin-left: 10px;
}

.prods > .x-card {
    width: calc(25% - 10px);
}
</style>
