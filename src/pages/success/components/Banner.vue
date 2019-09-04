<template> 
	<div class="success_banner"> 
		<img v-for="(item,index) in bannerSrc" :src="'static/images/success/banner/suc'+item+'.jpg'" :class="['suc'+item,{active:index==activeShow}]" :key="item" @mouseover="mouseoverImg" @mouseleave="mouseleaveImg"/>
	</div>
</template>
<script> 
export default{
	name:"Banner",
	data () {
		return {
			bannerSrc:[],
			activeShow:-1,
			activeShowTimer:null
		}
	},
	methods:{
		componentBannerSrc () {
			var ArrayL = []
			for(let i = 1;i<=31;i++){
				ArrayL.push(i)
			}
			ArrayL.splice(4,1)
			this.bannerSrc = ArrayL
		},
		activeMath () {
			this.activeShow = Math.floor(Math.random()*30)
		},
		mouseoverImg () {
			clearInterval(this.activeShowTimer)
			this.activeShowTimer = null
			this.activeShow = -1
		},
		mouseleaveImg () {
			if(!this.activeShowTimer){
				this.activeShowTimer = setInterval(this.activeMath,1500)
			}
		}
	},
	mounted () {
		this.componentBannerSrc()
		this.activeShow = Math.floor(Math.random()*30)
		this.activeShowTimer = setInterval(this.activeMath,1500)
	},
	destroyed () {
		clearInterval(this.activeShowTimer)
		this.activeShowTimer = null
	}
}

</script>
<style lang="stylus" scoped> 
	@import '~styles/variables'
.success_banner
	width:100%
	height:31.25rem
	position:relative
	overflow:hidden
	.suc1
		top:0px
		margin-left:-960px
	.suc2
		top:0px
		margin-left:-768px
	.suc3
		top:0px
		margin-left:-652px
	.suc4
		top:0px
		margin-left:87px
	.suc6
		top:0px
		margin-left:461px
	.suc7
		top:0px
		margin-left:778px
	.suc8
		top:0px
		margin-left:-446px
	.suc9
		top:0px
		margin-left:-298px
	.suc10
		top:0px
		margin-left:-172px
	.suc11
		top:0px
		margin-left:176px
	.suc12
		top:101px
		margin-left:90px
	.suc13
		top:115px
		margin-left:-446px
	.suc14
		top:100px
		margin-left:288px
	.suc15
		top:170px
		margin-left:-768px
	.suc16
		top:176px
		margin-left:-294px
	.suc17
		top:170px
		margin-left:-195px
	.suc18
		top:196px
		margin-left:602px
	.suc19
		top:234px
		margin-left:91px
	.suc20
		top:234px
		margin-left:195px
	.suc21
		top:196px
		margin-left:461px
	.suc22
		top:286px
		margin-left:-960px
	.suc23
		top:308px
		margin-left:778px
	.suc24
		top:337px
		margin-left:-446px
	.suc25
		top:362px
		margin-left:-195px
	.suc26
		top:362px
		margin-left:-98px
	.suc27
		top:0px
		margin-left:324px
	.suc28
		top:380px
		margin-left:-653px
	.suc29
		top:406px
		margin-left:156px
	.suc30
		top:426px
		margin-left:600px
	.suc31
		top:403px
		margin-left:413px
.success_banner img
	position:absolute
	left:50%
	cursor:pointer
	transition:.4s all
	transform:scale(1)
	opacity:0.5

.success_banner img:hover,.success_banner img.active
	transform:scale(1.05)
	z-index:2
	opacity:1
</style>