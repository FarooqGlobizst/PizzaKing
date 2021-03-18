@extends('layouts.app')

@section('content')

<section class="w3l-banner" id="banner">
    <div class="new-block py-5">
        <div class="container">
            <div class="row middle-section">
                <div class="col-lg-7 section-width align-self">
                    <h5>Eat pizza everyday</h5>
                    <h2>Share your love for pizza</h2>
                    <a href="#url" class="btn btn-secondary btn-outline-style mt-md-5 mt-4"> 
                        <span class="fa fa-shopping-cart mr-2"></span> Order Online</a>
                </div>
                <div class="col-lg-5 history-info mt-lg-0 mt-5 pt-lg-0 pt-md-4">
                    <img src="{{ asset('images/pizza-full.png') }}" class="img-fluid" alt="image">
                    <div class="cost">
                        <h5>Only</h5>
                        <h3>$25</h3>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- iphone home block -->
<section class="w3l-about py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-6">
                <h3>We make the Best Pizza in your town</h3>
                <h5 class="mt-lg-3 mt-2">Fusce fringilla tincidunt laoreet volutpat cras varius sit.
                    metus vitae diam mauris.
                </h5>
                <p class="mt-sm-4 mt-3 mb-sm-0 mb-2"> Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet
                    Morbi ac metus vitae diam scelerisque malesuada eget eu mauris. Cras varius lorem ac velit pharetra,
                    non scelerisque mi vulputate. Phasellus bibendum.</p>
                <a href="blog1.html" class="btn-style btn-primary btn mt-lg-5 mt-4">Know more about us</a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-6 features-with-17-left1">
                        <a href="#url" class="icon"><img src="{{ asset('images/pizza.png') }}" alt="" /></a>
                        <h4><a href="#url">Right food baked with natural ingredient</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1">
                        <a href="#url" class="icon"><img src="{{ asset('images/burger.png') }}" alt="" /></a>
                        <h4><a href="#url">The use of natural best quality products</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1 mt-5 pt-lg-3">
                        <a href="#url" class="icon"><img src="{{ asset('images/drink.png') }}" alt="" /></a>
                        <h4><a href="#url"> World’s best Chef and Nutritionist!</a></h4>
                    </div>
                    <div class="col-6 features-with-17-left1 mt-5 pt-lg-3">
                        <a href="#url" class="icon"><img src="{{ asset('images/fries.png') }}" alt="" /></a>
                        <h4><a href="#url">Fastest delivery on your door step</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //iphone home block -->
<section class="w3l-block py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 align-self">
                <h3>Choose what you want, select a pick up time</h3>
                <p class="mt-md-4 mt-3 mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda perferendis in
                    expedita hic sapiente! Aspernatur pariatur consequuntur suscipit placeat nemo!</p>
                <a href="#url" class="btn-style btn-primary btn mt-lg-5 mt-4"><span class="fa fa-shopping-cart mr-2"></span> Order Online</a>
            </div>
            <div class="col-lg-4 col-md-6 align-self mt-md-0 mt-5">
                <h3>Earn points every time you order online</h3>
                <p class="mt-md-4 mt-3 mb-0"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore reiciendis saepe
                    enim odio laboriosam nostrum illo nesciunt repellat totam. Molestias.</p>
                <a href="#url" class="btn-style btn-primary btn mt-lg-5 mt-4"><span class="fa fa-book mr-2"></span> Learn More</a>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5">
                <img src="{{ asset('images/a1.jpg') }}" class="img-fluid radius-image" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="w3l-portfolio-8 py-5">
    <div class="portfolio-main py-lg-5 py-md-4">
        <div class="container">
            <div class="title-content text-center">
                <h6 class="sub-title">Gallery</h6>
                <h3 class="title-big">Pizza Gallery</h3>
            </div>
            <div class="row galler-top mt-lg-5 mt-4">
                <div class="col-md-3 col-6 protfolio-item hover14 align-self">
                    <a href="{{ asset('images/g6.jpg') }}" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g6.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14">
                    <a href="{{ asset('images/g1.jpg') }}" data-lightbox="example-set" class="mb-4"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g1.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                    <a href="a{{ asset('images/g2.jpg') }}" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g2.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14">
                    <a href="{{ asset('images/g3.jpg') }}" data-lightbox="example-set" class="mb-4"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g3.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                    <a href="{{ asset('images/g6.jpg') }}" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g6.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
                <div class="col-md-3 col-6 protfolio-item hover14 align-self">
                    <a href="{{ asset('images/g1.jpg') }}" data-lightbox="example-set"
                    data-title="lorem ipsum dolor sit amet">
                            <figure>
                                <img src="{{ asset('images/g5.jpg') }}" alt="product" class="img-fluid radius-image">
                            </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-food" id="food">
    <div class="foods1 py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="title-content text-center">
                <h6 class="sub-title">Special Combo</h6>
                <h3 class="title-big">Our Delicious Pizza</h3>
            </div>
            <div class="foods1-content mt-lg-5 mt-4 mb-sm-0 mb-4">
                <div class="owl-carousel owl-theme text-center">
                    <div class="item">
                        <div class="d-grid food-info">
                            <div class="column">
                                <h4 class="name-pos"><a href="#url">Margherita</a></h4>
                                <p>Tomato sauce, mozzarella, & oregano</p>
                                <h5>20$</h5>
                                <a href="#url" class="btn-style btn-primary btn mt-4">Order Online</a>
                                <a href="#url"><img src="{{ asset('images/p1.jpg') }}" alt="" class="img-fluid radius-image mt-4"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-grid food-info">
                            <div class="column">
                                <h4 class="name-pos"><a href="#url">Carbonara</a></h4>
                                <p>Tomato sauce, eggs, and bacon</p>
                                <h5>20$</h5>
                                <a href="#url" class="btn-style btn-primary btn mt-4">Order Online</a>
                                <a href="#url"><img src="{{ asset('images/p2.jpg') }}" alt="" class="img-fluid radius-image mt-4"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-grid food-info">
                            <div class="column">
                                <h4 class="name-pos"><a href="#url">Schiacciata</a></h4>
                                <p> Olive oil, ham and rosemary</p>
                                <h5>20$</h5>
                                <a href="#url" class="btn-style btn-primary btn mt-4">Order Online</a>
                                <a href="#url"><img src="{{ asset('images/p3.jpg') }}" alt="" class="img-fluid radius-image mt-4"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-grid food-info">
                            <div class="column">
                                <h4 class="name-pos"><a href="#url">Prosciutto e Funghi</a></h4>
                                <p>Tomato sauce, ham, and mushrooms</p>
                                <h5>20$</h5>
                                <a href="#url" class="btn-style btn-primary btn mt-4">Order Online</a>
                                <a href="#url"><img src="{{ asset('images/p3.jpg') }}" alt="" class="img-fluid radius-image mt-4"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-grid food-info">
                            <div class="column">
                                <h4 class="name-pos"><a href="#url">Mediterranea</a></h4>
                                <p>Tomato sauce, cherry tomatoes and pepper</p>
                                <h5>20$</h5>
                                <a href="#url" class="btn-style btn-primary btn mt-4">Order Online</a>
                                <a href="#url"><img src="{{ asset('images/p5.jpg') }}" alt="" class="img-fluid radius-image mt-4"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/testimonials-->
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-5">
			<div class="container py-lg-5 py-md-4">
				<div class="title-content text-center">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="title-big">What our Clients say</h3>
				</div>
				<div class="row mt-lg-5 mt-4">
					<div class="col-md-12 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Phillip Hunt</h4>
											<p>CEO, Zomato</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="{{ asset('images/client1.jpg') }}" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Sara Grant</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="{{ asset('images/client2.jpg') }}" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Luke Jacobs</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="{{ asset('images/client3.jpg') }}" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="message">
                                        <span class="fa fa-quote-left"></span>
										<h5>Lorem ipsum dolor sit amet consect etur adipisicing elit. Ea sit id
                                        	 officia quod quasi necess itatibus Harum necess itatibus
                                            error dam tenetur dolor elit sed init amet.</h5>
										<div class="name mt-4">
											<h4>Claire Olson</h4>
											<p>Example Company</p>
										</div>
									</div>
									<div class="img-circle">
										<img src="{{ asset('images/client4.jpg') }}" class="img-fluid testimonial-img radius-image" alt="client">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->


@endsection