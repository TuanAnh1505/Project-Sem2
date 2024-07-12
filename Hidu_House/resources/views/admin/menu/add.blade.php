@extends('admin.adhome')
@section('content')
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Basic Form</h6>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="text">
                        <div id="text" class="form-text">We'll never share your email with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <button class="btn btn-success">Submit</button>
                     <button class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
       
       
    </div>
</div>
@endsection