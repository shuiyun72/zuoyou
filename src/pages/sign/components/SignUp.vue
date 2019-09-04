<template> 
	<div> 
		<div class="title"> 
			账号登录
		</div>
		<div class="input_in">
			<input type="text" v-model="admin" placeholder="请输入账号"/>
		</div>
		<div class="input_in">
			<input type="password" v-model="pwd" placeholder="请输入密码"/>
		</div>
		<div class="is_account is_find"> 
			<label><input type="checkbox" @change="isRememberPwd" v-model="checkboxVal" value="xuanzhong"/>记住密码</label>
			<router-link to="/sign/SignReg" tag="span">找回密码</router-link>
		</div>
		<div class="button">登录</div>
		<div class="is_account is_sign"> 
			还没会员账号？<router-link to="/sign/signIn" tag="span">立即注册</router-link>
		</div>
	</div>
</template>

<script> 

export default{
	name:"SignIn",
	data () {
		return {
			admin:"",
			pwd:"",
			checkboxVal:"",
			numMath:0
		}
	},
	created () {
		let that = this
		that.numMath = Math.floor(Math.random()*100000)
		if(that.numMath<10000){
			that.numMath = 22335
		}
		console.log(that.numMath)
		
	
	},
	methods:{
		signIn () {
			this.$emit("changelogin","signIn")
		},
		isRememberPwd () {
			if(this.checkboxVal){
				localStorage.name = this.admin
				localStorage.user = this.pwd
			}else{
				localStorage.name = ""
				localStorage.user = ""
			}
		},
		signUp () {
			if(this.admin != "" && this.pwd != ""){
				
				//sessionStorage.userin = 
			
			}
		}
	},
	mounted () {
		if(localStorage.name){
			this.checkboxVal = true
			this.admin = localStorage.name
			this.pwd = localStorage.user
		}
	}
}

</script>
<style lang="stylus" scoped>
@import '~styles/variables' 
.title
	color:$pColor
	text-align:center
	padding:1.25rem 0 
	font-weight:bold
.input_in
	padding:0 2rem 1.1rem
	text-align:center
	input
		padding:0.4rem 0 0.4rem 1.5rem
		width:17rem
		background-color:$inputBg
		border:1px solid #ccc
		border-radius:0.25rem
		outline:none
.button
	background-color:$pColor
	width:18.6rem
	margin:0 auto
	font-size:1.25rem
	font-weight:bold
	color:#fff
	text-align:center
	padding:.25rem 0
	border-radius:0.25rem
	cursor:pointer
.is_account
	font-size:0.85rem
	text-align:right
	span
		color:$pColor
		cursor:pointer
.is_find
	padding:0rem 2.5rem 0.75rem
	display:flex
	justify-content:space-between
	label
		input
			position:relative
			top:0.125rem
			margin-right:0.125rem
.is_sign
	padding:1rem 2.5rem
</style>