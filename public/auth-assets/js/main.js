
function togglePass() {
    var x = document.getElementById("login-form-password");
    var l1 = document.getElementById("Layer_1");
    var l2 = document.getElementById("Layer_2");
    if (x.type === "password") {
      x.type = "text";
      l1.setAttribute('hidden', true);
      l2.removeAttribute('hidden');
    } else {
      x.type = "password";
      l1.removeAttribute('hidden');
      l2.setAttribute('hidden', true);
    }
  }