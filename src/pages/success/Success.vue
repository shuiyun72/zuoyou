<template> 
	<div> 
		<public-header :navselect="2"></public-header>
		<success-banner></success-banner>
		<success-list></success-list>
		<public-flow></public-flow>
		<public-footer></public-footer>
	</div>

</template>

<script> 
import PublicHeader from 'pages/public/Header'
import PublicFlow from 'pages/public/Flow'
import PublicFooter from 'pages/public/Footer'
import SuccessBanner from './components/Banner'
import SuccessList from './components/List'

export default{
	name:"Success",
	components:{
		PublicHeader,
		PublicFlow,
		PublicFooter,
		SuccessBanner,
		SuccessList
	}
}

</script>
<style lang="stylus" scoped> 



</style>