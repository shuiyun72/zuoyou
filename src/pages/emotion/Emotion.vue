<template> 
	<div> 
		<public-header :navselect="1"></public-header> 
		<div class="banner"></div>
		<emotion-classifyl 
			:classifyTitle="this.classifyTitle" 
			:classify1="this.classify1"
		></emotion-classifyl>
		<emotion-classify2></emotion-classify2>
		<public-flow></public-flow>
		<public-footer></public-footer>
	</div>
</template>
<script> 
import axios from 'axios'
import PublicHeader from 'pages/public/Header'
import PublicFlow from 'pages/public/Flow'
import PublicFooter from 'pages/public/Footer'
import EmotionClassifyl from './components/Classify1'
import EmotionClassify2 from './components/Classify2'


export default{
	name:"Emotion",
	components:{
		PublicHeader,
		PublicFlow,
		PublicFooter,
		EmotionClassifyl,
		EmotionClassify2,
		
	},
	data () {
		return {
			classifyTitle:[],
			classify1:[]
		}
	},
	methods:{
		getClassify (){
			axios.get('static/mock/emotion.json').then(this.handleGetClassify)
		},
		handleGetClassify (res){
			var res = res.data
			if(res.res == 1){
				this.classifyTitle = res.data.classifyTitle
				this.classify1 = res.data.classify1
			}else{
				console.log("网络错误")
			}
			
		}
	},
	mounted () {
		this.getClassify()
	}
}
</script>
<style lang="stylus" scoped> 
.banner
	background:url(/../static/images/emotion/redeembg.jpg) no-repeat center center 
	height:31.25rem
</style>