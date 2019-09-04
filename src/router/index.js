import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/home/Home'
import Emotion from '@/pages/emotion/Emotion'
import Success from '@/pages/success/Success'
import SuccessDetail from '@/pages/success/SuccessDetail'
import Sign from '@/pages/sign/Sign'
import User from '@/pages/user/User'
import AboutMe from '@/pages/aboutMe/AboutMe'

Vue.use(Router)

export default new Router({
	//mode:"history",
  routes: [
	{
      path: '/',
      name: 'Home',
      component: Home
    },
	{
      path: '/success',
      name: 'Success',
      component: Success
    },
	{
      path: '/user',
      name: 'User',
      component: User
    },
	{
      path: '/aboutMe',
      name: 'AboutMe',
      component: AboutMe
    },
	
	{
      path: '/emotion',
      name: 'Emotion',
      component: Emotion
    },
	{
      path: '/success/:id',
      name: 'SuccessDetail',
      component: SuccessDetail
    },
	{
      path: '/sign/:for',
      name: 'Sign',
      component: Sign
    },
	{
      path: '*',
      name: 'Home',
      component: Home
    }
	
  ]
})
