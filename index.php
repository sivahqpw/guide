<?php 
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $homepage_title; ?></title>
	<meta name="description" content="<?php echo $homepage_desc; ?>" />
	<meta name="robots" content="noodp"/>
	<meta property="og:site_name" content="<?php echo $site_title; ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php echo $homepage_title; ?>"/>
	<meta property="og:description" content="<?php echo $homepage_desc; ?>"/>
	<!-- CSS and Scripts -->
	<?php include 'includes/headscripts.php'; ?>
	</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- Search Container -->
<div class="search-container">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<center><h1 class="text-white mb-5"><?php echo $searchftitle_text; ?></h1></center>
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
	
<!-- Search Form -->		
		<form action="<?php echo $site_url;?>/jobs">
  <div class="form-row align-items-center mb-3">
    <div class="col job-search">
      <input name="j" type="text" class="form-control form-control-lg" placeholder="<?php echo $searchf_text; ?>">
    </div>
    <div class="col loc-search">
      <input name="l" type="text" class="form-control form-control-lg" placeholder="<?php echo $searchloc_text; ?>">
    </div>
	<div class="col-auto but-search">
	<button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-search"></i></button>
	</div>
  </div>
  
  
  <div class="form-group form-inline text-white">
  <div style="margin-right: 10px;margin-top: -4px;"><?php echo $searchfsort_text; ?></div>
      <div class="custom-control custom-radio mr-2">
	  <input id="relevance" name="s" value="relevance" class="custom-control-input" checked="" type="radio">
      <label class="custom-control-label" for="relevance"><?php echo $searchfrel_text; ?></label>
    </div>
    <div class="custom-control custom-radio mr-2">
      <input id="date" name="s" value="date" class="custom-control-input" type="radio">
      <label class="custom-control-label" for="date"><?php echo $searchfdat_text; ?></label>
    </div>
    <div class="custom-control custom-radio mr-2">
      <input id="salary" name="s" value="salary" class="custom-control-input" type="radio">
      <label class="custom-control-label" for="salary"><?php echo $searchfsal_text; ?></label>
    </div>
  </div>
</form>
<!-- /Search Form -->
		</div>
	</div>
</div>
</div>
<!-- /Search Container -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
<br>
<br>	
<h3>Welcome to the best job search engine!</h3>
<hr>
<p>JobFinder is a job search engine designed to make it easier to find your dream job on the internet. It searches through a huge selection of job offerings available on the internet in one easy to use search engine by referencing job listings originating from job boards, recruitment agency websites and large specialist recruitment sites. Using a fast and straightforward interface, users can search for jobs on this website and save themselves the trouble of visiting each site individually. The job offerings themselves are not hosted by JobFinder and users are always redirected to the original job listing. In just one search you can access millions of jobs published on thousands websites in the world. There's no need to look anywhere else. With millions of jobs, JobFinder is the only site you'll ever need to find your next job.
</p>
<?php 
$postad = file_get_contents("ads/homepage_ad.php",NULL);
if(isset($postad) and !empty($postad)): ?>
<div style="margin:30px 0px 30px 0px;">
<?php echo $postad; ?>
</div>
<?php endif; ?>
<h3>Jobs by Industry</h3>
<hr>
<div class="row multi-columns-row">

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Accounting&l=&s=relevance">Accounting</a>
<a href="<?php echo $site_url; ?>/jobs?j=Advertising&l=&s=relevance">Advertising</a>
<a href="<?php echo $site_url; ?>/jobs?j=Aerospace&l=&s=relevance">Aerospace</a>
<a href="<?php echo $site_url; ?>/jobs?j=Agriculture&l=&s=relevance">Agriculture</a>
<a href="<?php echo $site_url; ?>/jobs?j=Apparel&l=&s=relevance">Apparel</a>
<a href="<?php echo $site_url; ?>/jobs?j=Architecture&l=&s=relevance">Architecture</a>
<a href="<?php echo $site_url; ?>/jobs?j=Arts&l=&s=relevance">Arts</a>
<a href="<?php echo $site_url; ?>/jobs?j=Automotive&l=&s=relevance">Automotive</a>
<a href="<?php echo $site_url; ?>/jobs?j=Banking&l=&s=relevance">Banking</a>
<a href="<?php echo $site_url; ?>/jobs?j=Charities&l=&s=relevance">Charities</a>
<a href="<?php echo $site_url; ?>/jobs?j=Consultancy&l=&s=relevance">Consultancy</a>
<a href="<?php echo $site_url; ?>/jobs?j=Customer+Service&l=&s=relevance">Customer Service</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Education&l=&s=relevance">Education</a>
<a href="<?php echo $site_url; ?>/jobs?j=Electronics&l=&s=relevance">Electronics</a>
<a href="<?php echo $site_url; ?>/jobs?j=Engineering&l=&s=relevance">Engineering</a>
<a href="<?php echo $site_url; ?>/jobs?j=Food+Processing&l=&s=relevance">Food Processing</a>
<a href="<?php echo $site_url; ?>/jobs?j=Health+Care&l=&s=relevance">Health Care</a>
<a href="<?php echo $site_url; ?>/jobs?j=Human+Resources&l=&s=relevance">Human Resources</a>
<a href="<?php echo $site_url; ?>/jobs?j=Information+Technology&l=&s=relevance">Information Technology</a>
<a href="<?php echo $site_url; ?>/jobs?j=Insurance&l=&s=relevance">Insurance</a>
<a href="<?php echo $site_url; ?>/jobs?j=Law+Enforcement&l=&s=relevance">Law Enforcement</a>
<a href="<?php echo $site_url; ?>/jobs?j=Legal&l=&s=relevance">Legal</a>
<a href="<?php echo $site_url; ?>/jobs?j=Management&l=&s=relevance">Management</a>
<a href="<?php echo $site_url; ?>/jobs?j=Manufacturing&l=&s=relevance">Manufacturing</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Maritime&l=&s=relevance">Maritime</a>
<a href="<?php echo $site_url; ?>/jobs?j=Marketing&l=&s=relevance">Marketing</a>
<a href="<?php echo $site_url; ?>/jobs?j=Media&l=&s=relevance">Media</a>
<a href="<?php echo $site_url; ?>/jobs?j=Oil&l=&s=relevance">Oil</a>
<a href="<?php echo $site_url; ?>/jobs?j=Personal+Care&l=&s=relevance">Personal Care</a>
<a href="<?php echo $site_url; ?>/jobs?j=Public+Sector&l=&s=relevance">Public Sector</a>
<a href="<?php echo $site_url; ?>/jobs?j=Publishing&l=&s=relevance">Publishing</a>
<a href="<?php echo $site_url; ?>/jobs?j=Purchasing&l=&s=relevance">Purchasing</a>
<a href="<?php echo $site_url; ?>/jobs?j=Quality Assurance&l=&s=relevance">Quality Assurance</a>
<a href="<?php echo $site_url; ?>/jobs?j=Real Estate&l=&s=relevance">Real Estate</a>
<a href="<?php echo $site_url; ?>/jobs?j=Restaurants&l=&s=relevance">Restaurants</a>
<a href="<?php echo $site_url; ?>/jobs?j=Retail&l=&s=relevance">Retail</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Sales&l=&s=relevance">Sales</a>
<a href="<?php echo $site_url; ?>/jobs?j=Science&l=&s=relevance">Science</a>
<a href="<?php echo $site_url; ?>/jobs?j=Secretarial&l=&s=relevance">Secretarial</a>
<a href="<?php echo $site_url; ?>/jobs?j=Social Care&l=&s=relevance">Social Care</a>
<a href="<?php echo $site_url; ?>/jobs?j=Social Media&l=&s=relevance">Social Media</a>
<a href="<?php echo $site_url; ?>/jobs?j=Sports&l=&s=relevance">Sports</a>
<a href="<?php echo $site_url; ?>/jobs?j=Steels&l=&s=relevance">Steels</a>
<a href="<?php echo $site_url; ?>/jobs?j=Tourism&l=&s=relevance">Tourism</a>
<a href="<?php echo $site_url; ?>/jobs?j=Translations&l=&s=relevance">Translations</a>
<a href="<?php echo $site_url; ?>/jobs?j=Transportation&l=&s=relevance">Transportation</a>
<a href="<?php echo $site_url; ?>/jobs?j=Web+Design&l=&s=relevance">Web Design</a>
<a href="<?php echo $site_url; ?>/jobs?j=Wood&l=&s=relevance">Wood</a>
</ul>
</div>

</div>

<br><br>			
<h3>Jobs by Company</h3>
<hr>
<div class="row multi-columns-row">

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Adobe&l=&s=relevance">Adobe</a>
<a href="<?php echo $site_url; ?>/jobs?j=Airbnb&l=&s=relevance">Airbnb</a>
<a href="<?php echo $site_url; ?>/jobs?j=Amazon&l=&s=relevance">Amazon</a>
<a href="<?php echo $site_url; ?>/jobs?j=Apple&l=&s=relevance">Apple</a>
<a href="<?php echo $site_url; ?>/jobs?j=Argos&l=&s=relevance">Argos</a>
<a href="<?php echo $site_url; ?>/jobs?j=Bestbuy&l=&s=relevance">Bestbuy</a>
<a href="<?php echo $site_url; ?>/jobs?j=Capitol+One&l=&s=relevance">Capitol One</a>
<a href="<?php echo $site_url; ?>/jobs?j=Chegg&l=&s=relevance">Chegg</a>
<a href="<?php echo $site_url; ?>/jobs?j=Cisco&l=&s=relevance">Cisco</a>
<a href="<?php echo $site_url; ?>/jobs?j=Costco&l=&s=relevance">Costco</a>
<a href="<?php echo $site_url; ?>/jobs?j=Dominos&l=&s=relevance">Dominos</a>
<a href="<?php echo $site_url; ?>/jobs?j=eBay&l=&s=relevance">eBay</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=ESPN&l=&s=relevance">ESPN</a>
<a href="<?php echo $site_url; ?>/jobs?j=Facebook&l=&s=relevance">Facebook</a>
<a href="<?php echo $site_url; ?>/jobs?j=Facess&l=&s=relevance">Facess</a>
<a href="<?php echo $site_url; ?>/jobs?j=Google&l=&s=relevance">GoDaddy</a>
<a href="<?php echo $site_url; ?>/jobs?j=Google&l=&s=relevance">Google</a>
<a href="<?php echo $site_url; ?>/jobs?j=HubSpot&l=&s=relevance">HubSpot</a>
<a href="<?php echo $site_url; ?>/jobs?j=Ikea&l=&s=relevance">Ikea</a>
<a href="<?php echo $site_url; ?>/jobs?j=Instagram&l=&s=relevance">Instagram</a>
<a href="<?php echo $site_url; ?>/jobs?j=Intuit&l=&s=relevance">Intuit</a>
<a href="<?php echo $site_url; ?>/jobs?j=LinkedIn&l=&s=relevance">LinkedIn</a>
<a href="<?php echo $site_url; ?>/jobs?j=Microsoft&l=&s=relevance">Microsoft</a>
<a href="<?php echo $site_url; ?>/jobs?j=Nike&l=&s=relevance">Nike</a>

</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Netflix&l=&s=relevance">Netflix</a>
<a href="<?php echo $site_url; ?>/jobs?j=Nvidia&l=&s=relevance">Nvidia</a>
<a href="<?php echo $site_url; ?>/jobs?j=Pandora&l=&s=relevance">Pandora</a>
<a href="<?php echo $site_url; ?>/jobs?j=PayPal&l=&s=relevance">PayPal</a>
<a href="<?php echo $site_url; ?>/jobs?j=Petco&l=&s=relevance">Petco</a>
<a href="<?php echo $site_url; ?>/jobs?j=Pinterest&l=&s=relevance">Pinterest</a>
<a href="<?php echo $site_url; ?>/jobs?j=Pizza+Hut&l=&s=relevance">Pizza Hut</a>
<a href="<?php echo $site_url; ?>/jobs?j=Riot+Games&l=&s=relevance">Riot Games</a>
<a href="<?php echo $site_url; ?>/jobs?j=Roblox&l=&s=relevance">Roblox</a>
<a href="<?php echo $site_url; ?>/jobs?j=Salesforce&l=&s=relevance">Salesforce</a>
<a href="<?php echo $site_url; ?>/jobs?j=Santander&l=&s=relevance">Santander</a>
<a href="<?php echo $site_url; ?>/jobs?j=Spotify&l=&s=relevance">Spotify</a>

</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<a href="<?php echo $site_url; ?>/jobs?j=Starbucks&l=&s=relevance">Starbucks</a>
<a href="<?php echo $site_url; ?>/jobs?j=Stream&l=&s=relevance">Stream</a>
<a href="<?php echo $site_url; ?>/jobs?j=Target&l=&s=relevance">Target</a>
<a href="<?php echo $site_url; ?>/jobs?j=The+Home+Depot&l=&s=relevance">The Home Depot</a>
<a href="<?php echo $site_url; ?>/jobs?j=TripAdvisor&l=&s=relevance">TripAdvisor</a>
<a href="<?php echo $site_url; ?>/jobs?j=Walmart&l=&s=relevance">Walmart</a>
<a href="<?php echo $site_url; ?>/jobs?j=Wells+Fargo&l=&s=relevance">Wells Fargo</a>
<a href="<?php echo $site_url; ?>/jobs?j=Yahoo&l=&s=relevance">Yahoo</a>
<a href="<?php echo $site_url; ?>/jobs?j=Zendesk&l=&s=relevance">Zendesk</a>
<a href="<?php echo $site_url; ?>/jobs?j=Zillow&l=&s=relevance">Zillow</a>
</ul>
</div>

</div>

<br>
<br>
<h3>Jobs by Location</h3>
<hr>
<div class="row multi-columns-row">

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<b>Europe</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Austria&s=relevance">Austria</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Belgium&s=relevance">Belgium</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Czech+Republic&s=relevance">Czech Republic</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Denmark&s=relevance">Denmark</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Finland&s=relevance">Finland</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=France&s=relevance">France</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Germany&s=relevance">Germany</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Hungary&s=relevance">Hungary</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Ireland&s=relevance">Ireland</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Italy&s=relevance">Italy</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Luxembourg&s=relevance">Luxembourg</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Malta&s=relevance">Malta</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Netherlands&s=relevance">Netherlands</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Norway&s=relevance">Norway</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Poland&s=relevance">Poland</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Portugal&s=relevance">Portugal</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Romania&s=relevance">Romania</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Russia&s=relevance">Russia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Slovakia&s=relevance">Slovakia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Spain&s=relevance">Spain</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Sweden&s=relevance">Sweden</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Switzerland&s=relevance">Switzerland</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=United+Kingdom&s=relevance">United Kingdom</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<b>North America</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Canada&s=relevance">Canada</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Mexico&s=relevance">Mexico</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=United+States&s=relevance">United States</a>
<div><br></div>
<b>Central America</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Costa+Rica&s=relevance">Costa Rica</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Guatemala&s=relevance">Guatemala</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Panama&s=relevance">Panama</a>
<div><br></div>
<b>South America</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Argentina&s=relevance">Argentina</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Bolivia&s=relevance">Bolivia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Brazil&s=relevance">Brazil</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Chile&s=relevance">Chile</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Colombia&s=relevance">Colombia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Ecuador&s=relevance">Ecuador</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Paraguay&s=relevance">Paraguay</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Peru&s=relevance">Peru</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Uruguay&s=relevance">Uruguay</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Venezuela&s=relevance">Venezuela</a>
</ul></div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<b>Asia</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=China&s=relevance">China</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Hong+Kong&s=relevance">Hong Kong</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=India&s=relevance">India</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Japan&s=relevance">Japan</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Korea&s=relevance">Korea</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Malaysia&s=relevance">Malaysia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Pakistan&s=relevance">Pakistan</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Philippines&s=relevance">Philippines</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Singapore&s=relevance">Singapore</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Taiwan&s=relevance">Taiwan</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Thailand&s=relevance">Thailand</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Vietnam&s=relevance">Vietnam</a>
<div><br></div>
<b>Middle East</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Kuwait&s=relevance">Kuwait</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Oman&s=relevance">Oman</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Qatar&s=relevance">Qatar</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Turkey&s=relevance">Turkey</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=United+Arab+Emirates&s=relevance">United Arab Emirates</a>
</ul>
</div>

<div class="col-6 col-sm-4 col-lg-3">
<ul class="list-group">
<b>Africa</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Morocco&s=relevance">Morocco</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=South+Africa&s=relevance">South Africa</a>
<div><br></div>
<b>Caribbean</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Dominican+Republic&s=relevance">Dominican Republic</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Puerto+Rico&s=relevance">Puerto Rico</a>
<div><br></div>
<b>Pacific</b>
<a href="<?php echo $site_url; ?>/jobs?j=&l=Australia&s=relevance">Australia</a>
<a href="<?php echo $site_url; ?>/jobs?j=&l=New+Zealand&s=relevance">New Zealand</a>
</ul>
</div>


</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php';?>