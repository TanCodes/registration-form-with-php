///////////////////////////////////////
function validation() {
  var user = document.getElementById("user").value;
  var pass = document.getElementById("pass").value;
  var conpass = document.getElementById("conpass").value;
  var mobile = document.getElementById("mobile").value;
  var email = document.getElementById("email").value;
  var error = 0;

  ////////////////////////////user/////////////////////////////////////////
  if (user == "") {
    document.getElementById("username").innerHTML = "PLEASE FILL THE USERNAME";
    error += 1;
    return false;
  }

  if (user.length <= 2 || user.length > 20) {
    error += 1;
    document.getElementById("username").innerHTML =
      "USERNAME LENGTH MUST BE BETWEEN 2 AND 20";
    return false;
  }

  if (!isNaN(user)) {
    error += 1;
    document.getElementById("username").innerHTML =
      "ONLY CHARACTERS ARE ALLOWED";
    return false;
  }
  //////////////////////////////password/////////////////////////////////////
  if (pass == "") {
    error += 1;
    document.getElementById("password1").innerHTML = "PLEASE FILL THE PASSWORD";
    return false;
  }

  if (pass.length <= 5 || pass.length > 20) {
    error += 1;
    document.getElementById("password1").innerHTML =
      "PASSWORD LENGTH MUST BE BETWEEN 5 AND 20";
    return false;
  }

  /////////////////////////user confirmpass////////////////////////////////
  if (pass != conpass) {
    error += 1;
    document.getElementById("conpass1").innerHTML = "PASSWORD IS NOT MATCHING";
    return false;
  }
  ///////////////////////////////confirpass////////////////////////////////////////////

  if (conpass == "") {
    error += 1;
    document.getElementById("conpass1").innerHTML =
      "PLEASE FILL THE CONFIRM PASSWORD";
    return false;
  }
  ////////////////////////////////mobile///////////////////////////////////////////
  if (mobile == "") {
    error += 1;
    document.getElementById("mobile1").innerHTML =
      "PLEASE FILL THE MOBILE NUMBER";
    return false;
  }

  if (isNaN(mobile)) {
    error += 1;
    document.getElementById("mobile1").innerHTML =
      "USER MUST INSERT DIGITS ONLY";
    return false;
  }

  if (mobile.length != 10) {
    error += 1;
    document.getElementById("mobile1").innerHTML = "INVALID MOBILE NUMBER";
    return false;
  }
  ///////////////////////////////email////////////////////////////////////////////
  if (email == "") {
    error += 1;
    document.getElementById("email1").innerHTML = "PLEASE FILL THE EMAIL";
    return false;
  }

  if (email.indexOf("@") <= 0) {
    error += 1;
    document.getElementById("email1").innerHTML = "@ POSITION INVALID";
    return false;
  }

  if (
    email.charAt(email.length - 4) != "." &&
    email.charAt(email.length - 3) != "."
  ) {
    error += 1;
    document.getElementById("email1").innerHTML = "INVALID EMAIL";
    return false;
  }
   else {
    swal({
      title: "Good job!",
      text: "You clicked the button!",
      icon: "success",
      button: "Aww yiss!",
    });
  }
}

