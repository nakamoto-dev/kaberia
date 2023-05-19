@extends('layouts.app')
@section('content')
<div class="row flex justify-content-center">

<div class="col-lg-6 position-absolute start-40">

<div class="card m-3">
    <div class="card-header">
        UPLOAD A BOOK IN DOCX FORMAT
    </div>
    <div class="card-body">

 
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">upload Docx</label>
            <input class="form-control" name="file" type="file" id="formFile">
        </div>

        <div class="mb-3">
            <label for="writer" class="form-label">Book Writer</label>
            <input type="text" id="writer" name="writer" class="form-control">
        </div>

          <button class="btn btn-success btn-sm ">upload the book online</button>
    </form>
</div>
</div>

</div>
    
</div>
@endsection