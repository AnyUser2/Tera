<?php

require 'config/database.php';

$db = new Database();
$con = $db->connect();

$sql = $con->prepare("SELECT id, title, descript, price FROM products WHERE active=1");

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $con->prepare("SELECT MAX(price) FROM products");

$sql->execute();

$maxValue = $sql->fetchColumn();

$sql = $con->prepare("SELECT MIN(price) FROM products");

$sql->execute();

$minValue = $sql->fetchColumn();

?>

<script>
	var minValue =parseInt('<?php echo $minValue ?>')
	var maxValue =parseInt('<?php echo $maxValue ?>')
</script>

<!doctype html>
<html lang="en">
	<head>
  		<title>Fashion Template for Bootstrap</title>

    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Bootstrap core CSS -->
    	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    	<!-- Bootstrap core CSS -->
    	<link href="css/styles.css" rel="stylesheet">
    	<link href="css/animate.css" rel="stylesheet">
    	<link href="css/owl-carousel.css" rel="stylesheet">
		<link href="css/lightbox.css" rel="stylesheet">
    	<link href="css/jquery-ui.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>

    <body id="category" class="category">

		<header class="header-area header-sticky text-center header-default">
			<div class="header-main-sticky">
				<div class="header-nav">
					<div class="container">
						<div class="nav-right float-right d-flex">
							<div class="ttheader-mail"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></div>
						</div>
					</div>
				</div>
				<div class="header-main-head">
    				<div class="header-main">
						<div class="container">
            				<div class="header-left float-left d-flex d-lg-flex d-md-block d-xs-block">
								<div class="currency-wrapper toggle">
									<a href="https://wa.me/message/TJCSGNK35EAQP1" class="contact" target="_blank">
										<i class="material-icons">forward_to_inbox</i>
										<span>Escríbenos por WhatsApp!</span>
									</a>
								</div>
							</div>
							<div class="header-middle float-left">
								<div class="logo">
									<a href="index.html"><img src="img/logos/logo.png" alt="NatureCircle"></a>		
								</div>
							</div>
							<div class="header-right d-flex d-xs-block d-sm-flex justify-content-end float-right">
								<div class="search-wrapper">
									<a>
										<i class="material-icons search">search</i>
										<i class="material-icons close">close</i>
									</a>
									<form autocomplete="off" action="/action_page.php" class="search-form">
			  							<div class="autocomplete" style="width:300px;">
											<input id="myInput" type="text" name="myCountry" placeholder="Search here">
											<button type="button"><i class="material-icons">search</i></button>
			  							</div>
									</form>
								</div>
								<div class="user-info">
									<button type="button" class="btn">
										<i class="material-icons">perm_identity</i>
									</button>
									<div id="user-dropdown" class="user-menu">
										<ul>
											<li><a href="my-account.html" class="text-capitalize">my account</a></li>
											<li><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>
											<li><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalLoginForm">login</a></li>
										</ul>
									</div>
								</div>
								<div class="cart-wrapper">
									<button type="button" class="btn">
										<i class="material-icons">shopping_cart</i>
										<span class="ttcount">2</span>
									</button>
									<div id="cart-dropdown" class="cart-menu">
                						<ul class="w-100 float-left">
                  							<li>
                    							<table class="table table-striped">
                      								<tbody>
                       									<tr>
                          									<td class="text-center"><a href="#"><img src="img/products/01.jpg" alt="01" title="01"></a></td>
                          									<td class="text-left product-name"><a href="#">aliquam quaerat voluptatem</a>
						  										<div class="quantity float-left w-100">
                             										<span class="cart-qty">1 × </span>
																	<span class="text-left price"> $20.00</span>
						    									</div>
                          									</td>
                          									<td class="text-center close"><a class="close-cart"><i class="material-icons">close</i></a></td>
                        								</tr>
                      								</tbody>
                    							</table>
                  							</li>
                  							<li>
                    							<table class="table price mb-30">
                      								<tbody>
                        								<tr>
                          									<td class="text-left"><strong>Total</strong></td>
                          									<td class="text-right"><strong>$2,122.00</strong></td>
                        								</tr>
                      								</tbody>
                   				 				</table>
                  								</li>
                  							<li class="buttons w-100 float-left">
                    							<form action="cart_page.html">
                      								<input class="btn pull-left mt_10 btn-primary btn-rounded w-100" value="View cart" type="submit">
                    							</form>
                    							<form action="checkout_page.html">
                      								<input class="btn pull-right mt_10 btn-primary btn-rounded w-100" value="Checkout" type="submit">
                    							</form>
                  							</li>
                						</ul>
          							</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="main-content w-100 float-left">
			<div class="container">
				<div class="row">
					<div class="content-wrapper col-xl-9 col-lg-9 order-lg-2">
						<div class="block-category mb-30 w-100 float-left">
							<div class="category-cover">
								<img src="img/banner/category-banner.png" alt="category-banner"/>
							</div>
							<div class="title-category text-capitalize">¡Bienvenido!</div>
							<div class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis, magna et euismod auctor, mauris ipsum interdum risus, a varius augue lacus id diam. Mauris maximus, ipsum at gravida sodales, purus tellus tempor eros, a feugiat elit odio in nunc.</div>
						</div>
						<header class="product-grid-header d-flex d-xs-block d-sm-flex d-lg-flex w-100 float-left">
							<div class="hidden-sm-down total-products d-flex d-xs-block d-lg-flex col-md-3 col-sm-3 col-xs-12 align-items-center">
								<div class="row">
									<div class="nav" role="tablist">
										<a class="grid active" href="#grid" data-toggle="tab" role="tab" aria-selected="true" aria-controls="grid"><i class="material-icons align-middle">grid_on</i></a>
										<a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false" aria-controls="list"><i class="material-icons align-middle">format_list_bulleted</i></a>
										<a class="sort" href="#sort-view" data-toggle="tab" role="tab" aria-selected="false" aria-controls="sort-view"><i class="material-icons align-middle">reorder</i></a>
									</div>
								</div>
							</div>
							<div class="shop-results-wrapper d-flex d-sm-flex d-xs-block d-lg-flex justify-content-end col-md-9 col-sm-9 col-xs-12">
								<div class="shop-results d-flex align-items-center"><span>Show</span>
                                	<div class="shop-select">
                                    	<select name="number" id="number">
                                        	<option value="9">9</option>
    	                                    <option value="25">25</option>
        	                                <option value="50">50</option>
            	                            <option value="75">75</option>
                	                        <option value="100">100</option>
                	                    </select>
                    	            </div>
								</div>
								<div class="shop-results d-flex align-items-center"><span>Sort By</span>
									<div class="shop-select">
										<select name="sort" id="sort">
											<option value="position">Default sorting</option>
											<option value="p-name">Sort Popularity</option>
											<option value="p-price">Sort Price</option>
										</select>
									</div>
								</div>
							</div>
						</header>
						<div class="tab-content text-center products w-100 float-left">
							<div class="tab-pane grid fade active" id="grid" role="tabpanel">
								<div class="row">

									<?php foreach ($result as $row) {
											
										$id = $row['id'];
										$image = "img/products/" . $id . "/main.jpg";

										if (!file_exists($image)) {
										
											$image = "img/no-photo.jpg";
										}
											
									?>
										<script>

											function setProduct(id){
												window.location = "product-details.php?id=" + id;
											}

										</script>

										<div class="product-layouts col-lg-3 col-md-3 col-sm-6 col-xs-6">
											<div class="product-thumb">
												<div class="image zoom">
													<a onclick="setProduct('<?php echo $id?>')">
														<img src="<?php echo $image; ?>" alt="01"/>
														<img src="<?php echo $image; ?>" alt="02" class="second_image img-responsive"/>							
													</a>
												</div>
												<div class="thumb-description">
													<div class="caption">
														<h4 class="product-title text-capitalize"><a href="product-details.php"><?php echo $row['title']; ?></a></h4>
													</div>
													<div class="price">
														<div class="regular-price">$<?php echo number_format($row['price'], 0, '.', ','); ?></div>
														<div class="old-price">$<?php echo $minValue; ?></div>
													</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled><i class="material-icons">shopping_cart</i><span>Out of stock</span></button>
															<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>

									<?php }?>

								</div>

							</div>

							<div class="tab-pane fade list text-left" id="list" role="tabpanel">
										

							<?php foreach ($result as $row) {
											
											$id = $row['id'];
											$image = "img/products/" . $id . "/main.jpg";
	
											if (!file_exists($image)) {
												$image = "img/no-photo.jpg";
											}
												
										?>

								<div class="product-layouts">
										<div class="product-thumb row">
											<div class="image zoom col-xs-12 col-sm-5 col-md-4">
												<a href="product-details.php" class="d-block position-relative">
													<img src="<?php echo $image; ?>" alt="01"/>
													<img src="<?php echo $image; ?>" alt="02" class="second_image img-responsive"/>	
												</a>
											</div>
											<div class="thumb-description col-xs-12 col-sm-7 col-md-8 position-static text-left">
												<div class="caption">
													<h4 class="product-title text-capitalize"><a href="product-details.php">aliquam quaerat voluptatem</a></h4>
												</div>
												<div class="description">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus arcu turpis, quis sagittis orci dictum non. Etiam id eleifend erat. Donec sit amet nisl id nisi laoreet viverra in ac nibh.											</div>
													<div class="price">
														<div class="regular-price">$100.00</div>
														<div class="old-price">$150.00</div>
													</div>
													<div class="color-option d-flex align-items-center float-left w-100">
                                        				<ul class="color-categories">
                                            				<li>
                                                				<a class="tt-pink" href="#" title="Pink"></a>                                            
															</li>
                                            				<li>
                                                				<a class="tt-blue" href="#" title="Blue"></a>                                            
															</li>
                                            				<li>
                                            				    <a class="tt-yellow" href="#" title="Yellow"></a>                                            
															</li>
                                        				</ul>
                                    				</div>
													<div class="button-wrapper">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
															<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php }?>
									</div>




							<div class="tab-pane fade sort text-left" id="sort-view" role="tabpanel">


							<?php foreach ($result as $row) {
											
											$id = $row['id'];
											$image = "img/products/" . $id . "/main.jpg";
	
											if (!file_exists($image)) {
												$image = "img/no-photo.jpg";
											}
												
										?>

										<div class="product-layouts">
											<div class="product-thumb row">
												<div class="image zoom col-xs-12 col-sm-3 col-md-2">
													<a href="product-details.php" class="d-block position-relative">
														<img src="img/products/08.jpg" alt="08"/>
														<img src="img/products/09.jpg" alt="09" class="second_image img-responsive"/>											
													</a>										
												</div>
												<div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
													<div class="sort-title col-md-5 col-sm-7 float-left">
														<div class="caption">
															<h4 class="product-title text-capitalize"><a href="product-details.php">suscipit laboriosam nisi</a></h4>
														</div>

													<div class="description mb-10">
														Duis tincidunt ante urna, sit amet vestibulum felis placerat in. Duis a tortor et odio consequat congue. Mauris euismod augue tempor, sagittis nisl sed, pretium purus.											</div>
													</div>
													<div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
														<div class="price">
															<div class="regular-price">$100.00</div>
															<div class="old-price">$150.00</div>
														</div>
													</div>
													<div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
														<div class="button-group text-center">
															<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
															<a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
															<button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
															<button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php }?>

									</div>
								</div>
								<div class="pagination-wrapper float-left w-100">
									<p>Showing 1 to 9 of 11 (2 Pages)</p>
									<nav aria-label="Page navigation example">
  										<ul class="pagination">
    										<li class="page-item">
      											<a class="page-link" href="#" aria-label="Previous">
        											<span aria-hidden="true">&laquo;</span>
        											<span class="sr-only">Previous</span>
      											</a>
    										</li>
   											<li class="page-item active"><a class="page-link" href="#">1</a></li>
    										<li class="page-item"><a class="page-link" href="#">2</a></li>
    										<li class="page-item"><a class="page-link" href="#">3</a></li>
    										<li class="page-item">
      											<a class="page-link" href="#" aria-label="Next">
        											<span aria-hidden="true">&raquo;</span>
        											<span class="sr-only">Next</span>
      											</a>
    										</li>
  										</ul>
									</nav>
								</div>
								</div>
							<div class="left-column sidebar col-xl-3 col-lg-3 order-lg-1">
								<div class="sidebar-filter left-sidebar w-100 float-left">
									<div class="title">
										<a data-toggle="collapse" href="#sidebar-main" aria-expanded="false" aria-controls="sidebar-main" class="d-lg-none block-toggler">Product Categories</a>					
									</div>
									<div id="sidebar-main" class="sidebar-main collapse">
										<div class="sidebar-block categories">
											<h3 class="widget-title"><a data-toggle="collapse" href="#categoriesMenu" role="button" aria-expanded="true" aria-controls="categoriesMenu">Categories</a></h3>
											<div id="categoriesMenu" class="expand-lg collapse show">
					  							<div class="nav nav-pills flex-column mt-4"> <a href="#" class="nav-link d-flex justify-content-between mb-2 "><span>Jackets</span><span class="sidebar-badge"> 120</span></a>
													<div class="nav nav-pills flex-column ml-3">
														<a href="#" class="nav-link mb-2">Lorem ipsum</a>
														<a href="#" class="nav-link mb-2">Donec vitae</a>
													</div>
													<a href="#" class="nav-link d-flex justify-content-between mb-2 active"><span>Jeans &amp; chinos</span><span class="sidebar-badge"> 55</span></a>
													<div class="nav nav-pills flex-column ml-3">
														<a href="#" class="nav-link mb-2">Dolor</a>
														<a href="#" class="nav-link mb-2">Sit amet</a>
													</div>
					  							</div>
											</div>
										</div>
										<div class="sidebar-block price">
											<h3 class="widget-title"><a data-toggle="collapse" href="#price" role="button" aria-expanded="true" aria-controls="price">Price</a></h3>
											<div id="price" class="collapse show">
												<div class="price-inner">
					  								<label for="amount">Price range:</label>
					  								<input type="text" id="amount" readonly style="border:0; font-weight:bold; background:none;">
					  								<div id="slider-range" min="20"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sidebar-left-banner left-sidebar w-100 float-left">
									<div class="ttleftbanner">
										<a href="#">
											<img src="img/banner/left-banner.jpg" alt="left-banner"/>
										</a>
									</div>
								</div>
								<div class="sidebar-product left-sidebar w-100 float-left">
									<div class="title">
										<a data-toggle="collapse" href="#sidebar-product" aria-expanded="false" aria-controls="sidebar-product" class="d-lg-none block-toggler">sale products</a>					
									</div>
									<div id="sidebar-product" class="collapse w-100 float-left">
										<div class="sidebar-block sale ">
											<h3 class="widget-title text-capitalize">sale products</h3>
											<div class="products owl-carousel">
												<div class="sale-col">
													
							<div class="product-layouts">
								<div class="product-thumb">
									<div class="image col-sm-4 float-left">
										
										<div class="image zoom">
													<a href="product-details.php">
														<img src="<?php echo $image; ?>" alt="01"/>
														<img src="<?php echo $image; ?>" alt="02" class="second_image img-responsive"/>							
													</a>
												</div>																	</div>
									<div class="thumb-description col-sm-8 text-left float-left">
										<div class="caption">
											<h4 class="product-title text-capitalize"><a href="product-details.php">aliquam quat voluptatem</a></h4>
										</div>
										<div class="rating">
										<div class="price">
											<div class="regular-price">$100.00</div>
											<div class="old-price">$150.00</div>
										</div>
										<div class="button-wrapper">
										<div class="button-group text-center">
											<button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
										</div>
										</div>
									</div>
								</div>
							</div>
							</div>
					</div>
					</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		</div>


    <!-- Footer -->
	<div class="block-newsletter">

			</div>
<footer class="page-footer font-small footer-default">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-2 footer-cms footer-column">
			<div class="ttcmsfooter">
              <div class="footer-logo"><img src="img/logos/footer-logo.png" alt="footer-logo"></div>
              <div class="footer-desc">At vero eos et accusamus et iusto odio dignissimos ducimus, duis faucibus enim vitae</div>
			  </div>
		</div>
        <div class="col-md-2 footer-column">
		<div class="title">
          <a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">company</a>		  </div>
          <ul id="company" class="list-unstyled collapse">
            <li>
              <a href="#">search</a>            </li>
            <li>
              <a href="#">New Products</a>            </li>
            <li>
              <a href="category.html">Best Collection</a>            </li>
            <li>
              <a href="wishlist.html">wishlist</a>            </li>
          </ul>
        </div>
        <div class="col-md-2 footer-column">
			<div class="title">
          <a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">products</a>		  </div>
          <ul id="products" class="list-unstyled collapse">
            <li>
              <a href="blog-details.html">blog</a>            </li>
            <li>
              <a href="about-us.html">about us</a>            </li>
            <li>
              <a href="contact-us.html">contact us</a>            </li>
            <li>
              <a href="my-account.html">my account</a>            </li>
          </ul>

        </div>
		<div class="col-md-2 footer-column">
					<div class="title">
          <a href="#account" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">your account</a>		  </div>
  <ul id="account" class="list-unstyled collapse">
	<li>
	  <a href="blog-details.html">personal info</a>            </li>
	<li>
	  <a href="#">orders</a>            </li>
	<li>
	  <a href="contact-us.html">addresses</a>            </li>
	<li>
	  <a href="my-account.html">my wishlists</a>            </li>
  </ul>

</div>
        <div class="col-md-2 footer-column">
		<div class="title">
          <a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">store information</a>		  </div>
          <ul id="information" class="list-unstyled collapse">
            <li class="contact-detail links">
              <span class="address">
			  		<span class="icon"><i class="material-icons">location_on</i></span>
					<span class="data"> 4030, Central Bazzar, opp. Varachha Police Station, Varachha Main Road, Surat, Gujarat 395006, India</span>			  </span>            </li>
            <li class="links">
               <span class="contact">
			  		<span class="icon"><i class="material-icons">phone</i></span>
					<span class="data"><a href="tel:(99)55669999">+ (99) 55-669-999</a></span>			  </span>            </li>
            <li class="links">
               <span class="email">
			  		<span class="icon"><i class="material-icons">email</i></span>
					<span class="data"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></span> </span>           </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Copyright -->
	<div class="footer-bottom-wrap">
		<div class="container">
		<div class="row">
		<div class="footer-copyright text-center py-3">
              © 2023 - TERA™
		</div>
		</div>
    </div>
	</div>
         <a href="#" id="goToTop" title="Back to top" class="btn-primary"><i class="material-icons arrow-up">keyboard_arrow_up</i></a>


  </footer>
  <!-- Footer -->


  <!-- Register modal -->
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-medium text-left">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <input type="text" id="RegisterForm-name" class="form-control validate" placeholder="Your name">
        </div>
        <div class="md-form mb-4">
          <input type="email" id="RegisterForm-email" class="form-control validate" placeholder="Your email">
        </div>
        <div class="md-form mb-4">
          <input type="password" id="RegisterForm-pass" class="form-control validate" placeholder="Your password">
        </div>
		<div class="checkbox-link d-flex justify-content-between">
		<div class="left-col">
			<input id="remember-me" type="checkbox"><label for="remember_me">Remember Me</label>
		</div>
		<div class="right-col"><a href="#">Forget Password?</a></div>
	</div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Sign up</button>
      </div>
    </div>
  </div>
</div>

<!-- Login modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-medium text-left">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <input type="text" id="LoginForm-name" class="form-control validate" placeholder="Your name">
        </div>
        <div class="md-form mb-4">
          <input type="password" id="LoginForm-pass" class="form-control validate" placeholder="Your password">
        </div>
		<div class="checkbox-link d-flex justify-content-between">
		<div class="left-col">
			<input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
		</div>
		<div class="right-col"><a href="#">Forget Password?</a></div>
	</div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </div>
</div>

<!-- product_view modal -->

<?php foreach ($result as $row) {

    $id = $row['id'];
    $image = "img/products/" . $id . "/main.jpg";

    if (!file_exists($image)) {
        $image = "img/no-photo.jpg";
    }

    ?>


  <div class="modal fade product_view" id="product_view_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			 <h4 class="modal-title w-100w-100w-100 font-weight-bold d-none">Quick view</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6 left-columm">
						<div class="product-large-image tab-content">
						<div class="tab-pane active" id="product-1" role="tabpanel" aria-labelledby="product-tab-1">
							<div class="single-img img-full">
								<a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-2" role="tabpanel" aria-labelledby="product-tab-2">
							<div class="single-img">
								<a href="img/products/02.jpg"><img src="img/products/02.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-3" role="tabpanel" aria-labelledby="product-tab-3">
							<div class="single-img">
								<a href="img/products/03.jpg"><img src="img/products/03.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-4" role="tabpanel" aria-labelledby="product-tab-4">
							<div class="single-img">
								<a href="img/products/04.jpg"><img src="img/products/04.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-5" role="tabpanel" aria-labelledby="product-tab-5">
							<div class="single-img">
								<a href="img/products/05.jpg"><img src="img/products/05.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
				</div>
				<div class="small-image-list float-left w-100">
                                <div class="nav-add small-image-slider-single-product-tabstyle-3 owl-carousel" role="tablist">
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-1" href="#product-1" class="img active"><img src="img/products/01.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-2" href="#product-2" class="img"><img src="img/products/02.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-3" href="#product-3" class="img"><img src="img/products/03.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-4" href="#product-4" class="img"><img src="img/products/04.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-5" href="#product-5" class="img"><img src="img/products/05.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
				</div>
				<div class="col-md-6 product_content">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings d-inline-block align-middle">
																				<span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>			</div>							</div>
					<span class="description float-left w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>

					<div class="product-variants float-left w-100">
						<div class="col-md-4 col-sm-6 col-xs-12 size-options d-flex align-items-center">
											<h5>Size:</h5>

								<select class="form-control" name="select">
											<option value="" selected="">Size</option>
											<option value="black">Medium</option>
											<option value="white">Large</option>
											<option value="gold">Small</option>
											<option value="rose gold">Extra large</option>
								</select>
						</div>
						<div class="color-option d-flex align-items-center">
                                        <h5>color :</h5>
                                        <ul class="color-categories">
                                            <li class="active">
                                                <a class="tt-pink" href="#" title="Pink"></a>
                                            </li>
                                            <li>
                                                <a class="tt-blue" href="#" title="Blue"></a>
                                            </li>
                                            <li>
                                                <a class="tt-yellow" href="#" title="Yellow"></a>
                                            </li>
                                        </ul>
                                    </div>
					</div>
					<div class="btn-cart d-flex align-items-center float-left w-100">
						<h5>qty:</h5>
						<input value="1" type="number">
						<button type="button" class="btn btn-primary"><i class="material-icons">shopping_cart</i> Add To Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php }?>

  <!-- cart-pop modal -->
<div class="modal fade" id="cart-pop" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-success">
			 <h4 class="modal-title w-100w-100w-100">Product successfully added to your shopping cart</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
			<div class="col-md-6 divide-right">
			<div class="row">
				<div class="col-md-5 col-xs-4 product-img float-left">
					<img src="img/products/01.jpg" class="img-responsive" alt="01">
				</div>
				<div class="col-md-7 col-xs-8 product-desc float-left">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings d-inline-block align-middle">
					<span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span></div></div>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
				</div>
			</div>
			</div>
				<div class="col-md-6 divide-left">
					<p class="cart-products-count">There are 2 items in your cart.</p>
					<p class="total-products float-left w-100">
						<strong>Total products:</strong> $150.00
					</p>
					<p class="shipping float-left w-100">
						<strong>Total shipping:</strong> free
					</p>
					<p class="total-price float-left w-100">
						<strong>Total:</strong> $150.00(tax incl.)
					</p>
					<div class="cart-content-btn float-left w-100">
					<form action="#">
                      <input class="btn pull-right mt_10 btn-primary" value="Continue shopping" type="submit">
                    </form>
					<form action="checkout_page.html">
                      <input class="btn pull-right mt_10 btn-secondary" value="Proceed to checkout" type="submit">
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="compare-wrapper float-left w-100">
	<div class="compare-inner d-flex align-items-center p-20">
		<span class="close"><i class='material-icons'>
  close
</i></span>
		<div class="col-xs-12 col-sm-2 col-md-3 float-left d-flex align-items-center flex-column compare-left">
		<h2>compare products</h2>
		<div class="compare-btn">show all</div>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-9 d-flex float-left align-items-center compare-right">
			<div class="compare-close-btn"></div>
			<div class="compare-products d-flex col-sm-7 col-lg-5">
			<div class="row">
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="img/products/01.jpg" class="img-fluid" alt=""></div>
				</div>
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="img/products/02.jpg" class="img-fluid" alt=""></div>
				</div>
				<div class="single-item col-sm-4 col-xs-4">
					<div class="remove"></div>
					<div class="image"><img src="img/products/03.jpg" class="img-fluid" alt=""></div>
				</div>
			</div>
			</div>
			<div class="buttons col-sm-5 col-lg-2">
				<div class="clear-btn btn btn-primary float-left w-100 mb-15">clear</div>
				<a href="compare.html" class="compare-btn btn btn-primary float-left w-100">compare</a>
			</div>
		</div>
	</div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/ResizeSensor.min.js"></script>
	<script src="js/theia-sticky-sidebar.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>

	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ac1aabb4b401e45400e4197/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		</body>
</html>




