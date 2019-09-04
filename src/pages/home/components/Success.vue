<template> 
	<div> 
		<div class="headline"> 
			<img src="static/images/index/title1.png" alt="成功案例" title="成功案例" />
		</div>
		<div class="home_success_content"> 
			<div class="succ_left">
				<div class="photo t1"><img src="static/images/index/t1.jpg" alt="" title="" /></div>
				<div class="photo t2"><img src="static/images/index/t2.jpg" alt="" title="" /></div>
				<div class="photo t3"><img src="static/images/index/t3.jpg" alt="" title="" /></div>
			</div>
			<div class="succ_right"> 
				<router-link :to="'success/'+item.id" tag="div"  class="item_show pointer" v-for="item in successData" :key="item.id"> 
					<span class="title_img">{{item.id}}</span>
					<div class="item_content"> 
						<div class="title" :title="'点击查看'+item.title+'详细案例'">{{item.title}}</div>
						<div class="item_text">{{item.explain}}</div>
					</div>
				</router-link>
				<router-link to="success" tag="div" class="btn_more pointer" title="点击查看更多成功案例">点击查看更多</router-link>
			</div>
		</div>
	</div>
</template>
<script> 
import 'js/jquery.js';
import axios from 'axios'
export default{
	name:"Success",
	data () {
		return {
			classTurn:[[0,1,2],[2,0,1],[1,2,0]],
			classTurnNum:2,
			successData:[],
			isSetUbterval: null
		}
	},
	methods:{
		successPhoto:function(){
			this.classTurnNum++;
			if(this.classTurnNum>2){
				this.classTurnNum=0
			}
			$(".succ_left .photo").eq(this.classTurn[this.classTurnNum][0]).removeClass("t1").addClass("t2").css("z-index","1");
			$(".succ_left .photo").eq(this.classTurn[this.classTurnNum][1]).removeClass("t2").addClass("t3").css("z-index","2");
			$(".succ_left .photo").eq(this.classTurn[this.classTurnNum][2]).removeClass("t3").addClass("t1").css("z-index","0");
			$(".succ_left .photo").addClass("animation_opacity");
			setTimeout(function(){
				$(".succ_left .photo").removeClass("animation_opacity");
			},1000)
		},
		getDataiSuccess:function(){
			axios.get('static/mock/successHome.json',{
				
			}).then(this.handleGetSucc)
			
		},
		handleGetSucc:function(res){
			res = res.data;
			this.successData = res.data;
		} 
	},
	mounted () {
		this.isSetUbterval = setInterval(this.successPhoto,4600);
		this.getDataiSuccess();
		this.classTurnNum = 2;
	},
	beforeDestroy () {
		clearInterval(this.isSetUbterval);
		this.isSetUbterval=null
	}
	
}
</script>
<style lang="stylus" scoped>
@import '~styles/variables.styl';
.home_success_content
	width:75rem
	display:flex
	margin:0 auto
	.succ_left
		width:33.125rem
		height:38.75rem
		position:relative
		.photo
			position:absolute;
			border:0.25rem solid #fff;
			transition:1s all;
			img
				width:100%
		.t1
			width:16.25rem
			top:0.375rem
			right:8.25rem

		.t2
			width:12.5rem
			top:9.375rem
			right:20.25rem

		.t3
			width:19.375rem
			top:18.125rem
			right:2.5rem

		.animation_opacity
			animation:ddd 1s;

		@keyframes ddd{
			0%{
				opacity:1;
			}
			50%{
				opacity:0.4;
			}
			100%{
				opacity:1;
			}
		}
	.succ_right
		width: 41.25rem
		.item_show
			padding:20px 0 30px
			display:flex
			.title_img
				width: 5.125rem
				height: 4.375rem
				background: url(/static/images/index/bgtitle.png)
				line-height: 4.375rem
				text-align: center
				font-size: 1.125rem
				color: #fff
				margin:0 1.875rem
			.item_content
				width:32rem
				.title
					font-size: 1.125rem
					margin-bottom: 0.375rem
					color: $black
				.item_text
					color:#999
		.btn_more
			width: 202px
			height: 50px
			margin: 0 auto
			border: 1px solid #666
			text-align: center
			line-height: 50px
			color: #333
			display: block
			border-radius: 25px
			margin-top:1.2rem
		.btn_more:hover
			box-shadow: 2px 2px 6px #666
</style>