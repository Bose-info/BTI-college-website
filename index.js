function validationForm() {
    var name = document.forms["nform"]["firstName"].value;
    var namew = document.forms["nform"]["lastName"].value;
    var email = document.forms["nform"]["email"].value;
    var number = document.forms["nform"]["number"].value;
    if (name == null || name == "" || name.length < 3) {
        document.getElementById("text2").innerHTML = "<div class='error'> *invalid</div>";
        return false;
    }
    if (namew == null || namew == "" || namew.length < 3) {
        document.getElementById("text3").innerHTML = "<div class='error'> *invalid</div>";
        return false;
    }
    if (email == null || email == "") {
        document.getElementById("email1").innerHTML = "<div class='error'>*invalid</div>";
        return false;
    }
    if (number.length < 10 || number.length == "") {
        document.getElementById("number1").innerHTML = "<div class='error'> *invalid</div>";
        return false;
    }
    if (email.indexOf('@') <= 0) {
        document.getElementById("").innerHTML = "<div class='error'> @invalid</div>";
        return false;
    } else {
        alert("Thank You for Your Registration, Our college will Contact soon 😊☎");
        return true;
    }
}