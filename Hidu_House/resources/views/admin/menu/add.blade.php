@extends('admin.adhome')
@section('content')
<form action="" method="POST">
    <div class="container">
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">{{$title}}</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <label for="text">Enter Caterorys</label>
                        <input type="text"class="form-control" id="text" name="name_category" placeholder="Enter Category" />
                        <small id="Text" class="form-text text-muted"
                          >We'll never share your email with anyone
                          else.</small
                        >
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1"
                          >Example file input</label
                        >
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="anh_dm"/>
                      </div>  
                </div>
                <div class="card-action">
                  <button class="btn btn-success">Submit</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
              </div>

            </div>
          </div>
        </div>
       
      </div>
   
      @csrf
</form>
@endsection