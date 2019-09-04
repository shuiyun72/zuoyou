<template> 
	<div> 
		<div class="title">情感咨询流程</div>
		<div class="flowPath"> 
			<img src="static/images/index/flowPath.png" alt="" title="" />
		</div>
	</div>
</template>
<script>
export default{
	name:"Flow"
} 

</script>
<style lang="stylus" scoped> 
	@import '~styles/variables.styl';
.title
	font-size:1.875rem
	padding:2.5rem 0 1rem
	text-align: center
	color: $pColor
	font-weight:bold
.flowPath
	width:75rem
	margin:1rem auto 2rem
</style>