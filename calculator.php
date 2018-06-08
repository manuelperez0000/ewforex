<form id="multiplicar">
  <input value="3.24" type="text" id="multiplicando"> X
  <input type="text" id="multiplicador"> =
  <input type="text" id="resultado">
  <button type="button" onclick="multiplicar()">Multiplicar</button>
</form>
<script>
	function multiplicar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m1*m2;
  document.getElementById("resultado").value = r;
}
</script>