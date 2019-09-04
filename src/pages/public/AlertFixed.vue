<template> 
	<div>
		<div class="alert_fc" v-if="isAlertShow"></div>
		<div class="alert_fixed" v-if="isAlertShow">
			<div class="title"><span @click="closeAlert"></span></div>
			<div class="alert_content">
				<slot></slot>
			</div>
		</div>
	</div>
</template>
<script> 
export default{
	name:"AlterFixed",
	data () {
		return {
			isAlertShow:false
		}
	},
	methods:{
		closeAlert () {
			this.isAlertShow = false
		}
	}
}

</script>
<style lang="stylus" scoped>
@import '~styles/variables.styl'
.alert_fc
	position:fixed
	z-index:10
	width:100%
	height:100%
	background-color:#333
	opacity:0.3
	top:0
	left:0
	display:none
.alert_fixed
	position:fixed
	z-index:11
	top:50%
	left:50%
	border:0.125rem solid #ccc
	border-radius:0.375rem
	.title
		height:2.5rem
		background-color:$pColor
		min-width:20rem
		border-radius:0.375rem 0.375rem  0 0
		position:relative
		span
			width:2rem
			height:2rem
			background:url("/static/images/alert/closeFc.png") no-repeat center center
			display:block
			position:absolute
			right:0.25rem
			top:0.25rem
			cursor:pointer
.alert_content
	background-color:#FFF
	padding:0.75rem
</style>