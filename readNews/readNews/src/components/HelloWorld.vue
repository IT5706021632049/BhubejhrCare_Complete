<template>

  <div class="hello">
      <h3 style = "color :white;">-</h3>
      <h3 style = "color :white;">-</h3>
    <div class="container is-flex-mobile">
      <div class="row">
        <div v-for="post in postsFeed" class="col-lg-4">

          <div class="card">
              <router-link :to="'/comments/' + post['.key']">
                <br>
                <img :src="post.photo" alt="" @click="getID (post['.key'])" width="80%">
              <div class="card-body">
                <h3 class="card-title fontSize">{{post.description}}</h3>
                <a style = "color :white;" href="#" class="btn bg fontSize">อ่านต่อ</a>
              </div>
              </router-link>
          </div>
            <br>
        </div>
      </div>
    </div>

  </div>

</template>

<script>
export default {
  props: ['posts', 'Search'],
  name: 'hello',
  data () {
    return {
      ids: ''
    }
  },
  methods: {
    getID (id) {
      this.ids = id
      console.log(id)
      console.log(this.ids)
    }
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
img {
  height: 200px;
  width: 250px;
}
.fontSize {
  font-size: 16px;
}
.bg {
  background:#004D40;
}
</style>
