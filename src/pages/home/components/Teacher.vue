<template> 
	<div>
		<div class="headline"> 
			<img src="static/images/index/title2.png" alt="导师简介" title="导师简介" />
		</div>
		<div class="teacher_content"> 
			<div class="teacher_bg"></div>
			<div class="teacher_detail">
				<div class="left_big_img">
					<img src="static/images/index/zuoyou.jpg" alt="" title="" />
				</div>
				<div class="right"> 
					<div class="title">{{teacherMsg.title}}</div>
					<p v-for="(item,index) in teacherMsg.content" :key="index">{{item}}</p>
					<div class="pingjia">学员评价：</div>
					<p>{{teacherMsg.pingjia}}</p>
					<div class="small_img"> 
						<div class="img_item">
							<img :src="'static/images/index/'+teacherMsg.img" :alt="teacherMsg.title" :title="teacherMsg.title" />
							<div class="img_p">{{teacherMsg.title}}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
var teacherMsg = {
	"res":"1",
	"data":[
		{
			"id":"1",
			"title":"左右老师",
			"img":"teacher1.jpg",
			"content":[
				"原名芦沛然，职业与人生规划咨询师，中国人力资源与社会保障部就业培训中心技术指导中心认证讲师，国家二级心理咨询师，一级婚姻家庭咨询师。",
				"“简单恋爱”品牌创始人，简单恋爱学首席讲师。",
				"他是擅长从女性视角解读两性关系的情感专家，也是在我国开展男性情感类教育的先驱者，致力于帮助男性建立男性魅力吸引女孩、挽回爱情、改善婚姻质量、解决婚姻矛盾等。",
				"自创“恋爱与婚姻系列”“ 恋爱百分百系列” “人生规划轨迹”等课程。 著有《简单恋爱学》。",
				"“简单恋爱学”声音专辑在喜马拉雅点击量累积破亿次。"
			],
			"pingjia":"左右老师的课程诙谐幽默，关键是他的为人很让人钦佩。他具有创造性思维，并具有一专多能的知识体系，能够帮助学员作出正确决策以及正确的指引。听他的课，不仅收获幸福，更重要的是培养自信，扩大人脉圈。"
		}
	]
} 
export default{
	name:"Teacher",
	data:function(){
		return {
			teacherMsg:teacherMsg.data[0]
		}
	}
}

</script>
<style lang="stylus" scoped> 
@import '~styles/variables.styl';
.teacher_content
	width:100%
	background-color:$bgColor
	padding-top:23.875rem
	position:relative
	.teacher_bg
		width:100%
		height:14rem
		background-color:$pColor
		border-bottom:4px solid #333
	.teacher_detail
		position:absolute
		width:75rem
		left:50%
		margin-left:-37.5rem
		bottom:4px
		display:flex
		.left_big_img
			width:29.25rem
			img
				position:relative
				right:5.375rem
		.right
			width:45.25rem
			p
				text-indent: 2em
			.title
				font-size: 1.5rem
				color: $pColor
				font-weight: 100
				padding-bottom: 0.25rem
			.small_img
				padding-top:0.75rem
				.img_item
					width:11.25rem
					img
						width:100%
					.img_p
						text-align:center
						color:$textColor
						padding-top:0.25rem
</style>