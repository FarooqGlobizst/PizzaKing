@extends('layouts.app')

@section('content')

<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Menu</li>
        </ul>
    </div>
</section>


<div class="agileits-services  py-5" id="menu">
    <div class="container py-md-5">
        <div class="title-content text-center">
            <h6 class="sub-title">Special Menu</h6>
            <h3 class="title-big">Menu combo for you</h3>
        </div>
        <div class="pt-lg-5 pt-4">
            <div class="row menu-body">
                <!-- Section starts: Appetizers -->
                @foreach ($menus as $menu)
                <div class="col-lg-6 menu-section pr-lg-5">
                    <h3 class="menu-section-title">{{$menu['name']}}</h3>
                    @foreach ($menu['items'] as $item)
                        
                    
                        <!-- Item starts -->
						<div class="menu-item">
							<div class="row border-dot no-gutters">
								<div class="col-8 menu-item-name">
									<h6>{{$item['name']}}</h6>
								</div>
								<div class="col-4 menu-item-price text-right">
									<h6>${{$item['price']}}</h6>
								</div>
							</div>
							<div class="menu-item-description">
								<p>{{$item['desc']}}</p>
							</div>
						</div>
					<!-- Item ends -->
                   @endforeach
                    
                </div>
                @endforeach
					

@endsection