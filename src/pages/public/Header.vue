<template> 
	<div class="header">
		<div class="header_top">
			<router-link tag="div" to="/" class="left">
				<img src="/static/images/public/logo.png"/>
			</router-link>
			<div class="contacts">本网站为测试网站，如有侵权请联系QQ:3139629573</div>
			<div class="right">  
				<router-link to="/sign/signUp" class="login_btn" >登录</router-link>
				<span class="login_span">|</span>
				<router-link to="/sign/signIn" class="login_btn">注册</router-link>
			</div>
		</div>
		<div class="header_nav " :class="{header_nav_fix:isHeaderFix}">
			<div class="header_content">
				<ul>
					<li v-for="(item,index) in navHeader.data" :key="item.nav" :class="{hover_li_nav:headerNav == item.nav}" @click="handleClickRouter(index)">{{item.name}}</li>
				</ul>
			</div>
		</div>
		<public-side-nav :isshow="showReturn" @returntop="isReturnTop"></public-side-nav>
	</div>
</template>
<script>
import PublicSideNav from 'pages/public/SideNav'
export default{
	name:"Header",
	data:function(){
		return{
			navHeader:{
				data:[
					{
						nav:"0",
						name:"首页",
						url:"/"
					},
					{
						nav:"1",
						name:"情感服务",
						url:"/emotion"
					},
					{
						nav:"2",
						name:"成功案例",
						url:"/success"
					},
					
					{
						nav:"3",
						name:"会员中心",
						url:"/user"
					},
					{
						nav:"4",
						name:"关于我们",
						url:"/aboutMe"
					}
				]
			},
			headerNav:0,     //选中的某一个导航类
			isHeaderFix:false,    //导航是否定位
			timerNav:null,
			scrollTop:0,
			showReturn:0,
			returnTopTimer:null
		}
	},
	props:['navselect'],
	components:{
		PublicSideNav
	},
	methods:{
		isReturnTop () {
			var that = this
			if(!that.returnTopTimer){
				that.returnTopTimer = setInterval(function(){
					that.scrollTop -= 10
					document.documentElement.scrollTop = that.scrollTop
					if(that.scrollTop <= 0){
						clearInterval(that.returnTopTimer)
						that.returnTopTimer = null
					}
				},20)
			}
			
		},
		handleScroll () {
			this.scrollTop = document.documentElement.scrollTop;
			if( this.scrollTop >78){
				this.isHeaderFix = true
			}else{
				this.isHeaderFix = false
			}
			
			this.showReturn = (this.scrollTop-100)/100
			if(this.showReturn >1){
				this.showReturn = 1
			}
			if(this.showReturn <0){
				this.showReturn = 0
			}
		},
		handleClickRouter (num) {
			this.headerNav = num
			this.$router.push(this.navHeader.data[num].url)
		}
	},
	mounted:function(){
		this.scrollTop = document.documentElement.scrollTop;
		if(this.scrollTop > 78){
			this.isHeaderFix = true
		}
		window.addEventListener('scroll',this.handleScroll);
		this.headerNav = this.navselect
	},
	destroyed () {
		window.removeEventListener('scroll',this.handleScroll)
	}
} 

</script>
<style lang="stylus" scoped> 
	@import '~styles/variables.styl'
.header
	width:100%
	position:relative;
	padding-bottom:3.625rem
	.header_top
		width:75rem
		margin:0 auto
		display:flex
		flex-flow:row nowrap
		justify-content:space-between
		color:$pColor
	.contacts
		padding-top:2rem
	.header_top .left
		padding:0.625rem 0
		cursor:pointer
	
	.header_top .right
		padding:2.5rem 0 0.625rem;
		.login_span
			position:relative
			top:-0.1rem
			margin:0 0.2rem
		.login_btn
			color:$pColor;
			font-size:1.1rem
	
		
	
	
	.header_nav 
		height:3.625rem
		width:100%
		position:absolute
		left:0
		right:0
		z-index:99
		top:4.75rem
		background-color:$pColor
		.header_content
			width:75rem
			margin:0 auto
			ul
				width:56.2rem
				display:flex
				li
					width:6.75rem
					text-align:center
					line-height:3.625rem
					color:$textColor
					cursor:pointer
					font-weight:bold
				li:hover
					color:$pColor
					background-color:$textColor
				.hover_li_nav
					color:$pColor
					background-color:$bgColor
	.header_nav_fix
		position:fixed
		top:0  
</style>