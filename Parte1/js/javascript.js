function valida_stock(){
  var stock = document.getElementById('stock').value; //obtengo el valor del campo stock
  if (stock == "") { //si no tiene nada escrito muestro un mensaje y return false
    document.getElementById('mensajito_stockvacio').innerHTML = "Debes escribir un nombre";
    return false;
  }else{
    document.getElementById('mensajito_stockvacio').innerHTML = ""; //hay algo escrito en el campo stock
    return true;
  }
}

function valida_item(){
  var item = document.getElementById('item').value;
  if (item == "") {
    document.getElementById('mensajito_itemvacio').innerHTML = "Debes escribir una cantidad";
    return false; //si no tiene nada escrito muestro un mensaje y return false
  }else{
    document.getElementById('mensajito_itemvacio').innerHTML = "";
    return true; //hay algo escrito en el campo item
  }
}

function valida_form(){
  if(valida_item() && valida_stock()){ //si existe algo  en item y stock, return true
    return true;
  }else{ //caso contrario, return false...
    return false;
  }
}