<?php require_once("db_connect.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Citadel</title>
    <!--status.acls.org-->
    <meta charset="utf-8" /><title>
    ACLS American Council of Learned Societies | www.acls.org
</title>
    <link rel="canonical" href="http://www.acls.org/" />
    <meta name="description" content="ACLS is a private non-profit federation of national scholarly organizations dedicated to the advancement of humanities." /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="fb:admins" /><meta property="og:site_name" content="ACLS American Council of Learned Societies | www.acls.org" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ACLS American Council of Learned Societies | Home" />
    <meta property="og:url" content="http://www.acls.org" />
    <meta property="og:image" content="img/acls.jpg" />
    <meta property="og:description" content="ACLS is a private non-profit federation of national scholarly organizations dedicated to the advancement of humanities." />
    <meta name="p:domain_verify" content="4f9567f071802716f08dd7be58e142ee" />

    <link rel="stylesheet" href="style/home/bootstrap.min.css" />
    <link rel="stylesheet" href="style/home/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="style/style.css">

    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/home/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/status.json"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        var pageTracker = _gat._getTracker("UA-100232-6");
        pageTracker._initData();
        pageTracker._trackPageview();
    </script>
</head>
<body>

<table class="table">

    <caption class="h3"><img id="ACLSlogo" src="img/acls.jpg"> Current Status of ACLS IT Systems</caption>
    <thead class="text-center">
        <tr class="gray">
            <td>External Services</td>
            <td>Current Status</td>
            <td>ETA on Return</td>
            <td>Next Update</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>OWA (webmail)</td>
            <td class="text-center Status-OWA">
                <input type="checkbox"
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 1"));
                    if($service["status"] != 0){
                        echo "checked";
                    } else{
                        echo '';
                    };
                 ?>
                 data-toggle="toggle">
            </td>
            <td>
                <textarea name="ETA-OWA" id="ETA-OWA"></textarea>
            </td>
            <td>
                <textarea name="NU-OWA" id="NU-OWA"></textarea>
            </td>
        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 2"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
                  </td>
            <td><textarea name="ETA-ActiveSync" id="ETA-ActiveSync"></textarea></td>
            <td><textarea name="NU-ActiveSync" id="NU-ActiveSync"></textarea></td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td class="text-center">
                <!--<input type="checkbox" checked data-toggle="toggle" id="Status-Sites">-->
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 3"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
                </td>
            <td><textarea name="ETA-Sites" id="ETA-Sites"></textarea></td>
            <td><textarea name="NU-Sites" id="NU-Sites"></textarea></td>
        </tr>
        <tr>
            <td>VPN/Remote Network Access</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 4"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td><textarea name="ETA-VPN" id="ETA-VPN"></textarea></td>
            <td><textarea name="NU-VPN" id="NU-VPN"></textarea></td>
        </tr>
        <tr>
            <td>crm.acls.org</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 5"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td><textarea name="ETA-CRM" id="ETA-CRM"></textarea></td>
            <td><textarea name="NU-CRM" id="NU-CRM"></textarea></td>
        </tr>

    </tbody>
        <thead class="text-center">
        <tr class="gray">
            <td>Internal Services</td>
            <td>Current Status</td>
            <td>ETA on Return</td>
            <td>Next Update</td>
        </tr>
        </thead>
    <tbody>
        <tr>
            <td>Outlook Email</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 6"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td><textarea name="ETA-Outlook" id="ETA-Outlook"></textarea></td>
            <td><textarea name="NU-Outlook" id="NU-Outlook"></textarea></td>
        </tr>
        <tr>
            <td>OWA (webmail)</td>
            <td class="text-center">
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 7"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-iOWA" id="ETA-iOWA"></textarea></td>
            <td><textarea name="NU-iOWA" id="NU-iOWA"></textarea></td>
        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 8"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-iAS" id="ETA-iAS"></textarea></td>
            <td><textarea name="NU-iAS" id="NU-iAS"></textarea></td>
        </tr>
        <tr>
            <td>Network Access</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 9"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-NA" id="ETA-NA"></textarea></td>
            <td><textarea name="NU-NA" id="NU-NA"></textarea></td>
        </tr>
        <tr>
            <td>Internet Access</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 10"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-IA" id="ETA-IA"></textarea></td>
            <td><textarea name="NU-IA" id="NU-IA"></textarea></td>
        </tr>
        <tr>
            <td>crminternal.acls.org</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 11"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-CRMi" id="ETA-CRMi"></textarea></td>
            <td><textarea name="NU-CRMi" id="NU-CRMi"></textarea></td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td class="text-center">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 12"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else{
                        echo $firstPart . $lastPart;
                    };
                 ?>
            </td>
            <td><textarea name="ETA-iSites" id="ETA-iSites"></textarea></td>
            <td><textarea name="NU-iSites" id="NU-iSites"></textarea></td>
        </tr>
        <tr>
            <td colspan=4 class="gray h4 text-center">If you are experiencing an issue with a service not noted above, please email <a href="mailto:helpdesk@citadelny.com">helpdesk@citadelny.com</a> or call 212-931-8830.</td>
        </tr>
    </tbody>
</table>
                      </div>
                  </div>
              </div>
          </div>
      </div>

        </div>
    </div>
</body>
</html>
