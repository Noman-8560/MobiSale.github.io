
<?php

session_start();

	if(!isset($_SESSION['Project'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
	<!-- <a href="Home.php?logout=true">Logout</a> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="Home.css">
  </head>
  <body>

	<!-- mobiles header pic -->
    <div class="phone">
    </div>

   <div class="div1">
     <h1 class="had1">Mobi Sale</h1>
     <p class="p1">Mobi Sale is the one-stop hub to get the latest and authentic mobile prices in Pakistan of all upcoming and latest mobile phones of all different brands.Mobi Sale features all the latest updates, features and specifications along with their prices of the mobiles that are listed on the webpage.The latest gadgets have always been the buzz of the town. The highly anticipated smartphones like iPhone 11 / iPhone 11 pro, iPhone 11 pro max, Sony Xperia XZ2, HTC Desire 19s, Samsung Galaxy S10 / S10 Plus and LG K30 are the discussion that’s on everyone's mind.
        We provide the authentic source for you to do just that. To aid your decision, and also features detailed reviews, mobile comparisons and user opinions on all the latest mobile phones that aid you in picking the mobile phone that’s perfect for you. The mobile phones offered on the website are available with recognized warranties from the likes of Mobile Zone, United Mobile and Advance Telecom, along with Mobi Sale own 1 year or 2 years repairs warranty as optional.
     </p>
   </div>

   <div class="div2">
   <h1 class="had2">smartphones</h1>
   <p class="p1">Busy professionals need devices that keep up with their workday pace, and for many people their most essential device is a smartphone.There are many reasons why it may be more convenient to use a smartphone instead of a laptop, such as being away from your desk, working in the field, or not wanting to sit down in front of a larger screen when a smaller, more portable one will do.
      If you use your smartphone for work, you need one that's reliable, which is where these five devices come in. Each smartphone on this list has unique features designed for business users who may have different use cases.</p>
   </div>

   <div class="div3">
   <h1 class="had3">Tablets</h1>
   <p class="p1">Tablets have long occupied an odd middle ground between smartphones and laptop computers. Larger screens mean the devices are better for consuming media and playing games, but a lack of a full-fledged operating system means tablets are likely to underdeliver for heavier computing tasks.That's not the case in 2020, with a multitude of tablets available that can fill a vital role for different types of professional users--in some cases, even replacing a work laptop entirely. If you're in the market for a new tablet, these six options are each suited to one or more business niches, and could be your must-have device for getting work done on the go.
  </p>
  </div>
  <br>
  <button class="btn1" onclick="onclicked()"  type="button" name="button" >Smartphones</button>
  <button class="btn2" onclick="clicked()"  type="button" name="button">Tablets</button>
  <br><br>
  <center>  <button class="btn2" onclick="click()"  type="button" name="button"  >  <a href="Home.php?logout=true" style="text-decoration:none">Logout</a></button>
</center>

  <br><br><br><br><br><br><br>
  <script type="text/javascript">
    function onclicked()
    {
      document.location.href="Phone.html";
    }
    function clicked()
    {
      document.location.href="Tab.html";
    }



  </script>



  </body>
</html>
