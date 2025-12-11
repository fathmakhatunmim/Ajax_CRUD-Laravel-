<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- boostrap --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

{{-- sweetalert --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <title>Document</title>
</head>
<body>
<div class="Container">
    <div class="row">
        <div class="col-md-6 offset-3" style="margin-top:100px">
            <a href="" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" >Add Book</a>
        </div>

    </div>

</div>





















 @include('modal')   
@include('script')





</body>
</html>