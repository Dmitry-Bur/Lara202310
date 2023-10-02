<template>
    <h1 class="mt-4">Создание поста</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Создание поста</li>
    </ol>
    <div>
        <div>
            <div class="bd-example m-0 border-0">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Наименование поста</label>
                        <input v-model="title" type="text" class="form-control w-25" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Описание поста</label>
                        <textarea v-model="description" type="text" class="form-control w-25" id="exampleInputEmail"
                                  aria-describedby="emailHelp">
                        </textarea>
                    </div>
                    <select v-model="category" :disabled="!(description && title)" class="form-select w-25"
                            aria-label="Пример выбора по умолчанию">

                        <option v-for="category in categories" :value="category.id">{{ category.name }}</option>

                    </select>
                    <button type="submit" @click.prevent="CreatePost" class="btn btn-primary mt-3">Создать</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreatePost",
    data() {
        return {
            title: null,
            description: null,
            category: null,

            categories: null,
        }
    },

    methods: {
        getCategories() {
            axios.get('/api/categories').then(res => {
                this.categories = res.data.data;
            })
        },

        CreatePost() {
            axios.post('/api/posts',
                {
                    title: this.title,
                    description: this.description,
                    category_id: this.category
                })
                .then(res => {
                this.categories = res.data.data;
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
