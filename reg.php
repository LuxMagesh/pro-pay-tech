<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pro Pay - User Registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="Style.css" rel="stylesheet">
        <script src=js/jquery-1.2.1.min.js></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap');
        </style>
    </head>
    <body>
        <?  include './inc/signup.php'; ?>
        <form class="" action="signup.php" method="post">
            <div class="container">
                <div class="inner">
                    <div class="title">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="content">
                            <div class="txt">
                                <input type="text" name="f_name" pattern="[A-Za-z]*" class="validate" value="" id="f_name" placeholder="   Firstname"/>
                                <span id="c1" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="l_name" pattern="[A-Za-z]*" class="validate" value="" id="l_name" placeholder="    Lastname"/>
                                <span id="c2" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="reg_date" id="reg_date" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="    Date of Birth">
                                <span id="c4" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="text" name="id_num" value="" id="id_num" placeholder="   ID Number"/>
                                <span id="c3" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="email" name="email" value="" id="email" placeholder="   Email"/>
                                <span id="c4" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <div class="txt1">
                                <input type="mobile" name="mobile" value="" id="mobile" placeholder="   mobile"/>
                                <span id="c5" class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <select class="form-select txt1 form-select-lg mb-3" id="language" name="language" required="" class=" browser-default" aria-label=".form-select-lg example">
                                <option selected>Language</option>
                                <option value="English">English</option>
                                <option value="Afrikaans">Afrikaans</option>
                                <option value="isiZulu">isiZulu</option>
                                <option value="Sesotho">Sesotho</option>
                                <option value="Setswana">Setswana</option>
                                <option value="French">French</option>
                                <option value="German">German</option>
                                <option value="Chinesse">Chinesse</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Belgian">Belgian </option>
                                <option value="Hindi">Hindi </option>
                                <option value="Spanish">Spanish </option>
                                <option value="Russian">Russian </option>
                                <option value="Arabic">Arabic </option>
                            </select>
                            <select class="form-select txt1 form-select-lg mb-3" name="interests[]" size="3" multiple="multiple" required="" class=" browser-default" id="multiple" style="display: block ;" multiple  aria-label="multiple .form-select-lg example">
                                <option value="Reading">Reading</option>
                                <option value="Martial_Arts">Martial_Arts</option>
                                <option value="Jewelry_Making">Jewelry_Making</option>
                                <option value="Woodworking">Woodworking</option>
                                <option value="Gardening">Gardening</option>
                                <option value="Video_Games">Video_Games</option>
                                <option value="Fishing">Fishing</option>
                                <option value="Team_Sports">Team_Sports</option>
                            </select>
                           
                            <div class="col-md-12" style="margin-top: 2%">
                                <!-- <div class="row">  
                                    <div class="col-md-6" style="align-items: center!important;">
                                        <input type="checkbox" name="ck1" id="ckbox1"/>
                                    </div>   
                                    <div class="col-md-6">
                                        <span>I agree to the Term and Service</span>
                                    </div>   
                                </div>      -->
                            </div>
                            <div class="btnsub">
                                <div class="Register">
                                    <input type="submit" name="submit" id="btnsub" value="Register"/>
                                </div>
                                <div class="Cancel">
                                    <input type="button" name="cancel" id="btnsub" value="Cancel" onclick="reset();"/>
                                </div>                  
                            </div>
                    </div>       
                </div>
            </div>
        </form>
        <script>
            function reset(){
                document.getElementById("f_name").value="";
                document.getElementById("l_name").value="";
                document.getElementById("id_num").value="";
                document.getElementById("reg_date").value="    Date of Birth";
                document.getElementById("email").value="";
                document.getElementById("mobile").value="";
                document.getElementById("multiple").value="";
                )
        </script>

        <script>
            function showDiv(){
                document.getElementById('multiple').style.display = "block";
                )
        </script>
    </body>

</html>