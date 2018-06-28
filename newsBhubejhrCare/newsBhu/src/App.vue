<template>
  <div id="app">
    <router-view :addPost="addPost" />
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
    }
},
  mounted () {
    var vm = this
    vm.$bindAsArray('posts', db.ref('posts'))
  },
  methods: {
    addPost (newPost, file) {
      var vm = this
      storage.child(file.name + Date.now() + Math.floor((Math.random() * 1000) + 1)).put(file).then(function (snapshot) {
        vm.photo = snapshot.downloadURL
        vm.$firebaseRefs.posts.push({
          comment: newPost.comment,
          description: newPost.description,
          photo: vm.photo
        })
      })
    }
  }

}
</script>

<style>
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}
</style>
