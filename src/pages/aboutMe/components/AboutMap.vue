<template> 
	<div class="center1200"> 
		<div style="width:1200px;height:550px;border:#ccc solid 1px;" id="aboutmap" ref="aboutmap"></div>
		<div class="map_div">
			<div class="address"> 
				<div class="icon"><img src="static/images/aboutme/address1.png" alt="" title="" /></div>
				<div class="p_con">
					<p>郑州市高新区</p>
					<p>河南省国家大学科技园</p>
				</div>
			</div>
			<div class="address"> 
				<div class="icon"><img src="static/images/aboutme/address2.png" alt="" title="" /></div>
				<div class="p">
					<p>76xxx59@163.com</p>
				</div>
			</div>
			<div class="address"> 
				<div class="icon"><img src="static/images/aboutme/address3.png" alt="" title="" /></div>
				<div class="p">
					<p>0371-63xxxxx6</p>
				</div>
			</div>
		
		</div>
	</div>
</template>

<script> 

var markerArr = [{title:"简单恋爱学",content:"电话：0371-63xxxxx6",point:"113.608591|34.801738",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
];
export default({
	name:"AboutMap",
	data () {
		return {
			markerArr:markerArr
		}
	},
	methods:{ 
		createMap () { 
			var map = new BMap.Map(this.$refs.aboutmap);//在百度地图容器中创建一个地图
			var point = new BMap.Point(113.610352,34.801975);//定义一个中心点坐标
			map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
			window.map = map;//将map变量存储在全局
		},
		setMapEvent () {
			map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
			map.enableScrollWheelZoom();//启用地图滚轮放大缩小
			map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
			map.enableKeyboard();//启用键盘上下左右键移动地图
		},
		addMapControl () {
			//向地图中添加缩放控件
			var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_SMALL});
			map.addControl(ctrl_nav);
				//向地图中添加缩略图控件
			var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
			map.addControl(ctrl_ove);
				//向地图中添加比例尺控件
			var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
			map.addControl(ctrl_sca);
			ctrl_sca.setUnit(BMAP_UNIT_IMPERIAL)
		},
		addMarker(){
			//标注点数组
			let that= this;
			for(var i=0;i<that.markerArr.length;i++){
				var json = that.markerArr[i];
				var p0 = json.point.split("|")[0];
				var p1 = json.point.split("|")[1];
				var point = new BMap.Point(p0,p1);
				var iconImg = that.createIcon(json.icon);
				var marker = new BMap.Marker(point,{icon:iconImg});
				var iw = that.createInfoWindow(i);
				var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
				marker.setLabel(label);
				map.addOverlay(marker);
				label.setStyle({
							borderColor:"#808080",
							color:"#333",
							cursor:"pointer"
				});
				
				(function(){
					var index = i;
					var _iw = that.createInfoWindow(i);
					var _marker = marker;
					_marker.addEventListener("click",function(){
						that.openInfoWindow(_iw);
					});
					_iw.addEventListener("open",function(){
						_marker.getLabel().hide();
					})
					_iw.addEventListener("close",function(){
						_marker.getLabel().show();
					})
					label.addEventListener("click",function(){
						_marker.openInfoWindow(_iw);
					})
					if(!!json.isOpen){
						label.hide();
						_marker.openInfoWindow(_iw);
					}
				})()
			}
		},
		createInfoWindow (i) {
			var json = this.markerArr[i];
			var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
			return iw;
		},
		createIcon(json){
			var icon = new BMap.Icon("http://www.zuoyouedu.com/Public/Home/img/help/iconding.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
			return icon;
		}
	},
	mounted(){
		this.createMap();//创建地图
        this.setMapEvent();//设置地图事件
        this.addMapControl();//向地图添加控件
		this.addMarker();//向地图中添加线
	}

})



</script>

<style lang="stylus" scoped>
.map_div
	display:flex
	justify-content:space-between
	padding:2rem 
	.address
		display:flex
		.icon
			padding-right:1rem
		.p:nth-child(2)
			line-height:3.3rem
			height:3.3rem
.share{
	width:0px;
	position:fixed;
	height:50px;
	bottom:164px;
	right:66px;
	overflow:hidden;
	transition:1s width;
}
.share_show{
	width:188px;
	border-radius:6px;
	background-color:#A7A7A7;
	padding-top:6px;
	padding-left:6px;
	position:relative;
}
.share_li{
	color:#000;
	display:inline-block;
	padding:14px;
	margin:0 auto;
	box-sizing:border-box;
	cursor:pointer;
	width:36px;
	height:36px;
	background:url('/Public/Home/img/public/share.png') no-repeat;
	margin-left:4px;
}
.share_li.share_li_active{
	background:url('/Public/Home/img/public/shareA.png') no-repeat;
}
.share_li:nth-child(1){
	background-position:-4px 1px;
}
.share_li:nth-child(2){
	background-position:-54px 1px;
}
.share_li:nth-child(3){
	background-position:-105px 1px;
}
.share_li:nth-child(4){
	background-position:-156px 1px;
}
.share_wx_evm{
	width:240px;
	height:270px;
	position:fixed;
	top:50%;
	left:50%;
	margin:-120px 0 0 -120px;
	background-color:#fff;
	box-shadow:2px 2px 10px #333;
	display:none;
	z-index:100;
}
.share_wx_evm img{
	display:block;
	width:90%;
	margin:0 auto;
	padding-top:5px;
}
.share_wx_evm h3{
	text-align:center;
	padding:6px 0;
	color:#FD467A;
	position:relative;
}
.share_wx_evm em.close{
	display:block;
	width:20px;
	height:20px;
	position:absolute;
	right:8px;
	top:8px;
	cursor:pointer;
	background:url(/Public/Home/img/public/close.png) no-repeat center center;
}
.share_san{
	position:absolute;
	width:8px;
	height:8px;
	right:-4px;
	background-color:#A7A7A7;
	top:16px;
	transform:rotate3d(0,0,1,-45deg);
}
.yanzheng_a a{
	margin-right:40px;
}
</style>