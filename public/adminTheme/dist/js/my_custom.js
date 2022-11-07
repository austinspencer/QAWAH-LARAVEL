// using dropzone for mutiple image upload 
// Code Starts 
  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    $.ajax({
      url:"{{ route('dropzone.fetch') }}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }

  $(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
      url:"{{ route('dropzone.delete') }}",
      data:{name : name},
      success:function(data){
        load_images();
      }
    })
  });

  // Dropzone js code ends 

  // Single image upload code for logo 
  // Code starts 

  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });

  // Code Ends

// homepage js starts

  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": true,
      "ordering": true,
      "buttons": false,
      buttons: [
        '', '', '', ''
        // 'copy', 'excel', 'pdf', 'csv'
    ]
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#example3").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": true,
      "ordering": true,
      "buttons": false,
      buttons: [
        'copy', 'excel', 'pdf', 'csv'
        // 'copy', 'excel', 'pdf', 'csv'
    ]
      
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });



  



  // $(function () {
  //   $("#example3").DataTable({
  //     "responsive": true, 
  //     "lengthChange": true, 
  //     "autoWidth": true,
  //     "ordering": true,
  //     "buttons": true,
  //     buttons: [
  //       'copy', 'excel', 'pdf', 'csv'
  //       // 'copy', 'excel', 'pdf', 'csv'
  //   ]
      
  //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": true,
  //     "searching": true,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": true,
  //     "responsive": true,
  //   });
  // });



  // homepage js ends

  // ckeditor code start
  CKEDITOR.replace( 'ckeditor' );
  //CKEDITOR.replace( 'editor1' );
  // ckeditor code ends 


// sweetAlert function starts
// sweetAlert ends 


