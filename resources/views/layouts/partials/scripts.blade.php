    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- google recaptcha  --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" ></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
    {{-- DataTable js  --}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script>

      (function($) {

            // Mobile Logo
            $(".mobile_logo").hide();

            // Sideber Collapse Button
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.hide-menu').toggleClass('hide-menu-text');
                $(".components li a").toggleClass('bigIcon');
                $(".mobile_logo").toggleClass('block_logo');
                $(".full_width_logo").toggleClass('hide_logo');
                $(".avatar").toggleClass("avatar_resize");
            });

            // DataTable
            $('#DataTable').DataTable();


            // Toastr Notification
            @if(Session::has('message'))
              var type = "{{ Session::get('alert-type', 'info') }}";
              switch(type){
                    case 'info':
                      toastr.info("{{ Session::get('message') }}");
                    break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                    break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                    break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                    break;
                }
            @endif


            var uppy = Uppy.Core()
              .use(Uppy.Dashboard, {
                inline: true,
                target: '#drag-drop-area'
              })
              .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'}) //you can put upload URL here, where you want to upload images

            uppy.on('complete', (result) => {
              console.log('Upload complete! We’ve uploaded these files:', result.successful)
            })

            // user data ajax


            $('#userForm').on('submit', function(event){
                event.preventDefault();

                $.ajax({
                    url: "{{ route('admin.users.store') }}",
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data)
                    {
                      console.log(data);
                        // var html = '';
                        // if(data.errors)
                        // {
                        //     html = '<div class="alert alert-danger">';
                        //     for(var count = 0; count < data.errors.length; count++)
                        //     {
                        //         html += '<p>' + data.errors[count] + '</p>';
                        //     }
                        //     html += '</div>';
                        // }
                        // if(data.success)
                        // {
                        //     html = '<div class="alert alert-success">' + data.success + '</div>';
                        //     $('#userForm')[0].reset();
                        //     $('#DataTable').DataTable().ajax.reload();
                        // }
                    }

                });

            });




          })(jQuery);

    </script>

    @stack('scripts')
