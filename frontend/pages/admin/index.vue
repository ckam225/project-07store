<template>
    <div class="box">
        <div v-for="(catalog, index) in catalogs" :key="index" class="g">
            <h2>{{ catalog.caption }}</h2>
            <table>
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Regular price</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr v-for="(product, p) in catalog.products" :key="p">
                        <td>{{ product.name }}</td>
                        <td>{{ product.description }}</td>
                        <td>{{ product.regular_price }}</td>
                        <td>
                            <a href="#"><i class="ic-edit-modify"></i></a>
                            <a href="#"><i class="ic-delete-2x"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      
    </div>
    
</template>
<script>
export default {
    layout: 'admin',
    head: {
        title: 'admin'
    },
    data(){
        return{
            catalogs:[]
        }
    },
    asyncData ({ $axios , error}) {
        return $axios.get('catalog')
        .then((res) => {
             console.log(res);
            return { catalogs: res.data }
        })
        .catch((e) => {
             console.log(e);
           error({ statusCode: 404, message: 'Post not found' })
        })
    },
    methods: {
        async  getUser() {
            try {
                const response = await this.$axios.get('todos/2');
                this.datas=response;
                console.log(response);
            } catch (error) {
                console.error(error);
            }
        }
    }
 }
</script>

<style>
.box{
    padding: 20px;
     background:#f4f5f7
}
.g{
    margin-bottom: 20px;
    background: #fff;
}
.g h2{
    padding: 10px;
    text-align: center;
    color: #ccc
}
table{
    width: 100%;
    border-collapse: collapse;
}


table thead th{
    border: 1px solid #ccc;
    padding: 1px 10px;
}
table thead th:first-child{
    border-left: 0px solid #ccc;;
}
table thead th:last-child{
    border-right: 0px solid #ccc;
}

table tbody td{
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    padding: 5px 10px;
}
table tbody td:first-child{
    border-left: 0px solid #ccc;;
}
table tbody td:last-child{
    border-right: 0px solid #ccc;
}
table tbody tr:hover{
    background: #ebf7eb
}
</style>
