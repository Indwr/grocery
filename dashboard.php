<?php 
  require 'include/header.php';
  ?>
  <body data-col="2-columns" class=" 2-columns ">
      <div class="layer"></div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <?php include('main.php'); ?>
      <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->

<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Dashboard</h4>
					
				</div>
				<div class="card-body" style="padding:10px;">
				   <div class="row" matchheight="card">
    <div class="col-xl-3 col-lg-6 col-12">
	
      <div class="card">
	  <a href="categorylist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 danger"><?php echo $con->query("select * from category")->num_rows;?></h3>
                <span>Total Category</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-list danger font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		 </a>
      </div>
	 
    </div>
    
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="subcategorylist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 danger"><?php echo $con->query("select * from subcategory")->num_rows;?></h3>
                <span>Total Sub Cat.</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-list danger font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="productlist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 success"><?php echo $con->query("select * from product")->num_rows;?></h3>
                <span>Total Product</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-basket-loaded success font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
	
	<div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="couponlist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 success"><?php echo $con->query("select * from tbl_coupon")->num_rows;?></h3>
                <span>Total Coupon</span>
              </div>
              <div class="media-right align-self-center">
                <i class="fa fa-gift success font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="alist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 warning"><?php echo $con->query("select * from area_db")->num_rows;?></h3>
                <span>Total Area</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-pie-chart warning font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="tlist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 primary"><?php echo $con->query("select * from timeslot")->num_rows;?></h3>
                <span>Total Timeslot</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-hourglass primary font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="bannerlist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 primary"><?php echo $con->query("select * from banner")->num_rows;?></h3>
                <span>Total Banner</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-screen-desktop primary font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="user.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 success"><?php echo $con->query("select * from user")->num_rows;?></h3>
                <span>Total Customer</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-user success font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="order.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 danger"><?php echo $con->query("select * from orders where status='pending'")->num_rows;?></h3>
                <span>Pending Order</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-handbag danger font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="orders.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 primary"><?php echo $con->query("select * from orders where status='completed'")->num_rows;?></h3>
                <span>Complete Order</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-handbag primary font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="order.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 warning"><?php echo $con->query("select * from orders where status='cancelled'")->num_rows;?></h3>
                <span>Cancelled Order</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-handbag warning font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
	 
      <div class="card">
	  <a href="orderrate.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 danger"><?php echo $con->query("select * from rate_order")->num_rows;?></h3>
                <span>Customer Rating</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-like danger font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
	  
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="feed.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 primary"><?php echo $con->query("select * from feedback")->num_rows;?></h3>
                <span>Total Feedback</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-bubbles primary font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 success"><?php $sales  = $con->query("select sum(total) as full_total from orders where status='completed'")->fetch_assoc();
               
                 if($sales['full_total'] == ''){echo 0;}else {echo number_format((float)$sales['full_total'], 2, '.', ''); } ?></h3>
                <span>Total Sales</span>
              </div>
              <div class="media-right align-self-center">
                <i class="icon-rocket success font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	 <div class="col-xl-3 col-lg-6 col-12">
      <div class="card">
	  <a href="riderlist.php">
        <div class="card-content">
          <div class="px-3 py-3">
            <div class="media">
              <div class="media-body text-left">
                <h3 class="mb-1 primary"><?php echo $con->query("select * from rider")->num_rows;?></h3>
                <span>Total Deliv. Boy</span>
              </div>
              <div class="media-right align-self-center">
                <i class="fa fa-motorcycle primary font-large-2 float-right"></i>
              </div>
            </div>
          </div>
        </div>
		</a>
      </div>
    </div>
    
  </div>



          </div>
        </div>

        

      </div>
    </div>
    <style>
      ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
    </style>
  
    <style>
        .col-xl-3.col-lg-6.col-12 > .card {
    background: aliceblue;
}
        
    </style>
   <?php 
  require 'include/js.php';
  require 'include/footer.php';
  ?>
    
 
  </body>

  <footer class="footer-section">
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; <?= date('Y') ?>, All Right Reserved By Dot Com Labs LLP</p>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
</html>
