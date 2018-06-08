<button onclick ="ejecutarAJAX()"> Hazme click </button>
<div id="info"></div>
<script type="text/javascript">
	function ejecutarAJAX(){
		//var ajaxRequest;
		//if(window.XMLHTTpRequest){
		//	ajaxRequest = new XMLHttpRequest();
		//}else{
		//	ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		//}
		var ajaxRequest = new XMLHttpRequest();
		ajaxRequest.onreadystatechange = function(){
			if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
				document.getElementById("info").innerHTML = ajaxRequest.responseText;
			}
		}
		ajaxRequest.open("GET","documento.txt",true);
		ajaxRequest.send();
	}

</script>