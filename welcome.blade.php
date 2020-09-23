<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" id="bootstrap-css">



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js
"></script>





        <title>Quick Start</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: red;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
*/
            .login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{
    background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; 
    background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;
}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}



.row {
  margin: -10px 0;
}
.col {
  padding: 10px 0;
}
.price {
  margin: 0;
  padding: 0;
  list-style-type: none;
  -webkit-transition: .3s;
  transition: .3s;
}
.price:hover {
  box-shadow: 0 8px 12px rgba(0, 0, 0, .2);
}
li {
  padding: 20px;
  font-size: 17px;
  text-align: center;
  border-bottom: 2px solid #d11141;
  letter-spacing: 1px;
}
.header {
  color: white;
  font-size: 27px;
  background-color: #0a7b83;
}
.col:nth-child(2) .header {
  color: #7e621d;
  background-color: #ffd265;
}
.red {
  color: white;
  font-size: 22px;
  background-color: #d11141;
}
.button {
  color: #7e621d;
  padding: 10px 25px;
  font-size: 19px;
  text-decoration: none;
  background-color: #ffd265;
}
p {
  font-size: 18px;
}

@media only screen and (min-width: 600px) {
  .row {
    margin: 0 -10px;
  }
  .row::after {
    clear: left;
    content: '';
    display: block;
  }
  .col {
    float: left;
    width: calc(100%/3);
    padding: 0 10px;
  }
}


.bg-gradient {
background: #C9D6FF;
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF); 
background: linear-gradient(to right, #E2E2E2, #C9D6FF);
} 
ul li {
  margin-bottom:1.4rem;
}
.pricing-divider {
border-radius: 20px;
background: #C64545;
padding: 1em 0 4em;
position: relative;
}
.blue .pricing-divider{
background: #2D5772; 
}
.green .pricing-divider {
background: #1AA85C; 
}
.red b {
  color:#C64545
}
.blue b {
  color:#2D5772
}
.green b {
  color:#1AA85C
}
.pricing-divider-img {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 80px;
}
.deco-layer {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
}
.btn-custom  {
  background:#C64545; color:#fff; border-radius:20px
}

.img-float {
  width:50px; position:absolute;top:-3.5rem;right:1rem
}

.princing-item {
  transition: all 150ms ease-out;
}
.princing-item:hover {
  transform: scale(1.05);
}
.princing-item:hover .deco-layer--1 {
  -webkit-transform: translate3d(15px, 0, 0);
  transform: translate3d(15px, 0, 0);
}
.princing-item:hover .deco-layer--2 {
  -webkit-transform: translate3d(-15px, 0, 0);
  transform: translate3d(-15px, 0, 0);
}



           
        </style>
    </head>
    <body>

        <section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Login Now</h2>
            <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>

        </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
  </div>
            </div>     
            
        </div>
    </div>
    <input type='text' class="form-control" id='datepicker' placeholder='Select Date' style='width: 300px;' ><br><br>

 <input type='text' class="form-control" id='datepicker2' placeholder='Select Date' style='width: 300px;' >
</div>

</section>



 
 


<!-- 

<div class="container">
    <div class="row">
        <div class="paymentCont">
                        <div class="headingWrap">
                                <h3 class="headingTop text-center">Select Your Payment Method</h3>  
                                <p class="text-center">Created with bootsrap button and using radio button</p>
                        </div>
                        <div class="paymentWrap">
                            <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                <label class="btn paymentMethod active">
                                    <div class="method visa"></div>
                                    <input type="radio" name="options" checked> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method master-card"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method amex"></div>
                                    <input type="radio" name="options">
                                </label>
                                 <label class="btn paymentMethod">
                                    <div class="method vishwa"></div>
                                    <input type="radio" name="options"> 
                                </label>
                                <label class="btn paymentMethod">
                                    <div class="method ez-cash"></div>
                                    <input type="radio" name="options"> 
                                </label>
                             
                            </div>        
                        </div>
                        <div class="footerNavWrap clearfix">
                            <div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> CONTINUE SHOPPING</div>
                            <div class="btn btn-success pull-right btn-fyi">CHECKOUT<span class="glyphicon glyphicon-chevron-right"></span></div>
                        </div> 
                    </div>
        
    </div>
</div> -->

<div class="row">
  <div class="col">
    <ul class="price">
      <li class="header">Basic</li>
      <li class="red">$ 9.99 / year</li>
      <li>10GB Storage</li>
      <li>10 Emails</li>
      <li>10 Domains</li>
      <li>1GB Bandwidth</li>
      <li class="red"><a href="#" class="button">Sign Up</a></li>
    </ul>
  </div>

  <div class="col">
    <ul class="price">
      <li class="header">Pro</li>
      <li class="red">$ 24.99 / year</li>
      <li>25GB Storage</li>
      <li>25 Emails</li>
      <li>25 Domains</li>
      <li>2GB Bandwidth</li>
      <li class="red"><a href="#" class="button">Sign Up</a></li>
    </ul>
  </div>

  <div class="col">
    <ul class="price">
      <li class="header">Premium</li>
      <li class="red">$ 49.99 / year</li>
      <li>50GB Storage</li>
      <li>50 Emails</li>
      <li>50 Domains</li>
      <li>5GB Bandwidth</li>
      <li class="red"><a href="#" class="button">Sign Up</a></li>
    </ul>
  </div>
</div>



<div class="container-fluid bg-gradient p-5">
      <div class="row m-auto text-center w-75">
        
        <div class="col-4 princing-item red">
          <div class="pricing-divider ">
              <h3 class="text-light">START-UP</h3>
            <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>
          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
              <li><b>10</b> users included</li>
              <li><b>2 GB</b> of storage</li>
              <li><b>Free </b>Email support</li>
              <li><b>Help center access</b></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
          </div>
        </div>
       

        
        
        <div class="col-4 princing-item blue">
          <div class="pricing-divider ">
              <h3 class="text-light">BUSINESS</h3>
            <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
              <li><b>100 </b>users included</li>
              <li><b>10 GB</b> of storage</li>
              <li><b>Free</b>Email support</li>
              <li><b>Help center access</b></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
          </div>
        </div>
               
        
  
        
        
         
        <div class="col-4 princing-item green">
          <div class="pricing-divider ">
              <h3 class="text-light">PRO</h3>
            <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 450 <span class="h5">/mo</span></h4>
             <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
    c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
    c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
    H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
    c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
          </div>

          <div class="card-body bg-white mt-0 shadow">
            <ul class="list-unstyled mb-5 position-relative">
              <li><b>300</b> users included</li>
              <li><b>20 GB</b> of storage</li>
              <li><b>Free</b> Email support</li>
              <li><b>Help center access</b></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up for free</button>
          </div>
        </div>
               
         
        
        
        
        
      </div>
    </div>

<form id="confirmInfo" action="bookingsuccess.html">
  <p>Number of tickets :
    <input type="number" />
  </p>
  <p>Price Per ticket : $7</p>
  <p>Booking fee : $2</p>
  <p>Subtotal : <b>$<span id="total">0</span></b>
  </p>
  <form name="myform" action="bookingsuccess.php" method="post">
    <button>Book</button>
  </form>
  <button>Cancel</button>
</form>





<div class="shopping-cart">
 
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
 
  <div class="product">
    <div class="product-image">
      <img src="images/nike.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Nike Flex Form TR Women's Sneaker</div>
      <p class="product-description"> It has a lightweight, breathable mesh upper with forefoot cables for a locked-down fit.</p>
    </div>
    <div class="product-price">12.99</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>
 
  <div class="product">
    <div class="product-image">
      <img src="images/adidas.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">ULTRABOOST UNCAGED SHOES</div>
      <p class="product-description">Born from running culture, these men's shoes deliver the freedom of a cage-free design</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div>
 
  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
       
      <button class="checkout">Checkout</button>
 
</div>




<style>
    .product-image {
  float: left;
  width: 20%;
}
 
.product-details {
  float: left;
  width: 37%;
}
 
.product-price {
  float: left;
  width: 12%;
}
 
.product-quantity {
  float: left;
  width: 10%;
}
 
.product-removal {
  float: left;
  width: 9%;
}
 
.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}
 
/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
  content: '';
  display: table;
}
 
.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}
 
.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}
 
/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}
 
/* Body/Header stuff */
body {
  padding: 0px 30px 30px 20px;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 100;
}
 
h1 {
  font-weight: 100;
}
 
label {
  color: #aaa;
}
 
.shopping-cart {
  margin-top: -45px;
}
 
/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}
 
/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}
 
/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}
 
.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}
 
.checkout:hover {
  background-color: #494;
}
 
/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }
 
  .column-labels {
    display: none;
  }
 
  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }
 
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
 
  .product-price {
    clear: both;
    width: 70px;
  }
 
  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }
 
  .product-quantity:before {
    content: 'x';
  }
 
  .product-removal {
    width: auto;
  }
 
  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }
 
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
 
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
 
  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}
</style>






<!-- Script -->
<script type="text/javascript">
$(document).ready(function(){
 
  $('#datepicker').datepicker({
   format: "yy-mm-dd",
   startDate: '-1y -1m',
   endDate: '+2m +10d'
  });

  $('#datepicker2').datepicker({
   format: "yy-mm-dd",
   startDate: '-1m',
   endDate: '+10d'
  }); 
});
</script>

<script>
var perTicket = 7;
var bookingFee = 2;
var $subTotal = $('#total');

$('input[type="number"]').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total = $(this).val() * perTicket + bookingFee;
  $subTotal.text(total);

})
</script>

<script>$(document).ready(function() {
 
/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;
 
 
/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});
 
$('.product-removal button').click( function() {
  removeItem(this);
});
 
 
/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
   
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
   
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
   
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}
 
 
/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
   
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}
 
 
/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
 
});
 
</script>

       
    </body>
</html>
