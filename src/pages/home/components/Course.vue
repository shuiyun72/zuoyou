<template> 
	<div> 
		<div class="headline"> 
			<img src="static/images/index/title6.png" alt="课程介绍" title="课程介绍" />
		</div>
		<div class="yingxiao"> 
			<div class="pic_show" :class="{pic_show_big:item.showBig}" v-for="item in yingXiao" :key="item.id">
				<img :src="'static/images/index/yingxiao/'+item.imgUrl" :alt="item.name" :title="item.name" />
				<div class="pic_text">
					<p>{{item.name}}</p>
					<span>{{item.intro}}</span>
					<em>QQ:{{item.qq}}</em>
				</div>
			</div>
		</div>
	</div>
</template>
<script> 
import axios from 'axios';

export default{
	name:"Course",
	data:function(){
		return {
			yingXiao:[]
		}
	},
	methods:{
		getDataiSuccess:function(){
			axios.get('static/mock/yingXiao.json',{
				
			}).then(this.handleGetSucc)
			
		},
		handleGetSucc:function(res){
			res = res.data;
			this.yingXiao = res.data;
		} 
	},
	mounted () {
		this.getDataiSuccess()
	}
}
</script>
<style lang="stylus" scoped> 
.yingxiao
	position:relative
	width:75rem
	margin:0 auto
	height:27.875rem
	
	.pic_show
		position:absolute
		cursor:pointer
		transition:.6s all
		opacity:.5
		overflow:hidden
		.pic_text
			background: url(/static/images/index/yingxiao/zxbg.png) no-repeat center bottom
			width:100%
			height:112px
			position:absolute
			bottom:-112px
			left:0
			color:#fd467a
			transition:.6s all
			p
				text-align:center
				color:#fd467a
				padding-top:30px
				font-size:18px
			span
				display:block
				text-align:center
				font-size:14px
			em
				display:block
				text-align:center
				font-size:14px
	.pic_show_big 
		.pic_text 
			p
				padding-top:16px
				font-size:22px
			span
				font-size:16px
			em
				font-size:16px
	.pic_show:hover
		opacity:1
		.pic_text
			bottom:0px
	.pic_show:nth-child(1)
		width:160px
		height:240px
		top:0
		left:0
	.pic_show:nth-child(2)
		width:206px
		height:240px
		top:0
		left:164px
	.pic_show:nth-child(3)
		width:222px
		height:286px
		top:0
		left:374px
	.pic_show:nth-child(4)
		width:170px
		height:228px
		top:0
		left:600px
	.pic_show:nth-child(5)
		width:208px
		height:261px
		top:0
		left:774px
	.pic_show:nth-child(6)
		width:216px
		height:232px
		top:0
		left:986px
	.pic_show:nth-child(7)
		width:212px
		height:200px
		top:244px
		left:0
	.pic_show:nth-child(8)
		width:154px
		height:200px
		top:244px
		left:216px
	.pic_show:nth-child(9)
		width:222px
		height:154px
		top:290px
		left:374px
	.pic_show:nth-child(10)
		width:170px
		height:212px
		top:232px
		left:600px
	.pic_show:nth-child(11)
		width:209px
		height:179px
		top:265px
		left:774px
	.pic_show:nth-child(12)
		width:216px
		height:207px
		top:236px
		left:987px

</style>