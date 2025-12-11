
<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form method="post" id="addFrom" >
    @csrf
  <div class="modal-dialog"  id="ajax-modal">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

 <input type="hidden" name="category_id" id="category_id">



   {{-- errormassage --}}
   <div class="ErrorMassage mb-3">

   </div>















         <div class="from-group mb-3">
          <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Book name</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Book name">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Authors Name</label>
  <input type="text" class="form-control" id="author" name="author" placeholder="author">
</div>
{{-- <div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Edition</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="edition" placeholder="author">
</div> --}}
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">quantity</label>
  <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity">
</div>


         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="AddBook">submit</button>
      </div>
    </div>
  </div>
</div>

</form>
