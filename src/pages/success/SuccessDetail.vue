<template> 
	<div> 
		<public-header :navselect="2"></public-header>
		<div class="success_bg">
			<div class="center1200 success_detail"> 
				<div class="left_side"> 
					<div class="nav"> 
						<router-link to="/">首页</router-link> &nbsp;》
						<router-link to="/success">成功案例</router-link> &nbsp;》
						详情
					</div>
					<div class="content"> 
						<div class="title">{{successData.atitle}}</div>
						<div class="content_center">
							<img :src="'/static/images/success/people/'+successData.asrc" :alt="successData.aname" :title="successData.aname" v-if="successData.asrc"/>
							<h3>姓名：{{successData.aname}}</h3>
							<h3>年龄：{{successData.aage}}</h3>
							<h3>职业：{{successData.awork}}</h3>
						</div>
						<p v-for="item in successP">{{item}}</p>
					</div>
				</div>
				<div class="right_side"> 
					<div class="right_bg right1"> 
						<div class="img_c">
							<img src="/static/images/success/right/zuoyou.png" alt="" title="" />
						</div>
						<div class="zixun">
							立即咨询
						</div>
					</div>
					<div class="right_bg right2"> 
						<div class="title"> 
							热门干货
						</div>
						<div class="img_c"> 
							<img src="/static/images/success/right/bookshow.png" alt="" title="" />
						</div>
					</div>
					<div class="right_bg right3">
						<div class="img_c"> 
							<img src="/static/images/success/right/ewm1.jpg" alt="" title="" />
						</div>
						<p>扫码了解情感详情</p>
						
					</div>
				</div>
			</div>
		</div>
		<public-footer></public-footer>
	</div>

</template>

<script> 
import PublicHeader from 'pages/public/Header'
import PublicFlow from 'pages/public/Flow'
import PublicFooter from 'pages/public/Footer'
import axios from 'axios'

export default{
	name:"SuccessDetail",
	data () {
		return {
			successData:[],
			successP:[],
			watchId:0
		}
	},
	methods:{
		postReqAjax () {
			this.watchId =this.$route.path.split("/")[2]
			let formdata = new FormData();
			formdata.append("aid",this.watchId)
			axios({
				method:'post',
				//url:"http://127.0.0.1/m_zuoyou/data/detailSucc.php?",
				url:"../static/data/detailSucc.php",
				data:formdata
			}).then(this.resAjax)
		},
		resAjax (res) {
			//console.log(res.data.data)
			this.successData = res.data.data[0]
			this.successP = this.successData.acontent.split("|")
		},
		handleClick (name) {
			this.watchShow = name
			this.successDataShow = this.successData[this.watchShow]
		} 
	},
	mounted () {
		this.postReqAjax();
	},
	components:{
		PublicHeader,
		PublicFlow,
		PublicFooter,
	}
}

</script>
<style lang="stylus" scoped> 
@import '~styles/variables'
.success_bg
	background-color:$succBg
	padding-top:1.25rem
	padding-bottom:2rem
	.success_detail
		display:flex
		justify-content:space-between
		.left_side
			width:52.5rem
			.nav
				height:4rem
				box-sizing:border-box
				line-height:4rem
				padding-left:1.75rem
				background-color:#fff
				margin-bottom:1.25rem
			.content
				background-color:#fff
				padding-top:1rem
				padding-bottom:2rem
				min-height:49.75rem
				.title
					text-align:center
					padding:.5rem
					font-size:1.5rem
				.content_center
					width:37.5rem
					margin:0 auto 1rem
					img
						width:100%
						margin-bottom:0.25rem
					h3
						font-size:1rem
				p
					padding:0 2rem
					text-indent: 2em
		.right_side
			width:21.25rem
			.right_bg
				background-color:#fff
				width:100%
			.img_c
				text-align:center
			.right1
				padding-top:2.875rem
				padding-bottom:2.5rem
				margin-bottom:1.4rem
				.zixun
					width:10.125rem
					text-align:center
					border:1px solid #999
					border-radius:1rem
					margin:2rem auto 0
					height:1.875rem
					line-height:1.875rem
					cursor:pointer
			.right2
				padding-top:0.875rem
				padding-bottom:1.5rem
				margin-bottom:0.2rem
				.title
					width:18.75rem
					margin:0 auto
					border-left:4px solid $pColor
					padding-left:0.25rem
					font-weight:bold
					margin-bottom:1.25rem
			.right3
				padding-top:0.875rem
				padding-bottom:1.5rem
				img
					margin:1rem
				p
					text-align:center
</style>