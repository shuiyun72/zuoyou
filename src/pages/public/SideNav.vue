<template> 
	<div class="side_nav" :class="{side_nav_pb:isshow<=0}">
		<div class="nav_item">
			<div class="bg_img"><img src="/static/images/sidenav/side1.png" alt="" title="" /></div>
			<div class="bg_text">客服咨询</div>
		</div>
		<div class="nav_item">
			<div class="bg_img"><img src="/static/images/sidenav/side2.png" /></div>
			<div class="bg_text"><a href="http://www.zuoyouedu.com/home/Baoming" target="_blank">立即报名</a></div>
		</div>
		<div class="nav_item">
			<div class="bg_img"><img src="/static/images/sidenav/side3.png" /></div>
			<div class="bg_text">周边分享</div>
		</div>
		<div class="nav_item">
			<div class="bg_img"><img src="/static/images/sidenav/side4.png" /></div>
			<div class="bg_text">在线视听</div>
		</div>
		<div class="nav_item nav_item_none" :style="{opacity:isshow}" v-show="isshow>0" @click="returnTop">
			<div class="bg_img nav_item_show"><img src="/static/images/sidenav/side5.png" /></div>
		</div>
	</div>
</template>
<script>
export default{
	name:"SideNav",
	props:['isshow'],
	data:function(){
		return{
			
		}
	},
	methods:{
		returnTop () {
			this.$emit("returntop")
		}
	}
} 

</script>
<style lang="stylus" scoped> 
	@import '~styles/variables.styl'
.side_nav_pb
	padding-bottom:3.75rem
.side_nav
	position:fixed
	bottom:3rem
	right:2rem
	z-index:99
	.nav_item_none
		opacity:0
	.nav_item
		width:3.125rem
		height:3.125rem
		border:0.0625rem solid #fff
		background-color:$pColor
		border-radius:0.375rem
		position:relative
		margin-bottom:0.5rem
		cursor:pointer
		.bg_img
			position:absolute
			opacity:1
			transition:opacity .2s
		.bg_text
			position:absolute
			text-align:center
			padding:0.3rem 0 0 0.25rem
			line-height:1.2rem
			color:#fff
			font-weight:bold
			letter-spacing:3px
			opacity:0
			transition:opacity .2s
			user-select:none
			a
				color:#fff
	.nav_item:hover .bg_img
		opacity:0
	.nav_item:hover .bg_text
		opacity:1
	.nav_item .nav_item_show
		opacity:1
	.nav_item:hover .nav_item_show
		opacity:1
</style>