@extends('layouts.master')
@section('title', 'Order')
@push('styles')
<link href="{{ asset('public/assets/dist/min/basic.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/dist/min/dropzone.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/dist/basic.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/dist/dropzone.css') }}" rel="stylesheet">

<style>
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    /* padding: 40px; */
    min-width: 300px;
  }

  .client_order-upload {
    width: 1525px;
    height: 750px;
  }

  .all-order {
    max-width: 1525px;
    width: 1525px;
    background: #fff;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  .upld-sec {
    background: #f5f7f8;
    width: 848px;
    height: 260px;
    border: 3px dotted;
  }

  .upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
    cursor: pointer;
    margin-bottom: 28px;
    background: #ffffff;
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

  .input.form-control {
    height: 60px;
  }

  .order-title {
    margin: 21px 0 0 13px;
  }

  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    border: none;
    padding: 10px 15px;
  }

  .step.active {
    opacity: 1;
    color: #19AAF8;
    border-bottom: 2px solid #19AAF8;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
    color: #fff;
  }

  @media(max-width:768px) {
    .hide_text {
      display: none;
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
    <h2 class="col-12 order-title">New Order</h2>
    <div class="col-md-12 mr-auto">

      <div class="mr-auto" style="text-align:center;margin-top:40px; margin-bottom:20px; border-bottom:1px solid #ddd">
        <span style="width:19%" class="step"><i class="fas fa-upload"></i><b class="hide_text"> Upload</b></span>
        <span style="width:19%" class="step"> <i class="fas fa-list-ul"></i> <b
            class="hide_text">Specification</b></span>
        <span style="width:19%" class="step"><i class="fas fa-money-check-alt"></i><b class="hide_text">
            Billing</b></span>
        <span style="width:19%" class="step"><i class="far fa-check-square"></i><b class="hide_text">
            Confirmation</b></span>
        <span style="width:19%" class="step"><i class="fas fa-file-alt"></i><b class="hide_text"> Pay</b></span>
      </div>
    </div>
  </div>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">


    <section class="client_order-upload card p-4">
      <form action="">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="country">Order Name</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="country">Upload URL</label>
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="col-md-8 upld-sec">
      <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
      </form>
</div>



<!-- <div class="col-md-8 text-center">
          
        </div> -->
</div>
</form>
</section>

<!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
</div>
<div class="tab">Contact Info:
  <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
  <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
</div>
<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
  <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
</div>
<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
  <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
</div>
<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
  <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
</div>
<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>
</form>
@push('scripts')
<script src="{{ asset('public/assets/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('public/assets/dist/dropzone.js') }}"></script>
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
</script>
@endpush
@endsection