import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Comments from '@/components/comments'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
   },
  {
  path: '/comments/:id',
  name: 'Comments',
  props: true,
  component: Comments
  }
  ]
})
