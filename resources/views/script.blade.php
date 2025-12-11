  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 

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

      //datatable a add kora
             $table = $('#bookTable').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax:"{{route('create.index')}}",
                
               columns: [
        { data: 'id'},
        { data: 'name'},
        {data: 'author'},
        {data: 'quantity'},
        { data: 'action', name: 'action', orderable: false, searchable: false },
                 ]
             });















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
                if(res.status=='success'){
                    $('#exampleModal').modal('hide');
                     $('#addFrom')[0].reset(); // form reset
                    //  alert('Book added successfully!');
                      swal("Success", res.status, "success");

                }

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