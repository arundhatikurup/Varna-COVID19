
<!DOCTYPE html>
<html>
  
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Medium Respiratory Illness</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="../assets/css/demo1.css" >
    
        <link rel="shortcut icon" href="./static/assets/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./static/assets/images/favicon.ico" type="image/x-icon">
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
        
	      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode($phone)
            {
                var nric = $phone;
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PNGHP4L"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-161578608-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag() {
            dataLayer.push(arguments);
          }
          gtag("js", new Date());
    
          gtag("config", "UA-161578608-1");
        </script>
    
        <!-- Google Tag Manager -->
        <script>
          (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
          })(window, document, "script", "dataLayer", "GTM-PNGHP4L");
        </script>
        <!-- End Google Tag Manager -->
    
        <!-- Facebook Pixel Code -->
        <script>
          !(function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
              n.callMethod
                ? n.callMethod.apply(n, arguments)
                : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
          })(
            window,
            document,
            "script",
            "https://connect.facebook.net/en_US/fbevents.js"
          );
          fbq("init", "516415665913994");
          fbq("track", "Subscribe");
        </script>
        <noscript><img
            height="1"
            width="1"
            style="display:none"
            src="https://www.facebook.com/tr?id=516415665913994&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
      <script src=""></script></head>
    </head>

    <body>
      <?php
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_password = '';
        $mysql_databasename = 'Varna';

        $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_databasename);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $phone = $_GET["phone"];
        $sql = "SELECT * FROM `total_patient_details` WHERE `Cell_Phone` = $phone ";
        $result = $conn->query($sql);

        $rows= $result->fetch_assoc();
        
        ?>
        <?php
                function do_alert($msg) 
                {
                    echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
                }
            ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-PNGHP4L"
        height="0"
        width="0"
        style="display:none;visibility:hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->
      <header class="header">
        <div class="container">
        <a href="http://localhost/covid19/landing/index.html" class="simple-text">
                        <img src="../assets/img/VarnaLogo.JPG"
                    style="float: middle;
                        position: relative;
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                        z-index: 1;"
                    height="100"
                    width="100"
                    />
                    </a>
          <h1>COVID Risk Result</h1>
          <a href="http://localhost/covid19/landing/index.html" class="simple-text">
                        Log Out
                    </a>
        </div>
      </header>
    <main>
      <div class="container">
        <section class="section-one card section-margin">
          <div class="result">
            <h1 class="mid">
            <?php if ($rows['Risk_factor'] == "Mid") {
                        echo "MEDIUM";}
                  elseif($rows['Risk_factor'] == "Low") {echo "LOW";}
                  elseif($rows['Risk_factor'] == "High") {echo "HIGH";}
            ?>
            <?php
                do_alert("The client needs to Collect Wearable from Counter 1");
            ?>
              <p>Respiratory Illness</p>
            </h1>

            <div class="layout-align">
              <div id="score-meter-1" class="layout-align">
                <div id="scorer-1-inner-div">
                  <div id="scorer-1-inner-div-5">
                    <div class="scorer-1-tick mid"></div>
                  </div>
                </div>
                <div id="scorer-1-inner-div-2"></div>
                <div id="scorer-1-inner-div-3"></div>
                <div id="scorer-1-inner-div-4"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-one card section-margin">
          <div class="result">
            
	          <img style="float: middle;"
            id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=$phone;size=100x100" 
            alt="" 
            title="QR CODE" 
            width="200" 
            height="200"
             />
              
          </div>
        </section>
        <section class="section-two card section-margin">
          <p>Based on your scan result, here are the details of details of the room and bed</p>
          <ol>
            <li>Name : <?php echo $rows['Name']; ?></li>
              <li>
                Cell Phone : <?php echo $rows['Cell_Phone']; ?>
              </li>
              <li>
                Room Number : <?php echo $rows['Room']; ?>
              </li>
              <li>
                Bed number : <?php echo $rows['Bed']; ?>
              </li>
		          <li>
                Temperature : <?php echo $rows['Temperature']; ?>
              </li>
              <li>
                Case Manager : Chon Ching(Mesa)
              </li>
            
          </ol>
        </section>
        <section class="section-three section-margin">
          <img src="../assets/img/new_logo.png" alt="Consult Doctor">
          <h3>Your health matters to us.</h3>
          <p>
          <li><a href="https://onelink.to/6zc35r" target="_blank" class="link">Consult a physician</a> and start home isolation immediately</li>
            <li>Prevention and precautions <a href="#details" class="link">See Below</a></li>
            <li>Laboratory tests and imaging may be needed as per your physician's advise</li>
            <li>COVID 19 testing may be required at your physician’s advise</li>
            <li>Monitor your symptoms and get medical attention if your situation worsens</li>
            If you have more questions, call the Corona Helpline number on the website. Buy Corona care products on the Website         
          </p>
        </section>
        <section class="section-four" id="details">
          <h3>Prevention and Precautions - Basic protective measures</h3>
          <p>
            Be aware or Educate yourself with the latest updates on the following websites : <a href="https://www.who.int/health-topics/coronavirus" target="_blank">WHO</a> &amp; <a href="https://www.mohfw.gov.in/" target="_blank">MoHFW</a>
          </p>
          <p>
            Most people who become infected experience mild illness and recover, but it can be more severe for others. Take care of your health and protect others by doing the following:
          </p>
          <ul>
            <li>
              <h4>Wash your hands frequently</h4>
              <p>
                Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.
              </p>
            </li>
            <li>
              <h4>Maintain social distancing</h4>
              <p>
                Maintain at least 2 metre (6 feet) distance between yourself and anyone who is coughing or sneezing.
              </p>
            </li>
            <li>
              <h4>Avoid touching eyes, nose and mouth</h4>
              <p>
                Our hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth.
              </p>
            </li>
            <li>
              <h4>Practice respiratory hygiene</h4>
              <p>
                Make sure you and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.
              </p>
            </li>
            <li>
              <h4>If you have fever, cough and difficulty in breathing, seek medical care early</h4>
              <p>
                Stay home if you feel unwell. If you have a high fever, moderate to severe cough and difficulty in breathing and it is worsening in short period of time, seek medical asistance and call in advance.
              </p>
            </li>
          </ul>
        </section>
      </div>
    </main><iframe height="0" width="0" style="display: none; visibility: hidden;" src="//9922749.fls.doubleclick.net/activityi;src=9922749;type=invmedia;cat=apoll00;ord=2038618113878;gtm=2wg480;auiddc=1770229539.1586929665;~oref=https%3A%2F%2Fcovid.apollo247.com%2Finfo%3Fid%3D10%26lan%3Denglish%26path%3D%26utm_source%3Dlinkedin%26utm_medium%3Dorganic%26utm_campaign%3Dbot_scanner%26fbclid%3DIwAR3PuGJih0boaLzm1yFdryvcNveAjXgac9Smm3uAqOmmAxRz9G80yTicXmQ?"></iframe>
  

<script type="text/javascript" id="">location.pathname.includes("delivery-available.html")&&($(".order-cta a").attr("href",""),$(".order-cta a").attr("target","_blank"));location.pathname.includes("pharmacy-delivery-availability")&&$(".logo").html('\x3ca href\x3d"/" target\x3d"_blank"\x3e\x3cimg src\x3d"images/logo.png" class\x3d"img-fluid"\x3e\x3c/a\x3e');console.log("GTM Loaded");</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");</script>

<script type="text/javascript" id="">(function(){fbq("init","822904488234701");fbq("track","PageView");"/"==location.pathname&&fbq("track","PageView");if("/info"==location.pathname){var a=location.search.replace(/\?id=/,"");fbq("track","CompleteRegistration",{value:(6>a?"Low":11>a?"Moderate":"High")+" Risk"})}})();</script></body>
</body>

</html>
