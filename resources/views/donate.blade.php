@extends('layouts.app')

  

    <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic" />
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  
  <script type="text/javascript">
    function doCreateNewWindow (inUrl,inWidth,inHeight,inScroll) {
      var winl=(screen.availWidth-inWidth)/2;
      var wint=(screen.availHeight-inHeight)/2-40;

      window.open(inUrl,'cme_demo','plainWindow,width=' + inWidth +',height=' + inHeight + ',top='+wint+',left='+winl+',screenX='+wint+',screenY='+winl+',scrollbars='+inScroll);
    }
    
    
    /* pull value of dept/division in URL and add to "other" text field */
    
    
    var dept = $.url(window.location.href).param('dept');
    
    
    $(document).ready(function(){
      
      if(typeof(dept) !== "undefined" && dept !== "" ) {
          $("#designation_other").val(decodeURIComponent(dept));
        $("#radio_other").attr("checked", "checked"); 
      }
    });
    
    
  </script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.lockfixed-revB.js"></script>
  <script src="js/main.js"></script>
      
@section('content')
<div id="page" style="float:left padding-right:0px; padding-left:100px; overflow: hidden;
width: calc(1024px + 0); background: #fff;">
    <header id="header" role="banner" style="margin: 0 auto;
display: block;
float: none;
box-sizing: border-box;
-webkit-box-sizing: border-box">


    
    <div id="branding" style="margin-top:30px; ">
      <a id="logo"  href="" target="_blank"></a>
    </div>

  </header>
<h1 class="site-title" style="background: #cf4520;text-align: center;
color: #fff;
padding-bottom: 0;
padding-top: 0.25em;
margin-top: 0;
line-height: 1.5;
font-size: 4.8rem;
font-family: "1898Sans-Regular", sans-serif;
position: relative;
-webkit-transition: all 0.25s 0s;
-moz-transition: all 0.25s 0s;
-ms-transition: all 0.25s 0s;
-o-transition: all 0.25s 0s;
transition: all 0.25s 0s;">Donate Now</h1>
<div id="main" style="max-width: 960px;
padding: 0 10px;clear: both;
background: #fff;
overflow: hidden;
min-height: 400px;" class="clearfix;">
<div class="panel-2col-right" style="margin: 0;
padding: 0; box-sizing: border-box;">
      <div class="hero-image">
      <div class="panel-pane pane-page-title">   
  
      <h1 id="title" style="padding-top: 50px; color: #b31b1b;">Your Information</h1>

      </div>
    </div>
    <div id="main-content" class="main-content" role="main" style="display: inline;
float: left;
width: 66.66667%;
margin: 0 0%;
padding: 0 15px 45px 0;"> 
  
  <div class="view view-panopoly-widgets-general-content view-id-panopoly_widgets_general_content">  
  <div class="view-content">
  <div class="views-row views-row-1 views-row-odd views-row-first views-row-last clearfix">
  <article class="node node-promoted clearfix">

  <div class="row">
    <div class="form-item col-md-5" style="border-radius:10px;">
    <label>* First Name</label>
    <input class="form-control required" type="text" name="first_name" value="" size="30">
   </div>

    <div class="form-item col-md-2">
    <label>Initia  nl</label>
    <input class="form-control required" type="text" name="middle_initial" value="" size="5">
    </div>

    <div class="form-item col-md-5">
    <label>* Last Name</label>
   <input class="form-control required" type="text" name="last_name" value="" size="60">
  </div>

 </div>

  <div class="row">
    <div class="form-item col-md-3">
      <label>Suffix</label>
      <input class="form-control form-text" type="text" name="suffix" value="" size="30" maxlength="6">
    </div>
  </div>

  <div class="row">
    <div class="form-item col-md-12">
    <label>Are you an Alumnus/a</label>
    <input class="form-radio" type="radio" name="alumnus" value="yes"> Yes&nbsp;&nbsp;
    <input class="form-radio" type="radio" name="alumnus" value="no"> No
	</div>
  </div>

  <div class="row">
    <div class="form-item col-md-12">
    <label>Preferred Address</label>
    <input class="form-radio" type="radio" name="preferred_address" value="home"> Home &nbsp;&nbsp;
    <input class="form-radio" type="radio" name="preferred_address" value="business"> Business
    </div>
  </div>

  <div class="row">
    <div class="form-item col-md-12">
      <label>Business Name</label>
      <input class="form-control" type="text" name="business_name" size="30">
    </div>
  </div>


  <div class="row">
    <div class="form-item col-md-6">
      <label>City</label>
      <input class="form-control" type="text" name="city" size="20">
    </div>
    <div class="form-item col-md-3">
      <label>State</label>
      <select class="form-control form-select" style="max-width:110px" name="state">
        <option value="" default>--</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>

    </div>
    <div class="form-item col-md-3">
      <label>Zipcode</label>
      <input class="form-control" type="text" name="zip" size="20">
    </div>
  </div>

  <div class="row">
    <div class="form-item col-md-7">
      <label>Telephone</label>
      <input class="form-control" type="text" name="telephone" placeholder="(XXX) XXX-XXXX" size="12">
    </div>

    <div class="form-item col-md-5">
      <label>&nbsp;</label>
      <select class="form-control form-select" name="telephone_type">
        <option value="home">Home</option>
        <option value="business">Business</option>
        <option value="mobile">Mobile</option>
      </select>
    </div>


  </div>
    <div class="row">
    <div class="form-item col-md-12">
      <label>* Email</label>
      <input class="form-control" type="text" name="email" size="30">
    </div>
  </div>

    <div class="row">
    <div class="form-item col-md-12">
      <label>* Confirm your email address</label>
      <input class="form-control" type="text" name="check" size="30">
    </div>
  </div>


<hr>

<h1 id="title">About Your Gift</h1>

<div class="row">
    <div class="form-item col-md-8">
    <label>Designation</label>
    <input class="form-radio" type="radio" name="designation" value="Greatest Need" style="margin-bottom:10px"> Where the need is greatest
    <br />
    <input class="form-radio" type="radio" name="designation" value="Student Scholarships" style="margin-bottom:10px"> Student Scholarships
    <br />
    <input class="form-radio" type="radio" name="designation" value="Patient Care" style="margin-bottom:10px"> Patient Care
    <br />
    <input class="form-radio" type="radio" name="designation" value="Medical Research" style="margin-bottom:10px"> Medical Research
    <br />
    <input class="form-radio" type="radio" name="designation" value="Entrepreneurship" style="margin-bottom:10px"> Entrepreneurship
    <br />
    <input class="form-radio" type="radio" name="designation" value="My Medical College Class Fund" style="margin-bottom:10px"> My Medical College Class Fund (MD alums only)
    <br />
    <input class="form-radio" type="radio" name="designation" value="Graduate School" style="margin-bottom:10px"> Graduate School
    <br />
    <input class="form-radio" type="radio" name="designation" value="other" id="radio_other" style="margin-bottom:10px"> Other &nbsp;&nbsp;
    <input class="form-control" type="text" name="designation_other" id="designation_other" size="20">
    </div>
  </div>

<div class="row">
    <div class="form-item col-md-12">
    <label>This gift should be applied towards a pledge</label>
    <input class="form-radio" type="radio" name="pledge" value="yes"> Yes &nbsp;&nbsp;&nbsp;
    <input class="form-radio" type="radio" name="pledge" value="No"> No
    </div>
  </div>

  <div class="row">
    <div class="form-item col-md-6">
    <label>Will you be using a corporate credit card?</label>
    <input class="form-radio" type="radio" name="corporate_card" value="yes" style="margin-bottom:10px"> Yes, Company name: &nbsp;&nbsp; 
    <input class="form-control" type="text" name="company_name" size="20">
    </div>
    <div class="form-item col-md-3">
    <label>&nbsp;</label>
    <input class="form-radio" type="radio" name="corporate_card" value="no"> No
    </div>
  </div>
<hr>

<h1 id="title">Tribute </h1>
<h5 style="margin-top:-8px;font-size: 1.3rem;
line-height: 1.95rem;
font-weight: normal;
color: #605648;
text-transform: uppercase;">Optional</h5>

<div class="row">
    <div class="form-item col-md-6">
    <label>This gift is made in memory of:</label>
    <input class="form-control" type="text" name="Memory Of" size="4">
    </div>
</div>

<div class="row">
    <div class="form-item col-md-6">
    <label>This gift is made in honor of:</label>
    <input class="form-control" type="text" name="Honor Of" size="4">
    </div>
</div>

<p>Please identify who should be notified of this tribute gift. Gift amount will not be included.</p>

  <div class="row">
    <div class="form-item col-md-12">
      <label>Name</label>
      <input class="form-control" type="text" name="notify_name" size="30">
    </div>
  </div>

  <div class="row">
    <div class="form-item col-md-12">
      <label>Street Address</label>
      <input class="form-control" type="text" name="notify_address" size="30">
    </div>
  </div>


  <div class="row">
    <div class="form-item col-md-6">
      <label>City</label>
      <input class="form-control" type="text" name="notify_city" size="20">
    </div>
    <div class="form-item col-md-3">
      <label>Country</label>
      <select class="form-control form-select" style="max-width:110px" name="notify_state">
        <option value="" default>--</option>
        <option value="AL">Kenya</option>
        
      </select>

    </div>
    <div class="form-item col-md-3">
      <label>Zipcode</label>
      <input class="form-control" type="text" name="notify_zip" size="20">
    </div>
  </div>


  <div class="row">
    <div class="form-item col-md-12">
      <label>Email</label>
      <input class="form-control" type="text" name="notify_email" size="30">
    </div>
  </div>


  <div class="row">
  </div>

<div class="form-actions">
  <input class="webform-submit button-primary form-submit btn btn-default btn-primary" type="submit" name="Submit" value="Next">
</div>

<div class="form-item col-md-8">
	<p><small><em>Rather donate by mail? Download our <a href=" " target="_blank">gift form</a>.</em></small></p>
</div>
      </article>
      </div>
      </div>
        </div>
    </div>
    </div>
    </div>
      </div>


<footer class="footer-distributed">
<div class="footer-left">
        <h3>Laikpia<span>logo</span></h3>
                <p class="footer-links">
          <a href="#">Home</a>  ·
          <a href="#">something</a>
          <a href="#">something</a>
          <a href="#">About</a>
          <a href="#">Faq</a>
          <a href="#">Contact</a>
    </p>
<p class="footer-company-name">Company Name &copy; 2015</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></span> Kenya, Nyahururu</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+254727222889</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the Alumni</span>
          About Alumni
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer> 
      
<link href="css/main.css" rel="stylesheet">
@endsection

