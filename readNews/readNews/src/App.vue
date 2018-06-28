<template>
  <div id="app">
    <div class="head">
      <h3 style="color :white;">BhubejhrCare <span class="badge badge-secondary">News</span></h3>
    </div>
  <router-view :posts="posts" />
  </div>
</template>

<script>
import firebase from 'firebase'
var config = {
  apiKey: 'AIzaSyDhjXvAN661djk4gd2hYuj9b68Ygp6X5BQ',
  authDomain: 'newsbhu.firebaseapp.com',
  databaseURL: 'https://newsbhu.firebaseio.com',
  projectId: 'newsbhu',
  storageBucket: 'newsbhu.appspot.com',
  messagingSenderId: '33396632657'
}
var firebaseApp = firebase.initializeApp(config)
var storage = firebase.storage().ref('photoPost')
var db = firebaseApp.database()
export default {
  name: 'app',
  data () {
    return {
        posts: []
    }
  },
  mounted () {
    var vm = this
    vm.$bindAsArray('posts', db.ref('posts'))
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Prompt&subset=thai');
#app {
  font-family: 'Prompt', sans-serif;
  text-align: center;
}
.head{
  margin-left: -50%;
  width: 100%;
  height: 57px;
  display: inline-block;
  background:#004D40;
  padding: 10px;
  box-shadow: 0 0 5px #000;
  z-index: 999;
  position: fixed;
}
</style>
