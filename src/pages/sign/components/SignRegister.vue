<template> 
	<div class="border"> 
		<div class="title_options"> 
			<div class="welcome">重置密码</div>
		</div>
		<div class="table"> 
			<div class="item"> 
				<div class="name">手机号码：</div>
				<input type="text" placeholder="请输入手机号码" v-model="phone" />
			</div>
			<div class="item"> 
				<input type="number" placeholder="短信验证" v-model="msg"/>
				<div class="text_yzm">获取验证码</div>
			</div>
			<div class="submit_button">重置密码</div>
		</div>
	</div>
</template>

<script> 

export default{
	name:"SignIn",
	data () {
		return{
			phone:"",
			qq:"",
			pwd:"",
			rpwd:"",
			teacer:"",
			msg:""
		}
	},
	methods:{
		signUp () {
			this.$emit("changelogin","signUp")
		}
	}
}

</script>
<style lang="stylus" scoped>
@import '~styles/variables'
.border
	padding:0.5rem 1rem 2.5rem
	.title_options
		display:flex
		border-bottom:0.125rem solid #EBEBEB
		.welcome
			color:$pColor
			border-bottom:0.125rem solid $pColor
			padding:0 0.25rem 0.325rem
			position:relative
			top:0.125rem
			margin:0 1.25rem
		.is_login_up
			font-size:0.875rem
			padding-top:0.4rem
			margin-left:4rem
			span
				color:$pColor
				margin-left:1rem
				cursor:pointer
	.table
		padding-top:0.5rem
	.item
		display:flex
		padding:0.6875rem 0.75rem
		justify-content:space-between
		.name
			line-height:2.5rem
			padding-left:0.75rem
		input
			padding:0.5rem 0.75rem
			outline:none
			border: 1px solid #ccc
			border-radius:0.25rem
			width:11.875rem
			font-size:0.875rem
		.text_yzm
			border:1px solid $pColor
			color:$pColor
			border-radius:0.25rem
			line-height:2.2rem
			height:2.2rem
			padding:0 0.25rem
			cursor:pointer
	.submit_button
		height:2.5rem
		line-height:2.5rem
		font-weight:bold
		color:#fff
		background-color:$pColor
		text-align:center
		font-size:1.15rem
		margin:0.25rem 0.75rem 0 
		border-radius:0.25rem
		cursor:pointer
</style>