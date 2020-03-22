jQuery(document).ready(function() {
    jQuery('#loading2').fadeOut(1000,'swing');
});

var total=0;
		function oc(){
	var ele=document.getElementById('maths');
	var mat=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('dld');
	var dld=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('ece');
	var ece=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('mpmc');
	var mpmc=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('dsa');
	var dsa=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('oops');
	var oops=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('dldlab');
	var dldlab=ele.options[ele.selectedIndex].value;

	var ele=document.getElementById('dsalab');
	var dsalab=ele.options[ele.selectedIndex].value;

	total=(mat*4) + (dld*3)+ (ece*3)+ (mpmc*4)+ (dsa*3)+ (oops*3)+ (dldlab*1.5)+ (dsalab*1.5);
	document.getElementById('Total').innerHTML=total;
	
	}
	
	function show(){
		
		document.getElementById("result").style.display="block";
		var x=total/23;
		document.getElementById("Final").innerHTML=x.toPrecision(3);
	}


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}