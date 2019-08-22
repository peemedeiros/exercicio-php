var $menu = document.getElementById("menu_mobile");

function display(){
	
	var $mm = document.getElementById("mm");
	
	if($mm.style.display=='none' || $mm.style.display==''){
		
		$mm.style.display="block";
		$menu.style="background-color:#ffffff;";
		
	}else{
		
		$mm.style.display="none";
		$menu.style="background-color:#252525;";
		
	}
}


$menu.addEventListener("click", display);