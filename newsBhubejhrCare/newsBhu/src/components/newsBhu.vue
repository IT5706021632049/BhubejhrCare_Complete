<template>
  <div  class="font">
    <h1 class="alert alert-info center" style="color : white"><span class="badge badge-secondary">Post</span>BhubejhrCare </h1>

    <div  class="row">

    <div class="col-sm">
      <div v-show ="showImage">
        <img  :src="image" class="border border-primary sizepic"/>
      </div>
        <br>
        <input type="file"  @change="onFileChange" class="bg" style="color : white"/>
    </div>

    <div class="col-sm">
    <div class="form-group">
      <p class="">
        <textarea v-model="description" rows="2" cols="50" placeholder="หัวข้อ"></textarea>
      </p>
    </div>

    <div class="form-group">
        <p class="">
          <textarea v-model="comment" rows="4" cols="50" placeholder="รายละเอียด"></textarea>
        </p>
    </div>

    <div class="field is-grouped">
        <p class="control">
          <router-link to="/">
            <button class="btn btn-primary btn-lg active" @click="addPostToApp($event)">โพสต์</button>
          </router-link>
        </p>
    </div>

</div>
</div>
  </div>
</template>

<script>
var image = new Image()
export default {
  props: ['addPost'],
  name: 'hello',
  data () {
    return {
      description: '',
      file: '',
      showImage: false,
      comment: ''
    }
  },
  methods: {
    addPostToApp (e) {
      var newPost = {
        description: this.description,
        comment: this.comment
      }
      this.addPost(newPost, this.file)
      this.comment = ''
      this.description = ''
      this.file = ''
      this.image = ''
      this.showImage = false
    },
    onFileChange (e) {
      var files = e.target.files
      var vm = this
      image = ''
      this.showImage = false
      this.file = files[0]
      var reader = new FileReader()
      reader.onload = function (e) {
        vm.image = e.target.result
        vm.showImage = true
        console.log(this.file)
      }
      reader.readAsDataURL(this.file)
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Prompt&subset=thai');
.font{
     font-family: 'Prompt', sans-serif;
}
.center{
  text-align: center;
  width: 100%;
  background-color: #00352c;
}
.bg{
  background-color: #00352c;
}
.sizepic{
  max-width: 80%;
  height: 300px;
  position: relative;
  overflow: hidden;
  background-color: #efefef;
  color: #ecf0f1;
  margin: auto;
}
</style>
