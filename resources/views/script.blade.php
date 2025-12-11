  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
          $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
      });
</script>

  <script>
    $(document).ready(function(){
        // alert();
  
            $(document).on('click','#AddBook',function(e){
                //page ta jeno reload na hoi 
                e.preventDefault();
                let name = $('#name').val();
                 let author = $('#author').val();
                  let quantity = $('#quantity').val();
                //   console.log(name+author+quantity);
                 
             var form = new FormData($('#addFrom')[0]);

                // console.log(form);
            $.ajax({
            url:"{{route('create.create')}}",
            method:"POST",            
            data:form,

            processData: false,
//            jQuery FormData কে জোর করে string বানানোর চেষ্টা করবে →
// result = data নষ্ট / empty / server এ পৌঁছাবে না
            contentType: false,
             // multipart/form-data পাঠাবে

               success:function(res){

               },
               error:function(err){
                let error = err.responseJSON;
               $.each(error.errors, function(key, value){
    $('.ErrorMassage').append('<span class="text-danger">'+value[0]+'</span><br>');
});


               }



                });

                

            });


    });
  </script>