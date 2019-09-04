<template> 
	<div :class="{home_banner:isBannerTop}" class="home_swiper">
	  <swiper :options="swiperOption" >
		<swiper-slide v-for="item of swiperList" :key="item.id">
			<img class="swiper-img swiper_img_position" :src="item.imgUrl"/>
		</swiper-slide>
		<div class="swiper-pagination"  slot="pagination"></div>
	  </swiper>
	</div>
</template>
<script> 

export default {
    name: 'carrousel',
    data() {
      return {
        swiperOption:{
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				//type: 'fraction',
				//type : 'progressbar',
				//type : 'custom',
			},
			loop:true,
			autoplay: {
				delay: 3000,
				stopOnLastSlide: false,
				disableOnInteraction: false
			},
		},
		swiperList:[
			{
				id:'001',
				imgUrl:'./static/images/index/lunbo1.jpg'
			},{
				id:'002',
				imgUrl:'./static/images/index/lunbo2.jpg'
			}
			,{
				id:'003',
				imgUrl:'./static/images/index/lunbo3.jpg'
			}
			,{
				id:'004',
				imgUrl:'./static/images/index/lunbo4.jpg'
			}
		],
		screenWidth: document.body.clientWidth,   //   屏幕宽度/2
		isBannerTop:false
	  }
    },
	mounted () {
      const that = this
      window.onresize = () => {
        return (() => {
          window.screenWidth = document.body.clientWidth
          that.screenWidth = window.screenWidth
        })()
      }
	 
    },
	methods:{
		
	}
  }

</script>
<style lang="stylus" scoped> 
.home_swiper>>>.swiper-pagination-bullet
	width: 1rem;
	height: 1rem
.home_banner
	padding-top:4rem
</style>