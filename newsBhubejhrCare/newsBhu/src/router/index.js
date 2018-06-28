import Vue from 'vue'
import Router from 'vue-router'
import newsBhu from '@/components/newsBhu'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'newsBhu',
      component: newsBhu
    }
  ]
})
