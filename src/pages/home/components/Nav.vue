<template> 
	<div class="home_nav"> 
		<div class="home_nav_centent"> 
			<div class="home_icon_nav" v-for="(item,index) in icons" :key="item.num" @click="handleClickRouterNav(index)">
				<img :src="'static/images/index/'+item.src" :alt="item.title" :title="item.title" />
				<div class="title">{{item.title}}</div>
			</div>
		</div>
	</div>
</template>
<script> 
export default{
	name:"Nav",
	data:function(){
		return {
			icons:[
				{
					num:"1",
					src:"homeIcon1.png",
					title:"魅力提升",
					url:"/emotion/1"
				},
				{
					num:"2",
					src:"homeIcon2.png",
					title:"快速脱单",
					url:"/emotion/2"
				},
				{
					num:"3",
					src:"homeIcon3.png",
					title:"感情挽回",
					url:"/emotion/3"
				},
				{
					num:"4",
					src:"homeIcon4.png",
					title:"人生规划",
					url:"/emotion/4"
				}
			]
		}
	},
	methods:{
		handleClickRouterNav (num) {
			this.$router.push(this.icons[num].url)
			this.$bus.emit('change-nav', 1 );
		}
	}

}

</script>
<style lang="stylus" scoped>
@import '~styles/variables.styl';
.home_nav
	width:100%
	background-color:$bgColor
	.home_nav_centent
		padding:2.375rem 0
		width:75rem
		margin:0 auto
		display:flex
		flex-flow:row nowrap
		justify-content:center
		.home_icon_nav
			text-align:center
			margin:0 6rem
			cursor:pointer
			.title
				color: $pColor
				font-size: 1.5rem
				padding-top:0.1rem
			img
				transition:.6s all
		.home_icon_nav:hover img
				transform:rotateY(-180deg)

			
</style>