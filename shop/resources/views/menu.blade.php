@extends('main')

@section('content')
<style>
    .background-image {
        background-image: url('/template/images/bg_title.png');
        background-size: cover; 
        background-position: center; 
        height: 250px;
        position: relative;
        color: white; 
        text-align: center;
        display: flex; 
        justify-content: center; 
        align-items: center; 
    }
    .content {
        position: absolute;
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        text-align: center;
        width: 100%; 
    }
    .content h3 {
        margin: 0; 
		font-size: 33px;
		font-family: 'Sriracha', cursive;
		color: #fffc00;
    }
</style>
<div class="bg0 m-t-23 p-b-140 p-t-80">
	<div class="background-image">
		<div class="content">
			<h3>{{ $title }}</h3>
		</div>
	</div>



	<div class="new-container" style="margin-top:20vh;">
		<div class="container">
			@include('products.list')
		</div>
	</div>
</div>
@endsection
