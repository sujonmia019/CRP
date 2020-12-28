@extends('layouts.master')
@section('title', 'Account')
@push('styles')
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
  /* Start added by Tachahb */
  .in_progress{
    height:40px;
     background-color:#fff;
}
.in_progress_bar{
    width:70%; height:100px;
}
.track_order{
    color:#fff;
}
.all_card_title{
    font-size:25px;
}
.invoice_btn{
    background-color:#19AAF8;
    color:#fff;
}
.list_image{
    list-style-image:url('{{asset('assets/images/list_background_bullet.png')}}');
    text-align:left;
    line-height:50px;
    cursor:pointer;
}
.take_it_btn{
  color:#fff;
  background-color:#19AAF8;
}
#order_details_spec li{list-style-image:url('{{asset('assets/images/list_background_bullet.png')}}'); float:left; padding:5px 10px;}
#order_details_spec li span{ padding-right:50px;}
.product_image_complete img{
    width:100%;
  }
.justify div{
  display: flex;justify-content: center;align-items: center;
}
.btn-crm{
  background-color:#19AAF8;
  padding:2px 5px;
  color:#fff;
}
.hide_opacity{
    opacity:0;
}
.simple_btn{
    border:1px solid #ddd;
    padding:4px 6px;
}
.price_bold{
    font-size:40px;
    font-weight:900;
    color:#000;
}
.upload_img_{
    padding:10px 20px;
    border:1px solid #ddd;
    background-color:#19AAF8;
    color:#fff;
    cursor:pointer;
}
.img-sec{
  display:flex;
  flex-direction:column;
  justify-content:center;
}
.upl-btn{
  margin:10px;
}
.all-contact-info{
  display:flex;
  justify-content:center;
  flex-direction:column;
  align-items:center;
}
.contact-info-group{
  display:grid;
  grid-template-columns:1fr 1fr;
  grid-gap: 20px 200px;
  width:100%;
}
.config-btn{
  display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px;
}
.inp-type{
  /* display:flex;
  justify-content:flex-start; */
  display: flex;
    align-items: center;
    justify-content: center;
}
.all-payment{
  display:grid;
  grid-template-columns:1fr 1fr;
}
.fab{
  font-size:32px;
}
.payment-in{
  display: grid;
    grid-template-columns: 1fr 1fr 4fr;
}
input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    height: 22px;
}
.crd-p{
  margin-bottom: 0;
  margin-left: -35px;
}
.payment-img{
  color:#19aaf8;
}
/* end added by Tachhab */
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    min-width: 300px;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }

  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    width:150px;
    margin-right:10px;
  }
  #nextBtn{
    width:150px;
  }
  /* Make circles that indicate the steps of the form: */
  .step {
    border: none;
    padding:10px 15px;
  }

  .step.active {
    opacity: 1;
    color:#19AAF8;
    border-bottom:2px solid #19AAF8;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
    color:#fff;
  }
  @media(max-width:768px){
        .hide_text{
        display:none;
    }
    .contact-info-group{
      grid-template-columns:1fr;
    }
  }
  </style>
@endpush
@section('preloader')
    @parent
@endsection
@section('sidenavbar')
    @parent
@endsection
@section('content')
<form id="regForm" action="">
    <!-- Circles which indicates the steps of the form: -->
    <div class="row">
        <div class="col-md-12">
            <div style="text-align:center;margin-top:40px; margin-bottom:20px; border-bottom:1px solid #ddd">
                <span style="width:23%" class="step"><i class="fas fa-address-book"></i><b class="hide_text">
                        Contact</b></span>
                <span style="width:23%" class="step"> <i class="fas fa-map"></i> <b class="hide_text">Billing</b></span>
                <span style="width:23%" class="step"><i class="fas fa-money-check-alt"></i><b class="hide_text">
                        Payment</b></span>
                <span style="width:23%" class="step"><i class="fas fa-file-alt"></i><b class="hide_text">
                        Invoices</b></span>
            </div>
        </div>
    </div>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <div class="all-contact-info">
            <div class="d-flex justify-content-center">
                <img src="{{URL::asset('public/assets/images/avatar.png')}}" style="width: 150px; height: 150px;" class="rounded-circle" id="output_image" alt="">
            </div>
            <div>
                <input type="file" class="btn btn-primary upl-btn" onchange="preview_image(event)">
            </div>
            <div class="contact-info-group">
                <div class="contact-info">
                    <label for="firstname">First Name</label>
                    <input placeholder="First name..." oninput="this.className = ''" name="fname">
                </div>
                <div class="contact-info">
                    <label for="lastname">Last Name</label>
                    <input placeholder="Last name..." oninput="this.className = ''" name="lname">
                </div>
                <div class="contact-info">
                    <label for="email">Email</label>
                    <input placeholder="Email..." oninput="this.className = ''" name="email">
                </div>
                <div class="contact-info">
                    <label for="password">Password</label>
                    <input placeholder="Password..." oninput="this.className = ''" name="password">
                </div>
            </div>
        </div>

        <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
    </div>
    <div class="tab">
        <div class="all-bill-info">
            <div class="contact-info-group">
                <div class="contact-info">
                    <label for="company">Company</label>
                    <input placeholder="Enter Company Name..." oninput="this.className = ''" name="companyname">
                </div>
                <div class="contact-info">
                    <label for="email">Email</label>
                    <input placeholder="Enter Your Email..." oninput="this.className = ''" name="email">
                </div>
                <div class="contact-info">
                    <label for="address1">Address1</label>
                    <input placeholder="Enter your Address1..." oninput="this.className = ''" name="address1">
                </div>
                <div class="contact-info">
                    <label for="address2">Address2</label>
                    <input placeholder="Enter your Address2..." oninput="this.className = ''" name="address2">
                </div>
                <div class="contact-info">
                    <label for="zipcode">Zip/Postal Code</label>
                    <input placeholder="Enter your Zip/Postal Code..." oninput="this.className = ''" name="zip">
                </div>
                <div class="contact-info">
                    <label for="euvat">Eu Vat number</label>
                    <input placeholder="Enter you Eu Vat number..." oninput="this.className = ''" name="euvatnumber">
                </div>
                <div class="contact-info">
                    <label for="city">Town / City</label>
                    <input placeholder="Enter your Town/City..." oninput="this.className = ''" name="town">
                </div>
                <div class="contact-info">
                    <label for="country">Country</label>
                    <input placeholder="Enter your Country..." oninput="this.className = ''" name="country">
                </div>
                <div class="contact-info">
                    <label for="phone">Phone</label>
                    <input placeholder="Enter you Phone number..." oninput="this.className = ''" name="phone">
                </div>
            </div>
        </div>

        <!-- <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
      <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
      <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p> -->
    </div>
    <div class="tab">Payment:

        <div class="all-payment">
            <div class="credit-card">
                <div class="payment-in">
                    <div class="inp-type">
                        <input type="radio" name="creditcard">
                    </div>
                    <div class="lbl">
                        <p class="crd-p">Credit Card</p>
                    </div>
                    <div class="payment-img">
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-cc-visa"></i>
                    </div>

                </div>
                <div class="contact-info">
                    <label for="name">Name on Card</label>
                    <input oninput="this.className = ''" name="zip">
                </div>
                <div class="contact-info">
                    <label for="cardnumber">Card number</label>
                    <input oninput="this.className = ''" name="euvatnumber">
                </div>
                <div class="contact-info">
                    <label for="expiry ">Expiry Date</label>
                    <input oninput="this.className = ''" name="euvatnumber">
                </div>
                <div class="contact-info">
                    <label for="cardsecurity">Card Security Code</label>
                    <input oninput="this.className = ''" name="euvatnumber">
                </div>

            </div>
            <div class="credit-card">
                <div class="payment-in">
                    <div class="inp-type">
                        <input type="radio" name="creditcard">
                    </div>
                    <div class="lbl">
                        <p class="crd-p">Paypal</p>
                    </div>
                    <div class="payment-img">
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
      <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p> -->
    </div>
    <div class="tab">Invoice:
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
    </div>
    <div style="overflow:auto;">
        <div class="config-btn">
            <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Upload</button>
        </div>
    </div>
</form>
  @push('scripts')
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the crurrent tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }

//   image Upload
    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
        var output = document.getElementById('output_image');
        output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

  </script>
@endpush
@endsection
