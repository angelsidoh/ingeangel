<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=UTF-8">

<script type="text/javascript" src=".js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src=".js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/three.min.js"></script>
<script type="text/javascript" src="js/jquery.onebook3d-2.33.js?2"></script> -->


<script>

$(function(){

	var src1 = [
		'img/IMGS/1 PORTADA.png', 
		'img/IMGS/1.1.png', 
        'img/IMGS/1.2.png', 
        'img/IMGS/1.3.png', 
        'img/IMGS/1.4.png', 
        'img/IMGS/1.5.png', 
        'img/IMGS/1.6.png', 
        'img/IMGS/1.7.png', 
        'img/IMGS/1.8.png', 
        'img/IMGS/1.9.png', 
        'img/IMGS/1.10.png', 
        'img/IMGS/2 CONTRAPORTADA.png', 
		];	

		
		

	
	$('#photobook').onebook(src1,{skin:['light','dark'], bgDark:'#56998c url(./i/bg.jpg)',bgLight:'#d97f6f url(./i/bg2.jpg)', border:0, cesh:false});
		
	
	$('.links a:eq(0)').click(function(){
		 $.onebook(src4,{language:'it'});
		 return false;
	});
	
	
  	$('.links a:eq(1)').click(function(){
		 $.onebook(src4,{border:100, skin:'light', pageColor:'#60baaa', bgLight:'#56998c url(./i/bg.jpg)', cesh:false});
		 return false;
	});	

	$('.links a:eq(2)').click(function(){
		 $.onebook(src3,{slope:1, skin:'dark', startPage:4, border:10, flip:'basic', cesh:false});
		 return false;
	});	
	

});


</script>





 

<div class="containerpdf">
<div id="photobook"></div> 
</div>
	









