
function change(a){
	if(a==1){
		document.getElementById("total").placeholder = "Dolares";
	}else{
		document.getElementById("total").placeholder = "Soles";
	}
}
  function decimalAdjust(type, value, exp) {
    // Si el exp no está definido o es cero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Si el valor no es un número o el exp no es un entero...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  // Decimal round
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  // Decimal floor
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  // Decimal ceil
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }

/************************************************************************/  
  
  function calcular(){
	tipo = document.getElementById("tipo").value;
	if(tipo==1){
		m1 = 1/venta;
	}else{
		m1 = compra;
	}
	m2 = document.getElementById("monto").value;
	r = m1*m2;
	r = Math.round10(r, -3);
	document.getElementById("total").value = r;
}
