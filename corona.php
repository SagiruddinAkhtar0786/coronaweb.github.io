<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona Index</title>
   

    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>


</head>

<body onload="fetch()">
    <section class="first-sec">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_style p-3">
            <a class="navbar-brand pl-5 " href="corona.php">COVID 19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse text-align-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto pr-5 text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link" href="regis.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abtsymp">Symptomps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abtprev">prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abtcon">Contact</a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="main-header">
            <div class="row w-100 h-100 ">
                <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="left w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="image/corona.webp" alt="coronaimage" srcset="" width="300" height="300"
                            style="border-radius: 50%;">
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                    <div class="right  w-100 h-100 d-flex justify-content-center align-items-center">
                        <h1 class="h1">Lets fight together with this pandamic <span class="corona_rotate"><img
                                    src="image/c3.jpg" alt="" srcset="" width="50" height="50"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- corona update -->
    <section class="corona_update container-fluid">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">covid-19 live update of the world</h3>
        </div>
        <center>
       
        <div class="table-responsive table">   <!-- bootstrap class for table responsive -->
            <table class="table-bordered table-stripped text-center" id="tablevalue">
                <tr>
                    <th>Country</th>
                    <th>TotalConfirmed</th>
                    <th>TotalRecovered</th>
                    <th>TotalDeath</th>
                    <th>NewConfirmed</th>
                    <th>NewRecovered</th>
                    <th>newDeath</th>
                </tr>
            </table>
        </div>
         </center>
    </section>

    <!-- about page -->
    <div class="container-fluid sub-section pt-5 pb-5" id="about">
        <div class="section_header text-center mb-2 mt-2">
            <h1>About Covid-19</h1>
        </div>
        <div class="row p-4">
            <div class="col-lg-5 col-md-6 col-12 m-4">
                <img src="image/abtcorona1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>What is covid-19 Corona-Virus</h2>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness
                    and recover without requiring special treatment. Older people, and those with underlying medical
                    problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more
                    likely to develop serious illness.</p>
                <p>
                    The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an
                    infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette
                    (for example, by coughing into a flexed elbow).
                </p>
            </div>
        </div>
    </div>
    <!-- corona symptomps -->

    <div class="container-fluid pt-5 pb-5" id="abtsymp">
        <div class="section_header text-center mb-2 mt-2">
            <h1>Corona-Symptoms</h1>
        </div>
        <div class="container">
            <div class="row pt-3">
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/cough.jpg" class="img-fluid" width="120" height="120">
                        <figcaption>cough</figcaption>
                    </figure>


                </div>
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/fever.jpg" class="img-fluid" width="120" height="120">
                        <figcaption>fever</figcaption>
                    </figure>
                </div>
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/nose.jpg" class="img-fluid" width="80" height="80">
                        <figcaption>Nunny nose</figcaption>
                    </figure>
                </div>
            </div>
            <div class="row pt-5">
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/tired.jpg" class="img-fluid" width="120" height="120">
                        <figcaption>tiredness</figcaption>
                    </figure>


                </div>
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/cold.jpg" class="img-fluid" width="120" height="120">
                        <figcaption>cold</figcaption>
                    </figure>
                </div>
                <div class="colo-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="image/breath.png" class="img-fluid" width="120" height="120">
                        <figcaption>Difficult in breathing</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- prevention against corona virus -->
    <div class="container-fluid sub-section pt-5 pb-5" id="abtprev">
        <div class="section_header text-center mb-2 mt-2">
            <h1> 6 steps -Prevention against corona virus</h1>
        </div>

        <div class="container">
            <div class="row mt-5   ">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/hand.webp" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                Clean your hands often. Use soap and water, or an alcohol-based hand rub.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/distance.webp" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                Maintain a safe distance from anyone who is coughing or sneezing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/face.jpg" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/home.webp" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                Stay home if you feel unwell. and Don’t touch
                                your eyes, nose or mouth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/tv.webp" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                stay informed by watching news and follow the recommended practices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="image/fever1.jpg" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>
                                If you have a fever, cough and difficulty breathing, seek medical attention.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact us for four query -->

    <div class="container-fluid  pt-5 pb-5" id="abtcon">
        <div class="section_header text-center mb-2 mt-2">
            <h1> Contact us</h1>
        </div>

        <div class="conatainer">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="name" >
                                <br>
                        <span id="firstname"></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com">
                                <br>
                    <span id="emailid"></span>
                        </div> 

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mobile</label>
                            <input type="number" class="form-control" name="mobile" id="mobile"
                                placeholder="mobile">
                                <br>
                    <span id="mobile-number"></span>
                        </div>
                        <div class="form-group">
                            <label for="state">Choose State</label>
                            <select name="state" id="state" class="form-control">
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Symptomps</label> <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Cold" name="cornasymp[]">
                                <label class="form-check-label" for="inlineCheckbox1">Cold</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fever" name="cornasymp[]">
                                <label class="form-check-label" for="inlineCheckbox2">Fever</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Breath" name="cornasymp[]">
                                <label class="form-check-label" for="inlineCheckbox3">Breath</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Week" name="cornasymp[]">
                                <label class="form-check-label" for="inlineCheckbox3">Week</label>
                              </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Any Other description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="button" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- top cursor -->

    <div class="container scroll_top float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
    </div>

    <!-- footer -->

    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>copyright &copy; Dec 2020 by SR AKHTAR</p>
        </div>
    </footer>


    <script>
        
        function fetch(){
            $.get("https://api.covid19api.com/summary",
            function(data){
                // console.log(data['Countries'].length);
                var tableval = document.getElementById('tablevalue');
                for (var i = 1 ; i <(data['Countries'].length); i++)
                {
                    var x = tableval.insertRow();
                    x.insertCell(0);

                    tableval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                    tableval.rows[i].cells[0].style.background = '#7a4a91';
                    tableval.rows[i].cells[0].style.color = '#fff';

                    x.insertCell(1);
                    tableval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    tableval.rows[i].cells[1].style.background = '#4bb7d8';
                    x.insertCell(2);
                    tableval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    tableval.rows[i].cells[2].style.background = '#4bb7d8';
                    x.insertCell(3);
                    tableval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    tableval.rows[i].cells[3].style.background = '#f36e23';
                    x.insertCell(4);
                    tableval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                    tableval.rows[i].cells[4].style.background = '#4bb7d8';
                    x.insertCell(5);
                    tableval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    tableval.rows[i].cells[5].style.background = '#9cc850';
                    x.insertCell(6);
                    tableval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    tableval.rows[i].cells[6].style.background = '#f36e23';
                }
            }
            );
        }


// var btn = document.querySelector("#button");
// btn.addEventListener("click", appear);


function validateForm() {
    var name = document.getElementById("name").value;
    var Mobile = document.getElementById("mobile").value;
    var Email = document.getElementById("email").value;
   

    // name validation
    if (name == "") {
        document.getElementById("firstname").innerHTML = " ** please enter the  name";
        return false;//if we dont write false the the  text will go to serrer
    }

    // email validation starts
    if (Email == "") {
        document.getElementById("emailid").innerHTML = " ** please enter the email fields";
        return false;//if we dont write false the the  text will go to serrer
    }

    if (Email.indexOf('@') <= 0) {
        document.getElementById("emailid").innerHTML = " ** @ invalid position";
        return false; //if we dont write false the the  text will go to serrer
    }

    if ((Email.charAt(Email.length - 4) != ".") && (Email.charAt(Email.length - 3) != ".")) {
        document.getElementById("emailid").innerHTML = " ** . invalid position";
        return false; //if we dont write false the the  text will go to serrer
    }


    // mobile number validation
    if (Mobile == "") {
                document.getElementById("mobile-number").innerHTML = " ** please enter the Mobile number fields";
                return false;//if we dont write false the the  text will go to serrer
            }

            if (isNaN(Mobile)) {
                document.getElementById("mobile-number").innerHTML = "** type mismatch please use only numbers";
                return false;
            }

            if (Mobile.length != 10) {
                document.getElementById("mobile-number").innerHTML = "** mobile number must be of 10 digit";
                return false;
            }

            // mobile validation ends

}


    </script>

<script src="script.js"></script>

</body>

</html>

<?php
include "conn.php";
if(isset($_POST["submit"]))
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $desc = $_POST['description'];
    $symptom = $_POST['cornasymp'];
    $chk = "";


    foreach($symptom as $chk1){
        $chk .= $chk1.",";
       
    }

    $insertquery = "INSERT INTO `contact_us` (`name`, `email`, `mobile`, `state`, `symptomp`, `message`) VALUES ('$username', '$email', '$mobile', '$state', '$chk', '$desc')";

    $query = mysqli_query($conn,$insertquery);

   

    if($query){
        ?>
        <script>
            alert("Your health report submitted successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Sone error");
    </script>
    <?php
    
    }
}
?>