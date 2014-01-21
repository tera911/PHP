<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script>
	$(function(){
		$('.label').each(function(i){
			$(this).children('.photo')
			.css('background-image','url(img/img'+ i+'.jpg)')
			.css('background-size','100%')
			.css('background-repeat','no-repeat');
			});
			$('.label').each(function(i){
				$(this).css('top',i*150 + 40+'px')
				.css('left',i %2 * 380 + 100+ 'px');
			});

			//File API 検証
			if(window.File){
				$('body').prepend("<p>File API OK</p>");
				$('#content')
				.bind('dragover', function(e){
					$(this).addClass('over');
					e.preventDefault();
					return false;
				})
				.bind('dragend', function(e){
					$(this).removeClass('over');
					e.preventDefault();
					return false;
				})
				.bind('drop', function(e){
					$(this).removeClass('over');
					e.preventDefault();
					return false;
				});
			}
		});
</script>
<style>
@font-face {
    font-family:"HuiFont29";
    src: local("HuiFont29"),
         local("HuiFont29"),
         url('font/HuiFont29.ttf') format('truetype');/* firefox, Opera, Chrome */
}
body{
	background-color:#FFF;
	font-family: "HuiFont29",Verdana,sans-serif;
}
#wrap{
	width:800px;
	margin:0 auto;
}
.boardframe{
	width:100%;
	height:600px;
	margin:50px 0;
	background-color:#cd853f;
/* 	box-shadow: 0 0 1px 1px rgba(87,67,56,0.8); */
	border: 1px solid rgba(87, 67, 56, 0.8);
}
#content{
	width:740px;
	height:540px;
	margin:30px;
	background-color:#228b22;
	float:left;
	position:relative;
	box-shadow: 0 0 1px 5px rgba(87,67,56,0.8); 
}
#content.over{
	box-shadow: 0 0 1px 5px rgba(126, 255, 152, 1); 
}
.label{
	position:absolute;
	width:200px;
	height:160px;
	color:#353535;
    background-color:#faf7e0;
  	box-shadow: 0px 0px 3px 1px rgba(50, 50, 50,0.25);
}
.label .photo{
	width:180px;
	height:125px;
	margin:5px 10px;
	float:left;
}
.label p{
	text-align:center;
}
[id^="photo_"] ::after {
	content: url("img/tape.png");
	position: absolute;
	top: -20px;
	left: 60px;
}
#photo_1{
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    -o-transform: rotate(-15deg);
}
#photo_2{
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
}
#photo_3{
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -o-transform: rotate(15deg);
}
</style>

<div id="wrap">
	<div class="boardframe">
		<div id="content">
			<div id="photo_1" class="label">
				<div class="photo"></div>
				<p>くどたん</p>
			</div>
			<div id="photo_2" class="label">
				<div class="photo"></div>
				<p>くどたん</p>
			</div>
			<div id="photo_3" class="label">
				<div class="photo"></div>
				<p>くどたん</p>
			</div>
		</div>
	</div>
</div>
