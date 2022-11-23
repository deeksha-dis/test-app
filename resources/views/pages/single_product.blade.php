@extends('layouts.app')

@section('content')
<style>
	img{
		height: 400px;
		width: 400px;
	}
</style>

<div class="container-fluid constrained-1380 with-padding py-4">
    <div class="row d-flex justify-content-center align-items-center mt-auto mx-auto vh-100">   
		<div class="col-md-4 mx-auto">
			<div class="card text-black centered ">
				<img src="{{$product->image}}" class="card-img-top" onerror="imgError(this)" >
				<div class="card-body">
					<div class="text-center">
						<h5 class="card-title"><strong>{{$product->name}}</strong></h5>
						<p class="text-muted mb-4"><strong>{{$product->description}}</strong></p>
					</div>
					<div>
						<div class="d-flex justify-content-between">
							@if (!empty($category))
								<span>Category</span><span>{{$category->name}}</span>								
							@else
								<span>Category</span><span> category is not given yet</span>								
							@endif
						</div>
					</div>
					<div class="d-flex justify-content-between total font-weight-bold mt-4">
						<span>Price :</span><span>{{$product->price}}</span>
					</div>
					</div>
			  </div>
		</div>
    </div>
</div>
@endsection
