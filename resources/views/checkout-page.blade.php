<!DOCTYPE html>
<html>
<head>
 <title>Laravel Paypal</title>
 <style type="text/css">
 *{
  box-sizing: border-box;
 }
 body{
  display: flex;
  background: #c3c3c3;
  min-height: 100vh;
  justify-content: center;
  align-items: center;
 }
 .pay-area{
  display: block;
  width: 300px;
  padding: 35px;
  background: #ffffff;
 }
 input{
  display: block;
  width: 100%;
  padding: 5px 15px;
 }
 button{
  padding: 5px 10px;
  background: #3c3c3c;
  cursor: pointer;
  color: #ffffff;
 }
 .m-2{
  margin: 20px auto;
  display: block;
 }
 .error{
  color: red;
  font-size: small;
 }
 .success{
  color: green;
 }
</style>
</head>
<body>
  <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/ph/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/ph/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_l.png" alt="Pay with PayPal" /></a></td></tr></table><!-- PayPal Logo -->
 <section class="pay-area">
  <div>
   <img height="60" src="{{ asset('paypal-logo.png') }}">
   @if (session('error') || session('success'))
   <p class="{{ session('error') ? 'error':'success' }}">
    {{ session('error') ?? session('success') }}
   </p>
   @endif
   <form method="POST" action="{{ route('create-payment') }}">
    @csrf
    <div class="m-2">
     <input type="text" name="amount" placeholder="Amount">
     @if ($errors->has('amount'))
     <span class="error"> {{ $errors->first('amount') }} </span>
     @endif
    </div>
    <button>Pay Now</button>
   </form>
  </div>
 </section>
</body>
</html>