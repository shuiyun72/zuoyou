<template> 
	<div class="center1200">
		<div class="title">普通班6大特色服务</div>
		<div class="img_transition"> 
			<div class="item" v-for="item in 6"> 
				<div class="text"></div>
				<div class="img"></div>
			</div>
		</div>
	</div>

</template>
<script> 
export default{
	name:"Classify2"
}

</script>
<style lang="stylus" scoped> 
.title
	font-size:1.875rem
	text-align:center
	padding:1.875rem
.img_transition
	width:100%
	height:33rem
	background:url('/static/images/emotion/classifyBg.jpg') no-repeat center top
	position:relative
	.item
		width:12rem
		height:12rem
		position:absolute
		top:0
		left:0
		overflow:hidden
		border-radius:50%
		.text,.img
			width:100%
			height:100%
			background-repeat:no-repeat
			position:absolute
			top:0
			left:0
			transition: 0.6s all
			
			cursor:pointer
			border-radius:50%
			overflow:hidden
		.text
			z-index:2
			opacity:1
			transform: rotate3d(0,0,1,0deg)
		.img
			z-index:1
			opacity:0
			transform: rotate3d(0,0,1,-180deg)
	.item:hover
		.text
			z-index:1
			opacity:0
			transform: rotate3d(0,0,1,180deg)
		.img
			z-index:0
			opacity:1
			transform: rotate3d(0,0,1,0deg)
	.item:nth-child(1)
		top:2.875rem
		left:13rem
		.img
			background-image:url('/static/images/emotion/classify1.png')
		.text
			background-image:url('/static/images/emotion/classify1i.png')
	.item:nth-child(2)
		top:2.875rem
		left:38rem
		.img
			background-image:url('/static/images/emotion/classify2.png')
		.text
			background-image:url('/static/images/emotion/classify2i.png')
	.item:nth-child(3)
		top:2.875rem
		left:63rem
		.img
			background-image:url('/static/images/emotion/classify3.png')
		.text
			background-image:url('/static/images/emotion/classify3i.png')
	.item:nth-child(4)
		top:17.25rem
		left:0rem
		.img
			background-image:url('/static/images/emotion/classify4.png')
		.text
			background-image:url('/static/images/emotion/classify4i.png')
	.item:nth-child(5)
		top:17.25rem
		left:25rem
		.img
			background-image:url('/static/images/emotion/classify5.png')
		.text
			background-image:url('/static/images/emotion/classify5i.png')
	.item:nth-child(6)
		top:17.25rem
		left:50rem
		.img
			background-image:url('/static/images/emotion/classify6.png')
		.text
			background-image:url('/static/images/emotion/classify6i.png')
		
</style>