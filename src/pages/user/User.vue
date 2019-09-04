<template> 
	<div> 
		<public-header :navselect="3"></public-header>
		<div class="user">
			<div class="center1200 user_content">
				<div class="left_side"> 
					<div class="photo"> 
						<div class="img"> 
							<img src="http://www.zuoyouedu.com/Uploads/user/2018-08-31/5b88bc1a7f38e.jpg" alt="" title="" />
						</div>
						<div class="name">水云</div>
					</div>
					<div class="left_item"> 
						个人档案
					</div>
					<div class="left_item"> 
						我的订单
					</div>
				</div>
				<div class="right_side"> 
					<div class="title">个人档案</div>
					<div class="table">
						<div class="row"> 
							<div class="row_item">
								<span class="weight">姓名：</span>枫
							</div>
							<div class="row_item">
								<span class="weight">昵名：</span>水云
							</div>
						</div>
						<div class="row"> 
							<div class="row_item">
								<span class="weight">姓名：</span>枫
							</div>
							<div class="row_item">
								<span class="weight">昵名：</span>水云
							</div>
						</div>
						<div class="row"> 
							<div class="row_item">
								<span class="weight">姓名：</span>枫
							</div>
							<div class="row_item">
								<span class="weight">昵名：</span>水云
							</div>
						</div>
						<div class="row"> 
							<div class="row_item">
								<span class="weight">姓名：</span>枫
							</div>
							<div class="row_item">
								<span class="weight">昵名：</span>水云
							</div>
						</div>
						<div class="row"> 
							<div class="row_item">
								<span class="weight">姓名：</span>枫
							</div>
							<div class="row_item">
								<span class="weight">昵名：</span>水云
							</div>
						</div>
						<div class="row_one"> 
							<div class="weight">情感留言：</div>
							<p>dsadsadsads</p>
						</div>
						<div class="row_one"> 
							<div class="weight">想要解决的问题：</div>
							<p>dsad大萨达撒多撒sad撒多撒sadsads</p>
						</div>
						<div class="row_one"> 
							<div class="weight">提升能力：</div>
							<p>dsadsad是程序从许昌许持续性 本程序重新想编程序想vsads</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<public-footer></public-footer>
	</div>

</template>

<script> 
import PublicHeader from 'pages/public/Header'
import PublicFooter from 'pages/public/Footer'

export default{
	name:"User",
	components:{
		PublicHeader,
		PublicFooter,
	},
	created () {
		sessionStorage.ssss = "121212";
		console.log(sessionStorage.ssss)
	}
}

</script>
<style lang="stylus" scoped> 
@import '~styles/variables'
.user
	background-color:$succBg
	margin-top:0.125rem
	padding-bottom:1rem
.user_content
	display:flex
	justify-content:space-between
	.left_side
		width:14.375rem
		.photo
			background-color:$userBg
			padding:1.5rem 0 1rem
			.img
				width:5.125rem
				border-radius:1rem
				overflow:hidden
				margin:0 auto
				img
					width:100%
			.name
				text-align:center
				font-weight:bold
				padding-top:0.25rem
		.left_item
			background-color:#fff
			height:4rem
			line-height:4rem
			text-align:center
			font-weight:bold
			margin-bottom:1px
			cursor:pointer
	.right_side
		width:60rem
		.title
			height:4.5rem
			line-height:4.5rem
			background-color:$userBg
			color:$pColor
			font-weight:bold
			font-size:1.125rem
			padding-left:2.5rem
		.table
			background-color:#fff
			padding-top:0.25rem
			padding-bottom:2rem
			.row
				display:flex
				margin-top:2px
				.row_item
					width:26rem
					padding-left:2.75rem
					height:2.875rem
					line-height:2.875rem
					span
						font-weight:bold
			.row_one
				padding-left:2.5rem
				padding-bottom:0.5rem
				.weight
					font-weight:bold
</style>