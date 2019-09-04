<template> 
	<div class="center1200">
		<div class="success_title">
			<div v-for="(item,key,index) in successData" :key="index" @click="handleClick(key)" :class="{active:key==watchShow}">{{item[0].atitle}}</div>
		</div>
		<div class="success_list"> 
			<router-link :to="'/success/'+item.aid" tag="div" class="success_item" v-for="item in successDataShow"> 
				<div class="img"><img :src="'/static/images/success/people/'+item.asrc" :alt="item.aname" :title="item.aname" /></div>
				<div class="description"> 
					<div class="title">{{item.aname}}</div>
					<div class="text">
						{{item.acontent.split("|")[0]}}
						<span>查看详情</span>
					</div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script> 
import axios from 'axios'
export default{
	name:"List",
	data () {
		return {
			successData:{},
			watchShow:"aa1",
			successDataShow:[]
		}
	},
	methods:{
		postReqAjax () {
			axios.get('static/data/rendererSuccVue.php',
			).then(this.resAjax)
			/*axios.get('http://127.0.0.1/m_zuoyou/data/rendererSuccVue.php',
			).then(this.resAjax)*/
		},
		resAjax (res) {
			//console.log(res.data)
			this.successData = res.data.data
			this.successDataShow = this.successData[this.watchShow]
		},
		handleClick (name) {
			this.watchShow = name
			sessionStorage.successShow = name
			this.successDataShow = this.successData[this.watchShow]
		} 
	},
	mounted () {
		if(sessionStorage.successShow){
			this.watchShow = sessionStorage.successShow
		}
		this.postReqAjax();
	}
}

</script>
<style lang="stylus" scoped> 
	@import '~styles/variables'
.success_title
	display:flex
	padding-top:2rem
	border-bottom:2px solid #ccc
	div
		width:10.25rem
		margin:0 4rem
		height:3.5rem
		line-height:3.5rem
		font-size:1.5rem
		color:#666
		text-align:center
		border-bottom:2px solid #ccc
		position:relative
		top:2px
		cursor:pointer
	.active
		border-bottom:2px solid $pColor
		color:$pColor
.success_item
	display:flex
	justify-content:space-between
	padding:1rem 0
	cursor:pointer
	.img
		width:15rem
		img
			width:100%
	.description
		width:58.5rem
		.title
			font-size:1.5rem
			line-height:2rem
			padding:1.2rem 0 0.8rem
		.text
			span
				color:$green
</style>