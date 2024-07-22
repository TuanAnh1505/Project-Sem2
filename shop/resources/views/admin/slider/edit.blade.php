@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tiêu Đề</label>
                        <input type="text" name="name" value="{{ $slider->name }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Đường Dẫn</label>
                        <input type="text" name="url" value="{{ $slider->url }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file"  class="form-control" id="upload" onchange="displayImage()">
                <div id="image_show">
                    <a href="{{ $slider->thumb }}">
                        <img src="{{ $slider->thumb }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $slider->thumb }}" id="thumb">
            </div>
            <script>
                function displayImage() {
                    const input = document.getElementById('upload');
                    const imageDiv = document.getElementById('image_show');

                    if (input.files && input.files[0]) {
                        setTimeout(() => {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const image = document.createElement('img');
                                image.setAttribute('src', e.target.result);
                                image.setAttribute('width', '100px');
                                imageDiv.innerHTML = '';
                                imageDiv.appendChild(image);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }, 200);
                    }
                }
            </script>

            <div class="form-group">
                <label for="menu">Sắp Xếp</label>
                <input type="number" name="sort_by" value="{{ $slider->sort_by }}" class="form-control" >
            </div>

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $slider->active == 1 ? 'checked' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $slider->active == 0 ? 'checked' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Slider</button>
        </div>
        @csrf
    </form>
@endsection

