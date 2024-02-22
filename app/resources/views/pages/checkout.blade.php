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

    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
        <div>
        Your order is N2,000
        </div>
        <input type="hidden"  name="public_key" value="FLWPUBK_TEST-02b9b5fc6406bd4a41c3ff141cc45e93-X" />
        <input  name="customer[email]" value="test@mailnator.com" />
        <input  name="customer[name]" value="Ayomide Jimi-Oni" />
        <input  name="tx_ref" value="txref-{{substr(rand(0,100000).time())}}" />
        <input type="hidden" name="amount" value="2000" />
        <input  name="currency" value="NGN" />
        <input  name="meta[source]" value="docs-html-test" />
        <br>
        <button type="submit" id="start-payment-button">Pay Now</button>
    </form>
  



</body>
</html>
  