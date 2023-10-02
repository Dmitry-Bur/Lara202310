<template>
    <h1 class="mt-4">Создание категории</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Создание категории</li>
    </ol>
<div>
    <div>
        <div class="bd-example m-0 border-0">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Наименование категории</label>
                    <input v-model="category" type="text" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" @click.prevent="CreateCategory" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>
</div>


    <div class="card mt-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Список постов
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Name</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                </tr>
                </tfoot>
                <tbody>
                <tr v-if="categories" v-for="category in categories">
                    <td>{{category.name}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


</template>

<script>
export default {
    name: "CreatePost",
    data(){
        return{
            category: null,
            categories: null,
        }
    },

    methods:{
        getCategories(){
            axios.get('/api/categories').
            then( res => {
                this.categories = res.data.data;
            })
        },

        CreateCategory(){
            axios.post('/api/categories', {name: this.category}).
                then(res=>{
                console.log(123);
                this.category = null
                this.getCategories()
            })
        }
    },


    mounted() {
        this.getCategories()
    }


}
</script>

<style scoped>

</style>
