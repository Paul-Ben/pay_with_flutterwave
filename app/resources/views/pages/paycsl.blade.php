<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BSU-CSL Reg</title>
  </head>
  <body>
    <div class="container">
        <div class="header px-5 py-5 mt-2 text-centerd bg-primary text-white">
            <h1>E-Learning Registration</h1>
            {{'BSUCSL-2024'.substr(rand(0000,time()),0, 9)}}<br>
            {{"BSUCSL2024".rand(0000,9999).time()}}
        </div>
        <div class="main border">
            <form id="makePaymentForm">
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="amount">Amount:</label>
                      <input type="text" class="form-control" id="amount" placeholder="Enter Phone Number" value="2000" readonly required>
                  </div>
              </div>
            </div>
            <div class="row py-3">
              <div class="col d-flex justify-content-center align-items-end">
              <button type="submit" class="btn btn-success" id="start-payment-button">Pay Now</button>
              </div>
            </div>
            
          </form>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
     $function() {
        $(#makePaymentForm).submit(function (e) {
           e.preventDefault();
           let name = $("#name").val(),
               email = $("#email").val(),
               phoneNumber = $("#phone_number").val(),
               amount = $("#amount").val();

              //  make payment
              makePayment(amoutn, email, phoneNumber, name)
     }


        function makePayment(amoutn, email, phoneNumber, name) {
          FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-337d4e3e6c0c10c22b28cac389a35d46-X",
            tx_ref: "txref-{{'BSUCSL-2024'.substr(rand(0000,time()),0, 9)}}",
            amount,
            currency: "NGN",
            payment_options: "card, banktransfer, ussd",
            customer: {
              email,
              phone_number,
              name,
            },
            callback: function (data) {
                  console.log(JSON.stringify(data));
                //  window.location.href = "/paymentsuccess";
            },
            customizations: {
              title: "BSU Consultancy Services",
              description: "E-Learning Registration Payment",
              logo: "https://checkout.flutterwave.com/assets/img/rave-logo.png",
            },
          });
        }
      </script>
  </body>
</html>
