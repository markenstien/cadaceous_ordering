<?php build('content')?>
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
	<ol class="carousel-indicators">
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
		<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="<?php echo _path_upload_get('background_a.jpg')?>" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left align-self-center">
							<h1 class="h1 text-success"><?php echo COMPANY_NAME?></h1>
							<h3 class="h2">Fast and Excellent Delivery</h3>
							<p>Delivering speed and reliability</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="<?php echo _path_upload_get('background_b.jpg')?>" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left">
							<h1 class="h1">Always new and Affordable</h1>
							<h3 class="h2">Our prices make your hearts healthy too.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container">
				<div class="row p-5">
					<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
						<img class="img-fluid" src="<?php echo _path_upload_get('background_c.jpg')?>" alt="">
					</div>
					<div class="col-lg-6 mb-0 d-flex align-items-center">
						<div class="text-align-left">
							<h1 class="h1">Expert Pharmacy technicians</h1>
							<h3 class="h2">Your Neighborhood Pharmacy, Your Health Advocate.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
		<i class="fas fa-chevron-left"></i>
	</a>
	<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
		<i class="fas fa-chevron-right"></i>
	</a>
</div>
<!-- End Banner Hero -->

<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>About Us</h1>
                <p>
                The Cadaceous Drug and Medica Supplies opened in 1998. Every day, the pharmacy sells thousands of medications, 
                supplying all the residents in the surrounding districts. 
                There are two branches of Cadeceous Drugs and Medical Supplies. 
                One branch is situated in Quezon City, in the NCR region of the Philippines, and the other is situated in Bulacan,
                 in Central Luzon. The drugstore's owner earned a bachelor's degree in pharmaceutical sciences and will continue to expand the Drugstore.
                </p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo _path_upload_get('cadaceous.jpg')?>" alt="About Hero">
            </div>
        </div>
    </div>
</section>

<!-- Start Contact -->
<div class="container">
    <div class="row py-5">
		<div class="col-md-6 m-auto text-center">
			<h1 class="h1">Contact Us</h1>
		</div>
        <form class="col-md-9 m-auto" method="post" role="form">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject">Subject</label>
                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="mb-3">
                <label for="inputmessage">Message</label>
                <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8" required></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" name="btn_contact" value="btn_contact" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- End Section -->


<!-- End Featured Product -->
<?php endbuild()?>

<?php loadTo('tmp/landing')?>