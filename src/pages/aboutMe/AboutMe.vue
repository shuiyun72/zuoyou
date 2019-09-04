<template> 
	<div> 
		<public-header :navselect="4"></public-header>
		<about-part1></about-part1>
		<about-map></about-map>
		<public-footer></public-footer>
	</div>

</template>

<script> 
import PublicHeader from 'pages/public/Header'
import PublicFooter from 'pages/public/Footer'
import AboutPart1 from './components/AboutPart1'
import AboutMap from './components/AboutMap'

export default{
	name:"AboutMe",
	components:{
		PublicHeader,
		PublicFooter,
		AboutPart1,
		AboutMap

	}
}

</script>
<style lang="stylus" scoped> 



</style>