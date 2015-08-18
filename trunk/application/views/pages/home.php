<style type="text/css" media="screen">
.pagination {
	width:200px;
	clear:both;
	padding-top:5px;
}

.pagination li {
	float:left;
	list-style:none;
}

.pagination li a {
	display:block;
	width:12px;
	height:0;
	padding-top:12px;
	background-image:url(/assets/default/img/pagination.png);
	background-position:0 0;
	float:left;
	overflow:hidden;
}

.pagination li.current a {
	background-position:0 -12px;
}
#slides .next,#slides .prev {
	position:relative;
	float:left;
	width:24px;
	height:43px;
	display:block;
	z-index:101;
	
}
#slides .prev {
	top:225px;
}
#slides .next {
	top:225px;
}
#slides {
margin-left:20px;
opacity:0.93;
}

.slides_container {
	width:900px;
	padding:5px;
	display:none;
	overflow:hidden;
	display:none;
	float:left;
	
}
.slides_container div {
	width:900px;
	height:570px;
	display:block;
}	
</style>
<script src="/assets/default/3rdparty/slides.min.jquery.js"></script>
<script src="/assets/default/3rdparty/fancybox/jquery.easing-1.3.pack.js"></script>
<div id="slides" class="ui-helper-clearfix">
	<a href="#" class="prev"><img src="/assets/default/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
	<div class="slides_container" >
		<div>
			<img width="900" src="/assets/default/img/home/Home-page01.png"></img>
		</div>
		<div>
			<img width="900" src="/assets/default/img/home/Home-page02a.png"></img>
		</div>
		<div>
			<img width="900" src="/assets/default/img/home/Home-page03a.png"></img>
		</div>
		<div>
			<img width="900" src="/assets/default/img/home/Home-page04b.png"></img>
		</div>
		<div>
			<img width="900" src="/assets/default/img/home/Home-page05a.png"></img>
		</div>
	</div>
	<a href="#" class="next"><img src="/assets/default/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
</div>
<script>
	$(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: '/assets/default/img/loading.gif',
			slideSpeed:1000,
			play: 8000,
			pause: 5000,
			hoverPause: true,
			slideEasing: "easeOutSine",
		});
		
		$(".pagination").addClass("ui-helper-clearfix");
	});
</script>
