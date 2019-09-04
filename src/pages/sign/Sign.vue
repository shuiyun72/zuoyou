<template> 
	<div> 
		<public-header :navselect="-1"></public-header>
		<div class="sign">
			<div class="login_border" :style="{top:topLogin}"> 
				<div class="border_top"></div>
				<div class="border_cen" >
					<sign-in v-if="showSign == 1 " @changelogin="showLogin"></sign-in>
					<sign-up v-if="showSign == 2" @changelogin="showLogin"></sign-up>
					<sign-reg v-if="showSign == 3" @changelogin="showLogin"></sign-reg>
				</div>
				<div class="border_bot"></div>
			</div>
		</div>
		<public-footer></public-footer>
	</div>

</template>

<script> 
import PublicHeader from 'pages/public/Header'
import PublicFooter from 'pages/public/Footer'
import SignUp from './components/SignUp'
import SignIn from './components/SignIn'
import SignReg from './components/SignRegister'

export default{
	name:"Sign",
	data () {
		return {
			showSign:1,
			topLogin:''
		}
	},
	methods:{
		showLogin (el) {
			if(el == "signIn"){
				this.showSign = 1
				this.$router.push("/sign/"+el)
			}
			if(el == "signUp"){
				this.showSign = 2
				this.$router.push("/sign/"+el)
			}
		},
		routerChange(){
			var pathUrl = this.$route.path.split("/")[2]
			if(pathUrl == "signIn"){
				this.showSign = 1
				this.topLogin = '4.5rem'
			}
			if(pathUrl == "signUp"){
				this.showSign = 2
				this.topLogin = '9rem'
			}
			if(pathUrl == "SignReg"){
				this.showSign = 3
				this.topLogin = '9rem'
			}
		}
	},
	components:{
		PublicHeader,
		PublicFooter,
		SignUp,
		SignIn,
		SignReg
		
	},
	created() {
        this.routerChange()
	},
	watch:{
		'$route':'routerChange'
	}
}

</script>
<style lang="stylus" scoped> 
.sign
	background:url('/static/images/login/loginbg.jpg')
	height:53.75rem
	position:relative
	
	.login_border
		width:23rem
		position:absolute
		left:50%
		margin-left:10rem
		.border_top
			height:1rem
			background:url('/static/images/login/logintop.jpg') no-repeat
		.border_bot
			height:1rem
			background:url('/static/images/login/loginbot.jpg') no-repeat
		.border_cen
			background:url('/static/images/login/logincen.jpg') repeat-y


</style>