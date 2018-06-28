<template>
  <div id="">
    <h1 style = "color :white;">-</h1>
    <h4 style = "color :white;">-</h4>
    <div v-for="post in postsFeed">
      <div v-show="post['.key'] == id">
      <h2 align = "center">{{post.description}}</h2><br>
      <img class="img" :src="post.photo"><br>
      <hr>
      <div align = "left" class="marginText">
        {{post.comment}}
      </div><br>
    </div>
    </div>
  </div>
</template>

<script>

export default {
  props: ['id','posts'],
  data () {
    return {

    }
  },
  methods: {

},
computed: {
  postsFeed () {
    console.log(this.posts)
    return this.posts.reverse()
  }
}
}
</script>

<style>
.img {
  height: 50%;
  width: 50%;
}
hr {
  margin-left: 5%;
  margin-right: 5%;
}
.marginText {
  margin-left: 10%;
  margin-right: 10%;
}
.marginTitle {
  margin-left: 32.5%;
}
</style>
