<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=" stylesheet " href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel=" icon " type="image / x - icon " href="favicon.ico">
    <link rel="stylesheet" href="https: //use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title> Hello, world! </title>
</head>

<body class="jumbotron">

<?php
    include("menu.php");
?>
    
    <div class="jumbotron text-center">
        <h1> Formulaire de contact </h1>
    </div>

    
    
    <div class="alert alert-success" role="alert"  id="alerte" style="visibility: hidden;"></div>
    
    
  

    <div class="container">
    <form action="contact.php" method="POST" id="formul">
    <div class="form-group row" hidden>
            <label for="ip" class="col-sm-2 col-form-label">IP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ip" name="ip" value="<?php echo $_SERVER["REMOTE_ADDR"];?>">
            </div>
        </div>
        <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10"><input type="text" aria-label="First name" class="form-control" id="nom" name="nom">
        </div>
        </div>

        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10"><input type="text" aria-label="Last name" class="form-control" id="prenom" name="prenom">
            </div>
            </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10"><textarea type="text" aria-label="message" class="form-control" id="messages" name="messages"></textarea>
            </div>
            </div>
     
       
        <div class="form-group row">
            <div class="col-sm-2">RGPD</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="rgpd">
                    <label class="form-check-label" for="gridCheck1"> Vos données personnelles ne seront ni revendues , ni utilisées à des fins commerciales </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
             <label for="dat" class="col-sm-2 col-form-label">Date :</label>
            <div class="col-sm-10">
                <input  type="datetime-local" name="dat" id="dat">
            </div>
        </div>

      
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LcQV9oUAAAAABdcgsW8-bOmTNIk9Di-42sOwQl0" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
        </div> 

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" id="bouton">Envoyer</button>
            </div>
        </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>
        <script src="validator.js"></script>
    <script src="contact.js"></script>
    <script>
var bouton=document.getElementById("bouton");
var alerte=document.getElementById("alerte");
var formul=document.getElementById("formul");
bouton.addEventListener("click",function(e){

  e.preventDefault();
  alerte.style.visibility="visible";
alerte.textContent="Demande de contact bien envoyée !!";
setTimeout(()=>{
alerte.style.visibility="hidden";
formul.submit();

},1000);


});



</script>
</body>

</html>