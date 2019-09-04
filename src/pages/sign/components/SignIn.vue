<template> 
	<div class="border"> 
		<div class="title_options"> 
			<div class="welcome">欢迎注册</div>
			<div class="is_login_up"> 
				已注册<span @click="signUp">直接登录</span>
			</div>
		</div>
		<div class="table"> 
			<div class="item"> 
				<div class="name">账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</div>
				<input type="text" placeholder="请输入手机号码" v-model="phone" />
			</div>
			<div class="item"> 
				<div class="name">Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q：</div>
				<input type="number" placeholder="请输入QQ号码" v-model="qq"/>
			</div>
			<div class="item"> 
				<div class="name">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</div>
				<input type="password" placeholder="请输入密码" v-model="pwd"/>
			</div>
			<div class="item"> 
				<div class="name">确认密码：</div>
				<input type="password" placeholder="请确认输入密码" v-model="rpwd"/>
			</div>
			<div class="item"> 
				<div class="name">推荐老师：</div>
				<input type="text" placeholder="输入推荐老师（没有则不写）" v-model="teacer"/>
			</div>
			<div class="item"> 
				<input type="number" placeholder="短信验证" v-model="msg"/>
				<div class="text_yzm">获取验证码</div>
			</div>
			<div class="submit_button">立即注册</div>
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
	padding:0.5rem 1rem 0.5rem
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
		font-size:1.25rem
		margin:0.25rem 0.75rem 0 
		border-radius:0.25rem
		cursor:pointer
</style>