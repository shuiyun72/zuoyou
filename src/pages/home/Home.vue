<template> 
	<div> 
		<public-header :navselect="0"></public-header> 
		<home-banner></home-banner>
		<home-nav></home-nav>
		<home-success></home-success>
		<home-teacher></home-teacher>
		<home-course></home-course>
		<public-flow></public-flow>
		<public-footer></public-footer>
	</div>
</template>
<script> 
import PublicHeader from 'pages/public/Header'
import PublicFlow from 'pages/public/Flow'
import PublicFooter from 'pages/public/Footer'
import HomeBanner from './components/Banner'
import HomeNav from './components/Nav'
import HomeSuccess from './components/Success'
import HomeTeacher from './components/Teacher'
import HomeCourse from './components/Course'

export default{
	name:"Home",
	components:{
		PublicHeader,
		PublicFlow,
		PublicFooter,
		HomeBanner,
		HomeNav,
		HomeSuccess,
		HomeTeacher,
		HomeCourse
	}
}
</script>
<style lang="stylus" socped> 
.headline
	display:flex
	flex-flow:row nowrap
	justify-content:center
	padding:2rem 0 1.25rem 
</style>