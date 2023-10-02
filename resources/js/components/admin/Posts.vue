<template>
    <h1 class="mt-4">Посты</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Посты</li>
    </ol>
<div>
    <div v-for="post in posts" class="card mb-4 w-75">
        <span class="breadcrumb mt-3 m-lg-3"> {{post.title}}</span>
        <div class="card-body">
            {{post.description}}
            <a href="#">{{post.category}}</a>
            .
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Posts",

    data(){
        return{
            posts:[],
        }
    },

    methods:{
        getPosts(){
            axios.get('/api/posts').
            then( res => {
                this.posts = res.data.data
                console.log(res.data.data)
            })
        },
    },


    mounted() {
        this.getPosts()
    }


}
</script>

<style scoped>

</style>
