<template> 
	<div> 
		<div class="banner"></div>
		<div class="center1200">
			<div class="nav">
				当前位置：
				<router-link to="/">首页</router-link>&nbsp; 》
				关于我们
			</div>
			<div class="about_title"><span>公司介绍</span></div>
			<div class="part1"> 
				<div class="img">
					<img src="static/images/aboutme/helpbg.jpg" alt="" title="" />
				</div>
				<div class="text">
简单恋爱公司成立于2016年9月，注册资本100万元，是一家专注于情感咨询与规划的情感咨询服务机构。总部及培训基地设立于郑州市高新区河南大学科技园（东区）成立以来，一直秉承“以人为本，尊重事实，真诚仁爱，专业专注”的服务理念。凭着自身强劲的企业实力，和优质的服务质量，以帮助万于名学员脱离单身，千余名学员挽回爱情。目前已发展成国内情感咨询与服务行业的品牌。
      目前设有收获爱情、挽回爱情、守护爱情和自身价值四大板块，设有视频授课 、电话辅导、直播教学、线下实战、人生规划等多个服务项目。所推出的音频节目以向社会传播正确的恋爱观信息，促进男性正确的收获爱情为己任。在各大FM平台上均获得强烈反响，在喜马拉雅FM上超过了1亿的收听量。在保持团队良性发展的同时，充分发挥互联网特性，增强吸引力、内容性，亲和力，力求打造成为专业的情感传播中心。 
				</div>
			</div>
			<div class="about_title"><span>企业文化</span></div>
			<div class="part2">
				<p>做更好的自己；尊重他人就是尊重自己；公司的事情就是自己的事情；</p>
				<p>俭以养德，勤以消忧；养成三心：真心，耐心，恒心。</p>
			</div>
			<div class="about_title"><span>公司风采</span></div>
			<div class="part3"> 
				<div class="item"> 
					<div class="img"><img src="static/images/aboutme/help01.jpg" alt="" title="" /></div>
					<div class="img"><img src="static/images/aboutme/help02.jpg" alt="" title="" /></div>
					<div class="img"><img src="static/images/aboutme/help03.jpg" alt="" title="" /></div>
				</div>
				<div class="item"> 
					<div class="img"><img src="static/images/aboutme/help04.jpg" alt="" title="" /></div>
					<div class="img"><img src="static/images/aboutme/help05.jpg" alt="" title="" /></div>
					<div class="img"><img src="static/images/aboutme/help06.jpg" alt="" title="" /></div>
				</div>
			</div>
			<div class="about_title"><span>联系我们</span></div>
			
		</div>
	</div>
</template>

<script> 
export default({
	name:"AboutPart1"
})
</script>

<style lang="stylus" scoped> 
@import '~styles/variables.styl'
.banner
	width:100%
	height:31.25rem
	background:url('/../static/images/aboutme/bannerhelp.jpg') no-repeat top center
.nav
	padding-top:1rem
.about_title
	border-bottom:0.125rem solid #ccc
	text-align:center
	margin-bottom:1.5rem
	padding-top:1rem
	padding-bottom:0.5rem
	span
		color:$pColor
		font-size:1.5rem
		border-bottom:0.125rem solid $pColor
		position:relative
		top:0.175rem
		padding:0 0.75rem 0.5rem
		transition:0.6s all
		cursor:pointer
.about_title span:hover
	padding:0 12.75rem 0.5rem
.part1
	display:flex
	.img
		padding-left:2rem
	.text
		background-color:$succBg
		margin-top:9rem
		padding:2rem
.part2
	p
		text-align:center
.part3
	.item
		display:flex
		justify-content:space-between
		padding-bottom:0.9rem
		.img
			align-self:center
			
</style>