<template> 
	<div class="center1200">
		<h2 class="emotion_title">您的烦恼我们都懂</h2>
		<template v-for="(itemall,index) in classifyTitle"> 
			<div class="flex"> 
				<img v-for="item in itemall" :key="item.id" :src="'static/images/emotion/'+item.src" :alt="item.title" :title="item.title" />
			</div>
		</template>
		<div class="down_show"> 
			<img src="static/images/emotion/down.png" alt="" title="" @click="scrollTo"/>
		</div>
		<div class="classify1_border">
			<div class="border item_hide" v-for="item in classify1" :class="item.class"> 
				<div class="text"> 
					<div class="title">{{item.title}}</div>
					<div class="item_p"> 
						<p v-for="(itemp,index) in item.text" :key="index">{{itemp}}</p>
					</div>
				</div>
				<div class="img"> 
					<img :src="'static/images/emotion/'+item.src" alt="" title="" />
				</div>
			</div>
		</div>
	</div>
</template>
<script> 
export default{
	name:"Classify",
	props:{
		classifyTitle:Array,
		classify1:Array  
	},
	data () {
		return {
			scrollTopEm:0,
		}
	},
	methods:{
		handleScrollEmotion () {
			this.scrollTopEm = document.documentElement.scrollTop
			this.isScrollTopEm()
		},
		isScrollTopEm () {
			if(this.scrollTopEm > 200){
				$(".classify1_border .border").eq(0).removeClass("item_hide")
			}
			if(this.scrollTopEm > 800){
				$(".classify1_border .border").eq(1).removeClass("item_hide")
			}
			if(this.scrollTopEm > 1400){
				$(".classify1_border .border").eq(2).removeClass("item_hide")
			}
			if(this.scrollTopEm > 2000){
				$(".classify1_border .border").eq(3).removeClass("item_hide")
				window.removeEventListener('scroll',this.handleScrollEmotion)
			}
		},
		scrollTo () {
			$('html, body').animate({scrollTop: 3390}, 900)
		}
	},
	mounted () {
		this.scrollTopEm = document.documentElement.scrollTop
		setTimeout(this.isScrollTopEm,500)
		window.addEventListener('scroll',this.handleScrollEmotion);
	},
	destroyed () {
		window.removeEventListener('scroll',this.handleScrollEmotion)
	}
}

</script>
<style lang="stylus" scoped> 

@import '~styles/variables'
.classify1_border
	width:100%
	overflow:hidden
.emotion_title
	font-size:2rem
	text-align:center
	padding:2rem 0
.flex
	display:flex
	justify-content:space-between
	padding-bottom:1.75rem
	height:3.8125rem
.down_show
	position:relative
	height:7rem
	img
		position:absolute
		top: 1.75rem
		left: 50%
		margin-left: -1.3125rem
		animation: 2s main_r2_span linear infinite
		@keyframes main_r2_span 
			0% 
				top: 1.75rem
			50% 
				top: 3rem
			100%  
				top: 1.75rem
.border       /*4图组合*/
	width:71.875rem
	height:33.5rem
	margin: 0 auto 3.75rem
	border: 1px solid #bbb
	position: relative
	.img
		width:46.5rem
		height:25.875rem
		position:absolute
		top: 2.25rem
	.text
		width:28.5rem
		height:25.875rem
		position:absolute
		top: 2.25rem
		.item_p
			padding: 2.5rem 3.125rem 5.25rem
			background-color: $bgColor
			p
				font-size: 1rem
				color: #333;
				line-height: 3.125rem
		.title
			font-size: 1.25rem
			color: #333;
			padding-left: 3rem
			padding-bottom: 0.75rem
			font-weight:bold
.item_left
	.img
		left: -1.5625rem
		transition:1.2s left,opacity
		opacity:1
	.text
		right: -1.5625rem
		transition:1.2s right,opacity
		opacity:1
.item_left.item_hide
	.img
		left: -20.5625rem
		opacity:0
	.text
		right: -20.5625rem
		opacity:0
.item_right
	.img
		right: -1.5625rem
		transition:1.2s right,opacity
		opacity:1
	.text
		left: -1.5625rem
		transition:1.2s left,opacity
		opacity:1
.item_right.item_hide
	.img
		right: -20.5625rem
		opacity:0
	.text
		left: -20.5625rem
		opacity:0
</style>