<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{asset('argon/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('argon/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('argon/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- datatable CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('argon/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="{{asset('argon/assets/css/docs.min.css')}}" rel="stylesheet">
  


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


@yield('content')


<script src="{{asset('argon/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('argon/assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('argon/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('argon/assets/vendor/headroom/headroom.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('argon/assets/vendor/onscreen/onscreen.min.js')}}"></script>
  <script src="{{asset('argon/assets/vendor/nouislider/js/nouislider.min.js')}}"></script>
  <script src="{{asset('argon/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('argon/assets/js/argon.js?v=1.0.1')}}"></script>

  
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>





  <script>
      
      $(document).ready(function(){

        var postURL="<?php echo url('index2')?>";
        var i=1;
        $('#experiance1').click(function(){

            i++;
            ///add action button add to apented more input feild
            $('#tbexperiance').append(''+
            '<tr id="row'+i+'" class="col-lg-12 col-sm-12">'+
            '<td><input type="text" name="experiance[]" class="form-control"></td>'+
            '<td><button type="button" name="exremove" id="'+i+'" class="btn btn-1 btn-danger btn_remove">X</button></td>'+
            '</tr>');
        });


            $(document).on('click','.btn_remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

      });
  
  </script>

<script>
      
      $(document).ready(function(){

        var postURL="<?php echo url('index2')?>";
        var i=1;
        $('#tbskills1').click(function(){

            i++;
            ///add action button add to apented more input feild
            $('#tbskills').append(''+
            '<tr id="row'+i+'" class="col-lg-12 col-sm-12">'+
            '<td><input type="text" name="skills[]" class="form-control"></td>'+
            '<td><button type="button" name="skillremove" id="'+i+'" class="btn btn-1 btn-danger btn_remove">X</button></td>'+
            '</tr>');
        });


            $(document).on('click','.btn_remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

      });
  
  </script>

<script>
      
      $(document).ready(function(){

        var postURL="<?php echo url('index2')?>";
        var i=1;
        $('#education1').click(function(){

            i++;
            ///add action button add to apented more input feild
            $('#tbeducation').append(''+
            '<tr id="row'+i+'" class="col-lg-12 col-sm-12">'+
            '<td><input type="text" name="education[]" class="form-control"></td>'+
            '<td><button type="button" name="educationremove" id="'+i+'" class="btn btn-1 btn-danger btn_remove">X</button></td>'+
            '</tr>');
        });


            $(document).on('click','.btn_remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

      });
  
  </script>

<script>
      
      $(document).ready(function(){

        var postURL="<?php echo url('index2')?>";
        var i=1;
        $('#technical1').click(function(){

            i++;
            ///add action button add to apented more input feild
            $('#tbtechnical').append(''+
            '<tr id="row'+i+'" class="col-lg-12 col-sm-12">'+
            '<td><input type="text" name="technical[]" class="form-control"></td>'+
            '<td><button type="button" name="tecnicalremove" id="'+i+'" class="btn btn-1 btn-danger btn_remove">X</button></td>'+
            '</tr>');
        });


            $(document).on('click','.btn_remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

      });
  
  </script>

<script>
      
      $(document).ready(function(){

        var postURL="<?php echo url('index2')?>";
        var i=1;
        $('#project1').click(function(){

            i++;
            ///add action button add to apented more input feild
            $('#tbproject').append(''+
            '<tr id="row'+i+'" class="col-lg-12 col-sm-12">'+
            '<td><input type="text" name="project[]" class="form-control"></td>'+
            '<td><button type="button" name="projectremove" id="'+i+'" class="btn btn-1 btn-danger btn_remove">X</button></td>'+
            '</tr>');
        });


            $(document).on('click','.btn_remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

      });
  
  </script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>