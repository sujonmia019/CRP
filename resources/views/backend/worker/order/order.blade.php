
@extends('layouts.master')
@section('title', 'Order')
@section('preloader')
    @parent
@endsection
@section('sidenavbar')
    @parent
@endsection
@section('content')
<section class="worker_orders">
  <div class="card">
    <div class="card-title" style="padding: 10px 15px;width: 100%"><p>Orders</p></div>
      <div class="table-responsive ">          
    <table class="table table-bordered w-100">
        <tr>
          <th>Order Id</th>
          <th>Client Id</th>
          <th>Order Date</th>
          <th>Deadline</th>
          <th>Image</th>
          <th>Specification</th>
          <th>Status</th>
          <th>Amount</th>
        </tr>
      <tbody>
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
  
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
  
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
  
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
        <tr>
          <td>#4541</td>
          <td>#4545</td>
          <td>12 Aug 2020</td>
          <td>12 Sep 2020</td>
          <td>52</td>
          <td>AMAZON</td>
          <td><span class="active_btn">Active</span></td>
          <td>$5455</td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  
  <div class="card" style="margin-top: 50px; padding-top: 50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>Order Details</h1>
          <hr>
        <div class="pro_details">
        <ul id="order_details_spec">
          <li><span>#54854</span></li>
          <li><span>#54854</span></li>
          <li><span>12 AUG 2020</span></li>
          <li><span>12 SEP 2020</span></li>
          <li> <span>45</span></li>
          <li><span>AMAZON</span></li>
          <li><span>$50</span></li>
        </ul>
        </div>
        </div>
      </div>
  <div class="row p-4">
  <div class="download_button">
          <button style="padding: 10px 15px ; background-color: #19AAF8; border:1px solid pink;  color: #fff; font-size: 16px;"><i class="fa fa-download" aria-hidden="true"></i> Download All </button>
        </div>
  </div>
      <div class="row p-4 justify" style="padding-bottom: 50px;display: flex;justify-content: center;align-items: center;">
        <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
         <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
          <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
           <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
  
        <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
         <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
          <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
           <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
      </div>
    </div>
  </div>
  <div class="order_completion card mt-4">
  <div class="row p-4">
    <div class="all_card_title p-4"><b>Order Completion</b></div>
  </div>
  <div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
    <div class="upload_completion_image" style="display:flex; justify-content:center">
      <form action="">
        <div class="form-group" style="height:200px; width:600px; text-align:center; border:1px dotted black; background-color:#F9F1F0">
          <input type="file" name="upload_files" id="upload_files" style="display:none">
          <label for="upload_files" style="background-color:#"><p class="p-4" > Upload Completion Files</p></label> <br>
         <span style="font-size:60px"> <i class="fa fa-upload" aria-hidden="true"></i></span>
        </div>
        <div class="form-group text-center">
          <input type="submit" name="uploads" id="uploads" value="Upload Files" style="padding:10px 20px; border:1px solid #000; width:200px" class="btn btn-success">
          
        </div>
      </form>
    </div>
    </div>
    <div class="col-md-4"></div>
  </div>
  </div>
  <div class="uploaded_files  card p-4 mt-4">
  <div class="row p-4">
        <div class="all_card_title"><b>Uploaded Files</b></div>
        </div>
      <div class="row p-4 justify" style="padding-bottom: 50px;display: flex;justify-content: center;align-items: center;">
        <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
         <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
          <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
           <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
  
        <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
         <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
          <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
           <div class="col-md-3 mt-4 border border-bordered"><div class="product_image_complete p-4"><img src="{{URL::asset('assets/images/avatar.png')}}" alt=""></div></div>
      </div>
    </div>
  </div>
  </section>
@endsection