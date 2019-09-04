<template> 
	<div>
		<alert-fixed>
			<div class="alert_text">您还没有登录</div>
			<div class="login_btn"> 
				<router-link to="/sign/signUp">立即登录</router-link>
				<router-link to="/sign/signIn">立即注册</router-link>
			</div>
		</alert-fixed>
		<div class="footer"> 
			<ul class="footer_nav">
				<li v-for="item in navHeader.data" :key="item.nav" @click="handleClickRouter(item.url,item.nav)">{{item.name}}</li>
			</ul>
			<div class="footer_introduce">
				<div class="address">
					<p>公司电话：0371-632xxx86</p>
					<p>公司地址：郑州市xxxxxxxxxxx科技园</p>
				</div>
				<div class="safety"> 
					<div class="text_c">
						Copyright © 2015 左右*简单恋爱学 All Rights Reserved
					</div>
					<div class="text_c"> 
						豫ICP备1502xxx6号
					</div>
					
				</div>
				<div class="code"> 
					<div class="code_item"> 
						<img src="/static/images/public/ewmgw.jpg" alt="扫一扫关注微博" title="扫一扫关注微博" />
						<div class="text_c">扫一扫关注微博</div>
					</div>
					<div> 
						<img src="/static/images/public/ewmvideo.jpg" alt="关注公众号" title="关注公众号" />
						<div class="text_c">关注公众号</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</template>
<script>
import AlertFixed from 'pages/public/AlertFixed'
export default{
	name:"Footer",
	data () {
		return {
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
						nav:"4",
						name:"会员中心",
						url:"/user"
					},
					{
						nav:"6",
						name:"关于我们",
						url:"/aboutMe"
					}
				]
			},
		
		}
	},
	methods:{
		handleClickRouter (url,num) {
			this.$router.push(url);
			this.$bus.emit('change-nav', num );
		}
	},
	components:{
		AlertFixed
	}
} 

</script>
<style lang="stylus" scoped> 
@import '~styles/variables.styl'
.footer
	width:100%
	height:17.75rem
	background-color:$footerColor
	color:$c999
	p
		color:$c999
	.footer_nav
		padding:2.75rem 0 2.125rem
		width:34rem
		margin:0 auto
		display:flex
		li
			color:$c999
			width:6.75rem
			text-align:center
			cursor:pointer
	.footer_introduce
		width:75rem
		margin:0 auto
		display:flex
		.address
			padding:2rem 0 0 1rem
			min-width:20rem
		.safety
			border-left:1px solid #434343
			border-right:1px solid #434343
			padding:2rem 1.2rem 1.75rem
			margin:0 1.025rem
		.text_c
			text-align:center
			padding-bottom:0.125rem
		.code
			display:flex
			padding-top:0.125rem
			.code_item
				margin:0 2rem 0 1rem
</style>