function change(){
	$('.img').attr('src',"../images/icon/stars.png")
}
function hot(){
	$("#hot").toggleClass("actived",true);
	$("#menu").toggleClass("actived",false);
	$(".page-menu-food").css("display","none")
	$(".page-menu-food2").css("display","block")
}
function menu(){
	$("#hot").toggleClass("actived",false);
	$("#menu").toggleClass("actived",true);
	$(".page-menu-food").css("display","block")
	$(".page-menu-food2").css("display","none")
}
function back(){
	$("html,body").animate({scrollTop:0}, 500);
}
function register(){
	$("#login").toggleClass("actived",false);
	$("#register").toggleClass("actived",true);
	$("#login").css("color","#000")
	$("#register").css("color","#fff")
	$(".content-login").css("display","none")
	$(".content-register").css("display","block")
}
function login(){
	$("#login").toggleClass("actived",true);
	$("#register").toggleClass("actived",false);
	$("#login").css("color","#fff")
	$("#register").css("color","#000")
	$(".content-login").css("display","block")
	$(".content-register").css("display","none")
}
function previewImage(file)
{
  var div = document.getElementById('imghead');
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id=imghead>';
      var img = document.getElementById('imghead');
      var reader = new FileReader();
      reader.onload = function(evt){img.src = evt.target.result;}
      reader.readAsDataURL(file.files[0]);
  }
}

function branch(){
	$(".change-branch").css("display","block")
}
function job(){
	$(".change-job").css("display","block")
}
function password(){
	$(".change-password").css("display","block")
}
function closeBranch(){
	// $(".change-branch").css("display","none")
	document.getElementById("branch").style.display="none";
}
function closeJob(){
	document.getElementById("job").style.display="none";
}
function closePassword(){
	document.getElementById("password").style.display="none";
}

function doadd(res){
	var res = parseInt(res)
	res = res + 1;
	return res;
}
 
function doreduce(res){
	var res = parseInt(res);
	res = res - 1;
	return res;
}

function add(res){
	var a = res.id;
	a = "order" + a;
	var i = document.getElementById(a).value;
	var j = doadd(i)
	if(j >=2 ){
		document.getElementById(a).value  = 2
	}
	else{
		document.getElementById(a).value  = j
	}
	
}

function reduce(res){
	var a = res.id;
	a = "order" + a;
	var i = document.getElementById(a).value;
	var j = doreduce(i)
	if(j <= 1){
		document.getElementById(a).value = "1"
	}
	else{
		document.getElementById(a).value = j 
	}
	
}