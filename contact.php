<!DOCTYPE html>
<html>

<head>
    <title> 🎓 Registration Page 🎓</title>
    <link rel="stylesheet" href="contact css.css">
    <scrip defer src="script.js">
    </scrip>

</head>

<body background="image/form.jpg">


    <div class="fullbody">
        <div class="panel-heading text-center">
            <h1>
                <center>🎓 <br>
                  Registration Form</center>
            </h1>
        </div>
        <div class="panel-body">

            <form name="nform" action="connect.php" onsubmit="return validationForm()" method="post" >
                <center>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="text1" name="firstName">
                    </div>
                    <div id="text2"></div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="text2" name="lastName" />
                    </div>
                    <div id="text3"></div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div>
                            <label for="male" class="radio-inline"><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div id="email1"></div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="number" class="form-control" id="number" name="number" />
                        </div>
                        <div id="number1"></div>
                        <input type="submit" class="btn btn-primary" />

                </center>
            </form>

            </div>
        </div>

        <script src= "index.js"> </script>
</body>


</html>