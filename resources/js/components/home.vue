<template>

    <postform/>

    <div v-for="post in posts" :key="post.id" class="mt-4">
        <post :post="post"/>
    </div>

    
</template>

<script setup>

    import { ref } from 'vue'

    import Postform from '../elements/Postform.vue'
    import post from '../elements/post.vue'


    let posts = ref([]);

    const getPosts = () =>{
        axios.get('/api/posts')
        .then( res =>{
            console.log(res.data.posts);
            posts.value = res.data.posts;
        })
        .catch( error => console.log(error))
    }

    getPosts();

</script>