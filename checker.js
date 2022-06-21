// Para las páginas con formulario

function checkForm() {
  // Variables de error
  var msg = "Por favor, ingrese:\n";
  var error = false;

  // Obtener el valor de los resultados
  var mar = document.getElementById("mar").value;
  var desc = document.getElementById("desc").value;
  var or = document.getElementById("or").value;
  var pre = document.getElementById("pre").value;
  var cat = document.getElementById("cat").value;

  // Corroborar resultados individualmente

  // Corroborar que la marca no este vacia, ni exceda de 25 caracteres
  if (mar == "") {
    error = true;
    msg += "Marca\n";
  }

  if (mar.length > 25) {
    error = true;
    msg += "La marca no puede exceder de 25 carácteres\n";
  }

  // Corroborar que la descripcion no este vacia, ni exceda de 100 caracteres
  if (desc == "") {
    error = true;
    msg += "Descripción\n";
  }

  if (desc.length > 100) {
    error = true;
    msg += "La descripción no puede exceder de 100 carácteres\n";
  }

  // Corroborar que el origen no esté vacío, y que sea un origen válido
  if (or == "") {
    error = true;
    msg += "Origen\n";
  } else if (or != "China" && or != "USA" && or != "Alemania") {
    error = true;
    msg += "El origen debe ser un valor válido de la lista\n";
  }

  // Corroborar que el precio no venga vacío, y que sea un número
  if (pre == "") {
    error = true;
    msg += "Precio\n";
  }

  if (isNaN(pre)) {
    error = true;
    msg += "Precio (debe ser numérico)\n";
  }
  // También corroborar que no exceda de 10 carácteres
  if (pre.length > 10) {
    error = true;
    msg += "El precio no puede tener mas de 10 carácteres de largo\n";
  }

  // Corroborar que la categoría no sea la default, y que llegue un número
  if (cat == "0") {
    error = true;
    msg += "Categoría\n";
  }

  if (isNaN(cat)) {
    error = true;
    msg += "Categoría inválida\n";
  }

  // Si alguno de todos estos casos es true, entonces mostrar error hasta que se solucione
  if (error) {
    alert(msg);
  }
  // Si no, enviar
  else {
    document.getElementById("Form").submit();
  }
}

// Para las paginas con formulario de ID

function checkId() {
  // Variables de error
  var msg = "Por favor, ingrese:\n";
  var error = false;

  // Obtener resultados
  var idForm = document.getElementById("idForm").value;

  // Corroborar si está vacía
  if (idForm == "") {
    error = true;
    msg += "ID\n";
  }

  // Corroborar que sea un número
  if (isNaN(idForm)) {
    error = true;
    msg += "ID (debe ser numérico)\n";
  }

  // Si alguna de estas dos condiciones no se cumple entonces mostrar un error
  if (error) {
    alert(msg);
  }
  // Si no, enviar
  else {
    document.getElementById("Form").submit();
  }
}

// Para la página de borrar

function checkDelId() {
  // Variables de error
  var msg = "Por favor, ingrese:\n";
  var error = false;

  // Obtener valor de la ID
  var idForm = document.getElementById("idForm").value;

  // Corroborar si está vacía
  if (idForm == "") {
    error = true;
    msg += "ID\n";
  }

  // Corroborar que sea un número
  if (isNaN(idForm)) {
    error = true;
    msg += "ID (debe ser numérico)\n";
  }

  // Si alguna de estas dos condiciones no se cumple entonces mostrar un error
  if (error) {
    alert(msg);
  }

  // En caso de que se cumplan, preguntar que se desea hacer
  else {
    var confirm = window.confirm(
      "¿Está seguro que desea eliminar este registro?"
    );
    // Si confirma, borrar el registro
    if (confirm) {
      document.getElementById("Form").submit();
    }
    // Si no, volver a la página para eliminar otro registro
    else {
      getBack("EliminarProd.php");
    }
  }
}

// Para las páginas de categorías

function checkCatAct() {
  // Variables de error
  var msg = "Por favor, ingrese";
  var error = false;

  // Obtener valor de la categoria
  var nomC = document.getElementById("nomC").value;

  // Corroborar si está vacía o si viene por default
  if (nomC == "0" || nomC == "") {
    error = true;
    msg += " una categoría";
  }

  // Corroborar si excede 25 carácteres
  if (nomC.length > 25) {
    error = true;
    msg += " una categoría menor a 25 carácteres";
  }

  // Si alguna de estas dos condiciones no se cumple entonces mostrar un error
  if (error) {
    alert(msg);
  }
  // Si no, enviar
  else {
    document.getElementById("Form").submit();
  }
}

// Volver hacia una url
function getBack(url) {
  window.location = url;
}

// Checkers

// Checker de letras, carácteres y números

function checkInput(evt) {
  var key = evt.keyCode;

  switch (key) {
    // Todos los tildes, las Ñ, punto, guión y coma
    case 225:
      return true;
      break;
    case 233:
      return true;
      break;
    case 237:
      return true;
      break;
    case 243:
      return true;
      break;
    case 250:
      return true;
      break;
    case 193:
      return true;
      break;
    case 201:
      return true;
      break;
    case 205:
      return true;
      break;
    case 218:
      return true;
      break;
    case 211:
      return true;
      break;
    case 46:
      return true;
      break;
    case 45:
      return true;
      break;
    case 44:
      return true;
      break;
    case 241:
      return true;
      break;
    case 209:
      return true;
      break;
  }

  // Letras en mayúscula y espacio
  if ((key >= "65" && key <= "90") || key == "32") {
    return true;
  }
  // Letras en minúscula
  else if (key >= "97" && key <= "122") {
    return true;
  }
  // Números
  else if (key >= "48" && key <= "57") {
    return true;
  } else {
    return false;
  }
}

// Checker de números

function checkNumber(evt) {
  var key = evt.keyCode;
  if (key >= "48" && key <= "57") {
    return true;
  } else {
    return false;
  }
}

// ¿Cómo funcionan?
// En caso de que el keyCode de la tecla presionada
// coincida con uno de los switchs o ifs se devuelve true
// entonces la tecla entra el input, en caso de ser una tecla no admitida
// como un paréntesis () se devuelve false, entonces no entra en el input
