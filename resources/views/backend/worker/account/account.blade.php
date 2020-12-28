@extends('layouts.master')
@section('title', 'Account')
@section('preloader')
    @parent
@endsection
@section('sidenavbar')
    @parent
@endsection
@section('content')
<section class="worker_account">
  <div class="card p-4">
  <div class="row">
        <div class="col-md-12">
      <div class="card" style="padding: 50px">
        <div class="row"><div class="col-md-12 all_card_title"><b>Account</b></div></div>
          <form>
            <div class="row">
              <div class="col-md-12" style="display: flex;justify-content: center;align-items: center; padding: 10px 10px;">
                <div class="worker_avatar" style="margin-bottom:10px;">
                  <img id="output_image" style="width: 120px; height: 120px; border-radius: 50%;" src="{{ asset('public/assets/images/avatar.png') }}" alt="">
                    <div class="form-group mb-4 mt-4">
                        <label style=" font-size: 15px; padding: 5px 10px; border: 1px solid #000" for="upload_avatar">Upload Photo</label>
                        <input type="file" class="form-control" name="upload_avatar" id="upload_avatar" onchange="preview_image(event)"  style="margin-top: 20px; display: none">
                    </div>
                </div>
              </div>
            </div>
            <div class="row p-2" style="">
              <div class="col-md-6">
                  <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="col-md-6">
              <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="row p-2" style="">
              <div class="col-md-6">
              <label for="">Address 1</label>
                <input type="text" class="form-control" placeholder="Address 1">
              </div>
              <div class="col-md-6">
              <label for="">Address 2</label>
                <input type="text" class="form-control" placeholder="Address 2">
              </div>
            </div>
            <div class="row p-2" style="">
              <div class="col-md-6">
              <label for="">Zip/Postal Code</label>
                <input type="text" class="form-control" placeholder="Zip/ Postal Code">
              </div>
              <div class="col-md-6">
              <label for="">Country</label>
                <input type="text" class="form-control" placeholder="Country">
              </div>
            </div>
            <div class="row p-2" style="">
              <div class="col-md-6">
              <label for="">Town/ City</label>
                <input type="text" class="form-control" placeholder="Town / City">
              </div>
              <div class="col-md-6">
              <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="row p-2" style="">
              <div class="col-md-6">
                <input type="submit" class=" btn btn-success mt-4 float-right" value="Save Changes">
              </div>
              <div class="col-md-6">
                <input type="submit" class=" btn btn-info mt-4" value="Generic Info">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
  <script>

    //   image Upload
        function preview_image(event){
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


</section>


@endsection
