<?php require_once("db_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Target</title>
    <!--status.acls.org-->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/home/bootstrap.min.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
            <td class="serviceName">OWA (webmail)</td>
            <td id="Status-OWA">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 1"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td>
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td>
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ActiveSync (Mobile Devices)</td>
            <td id="Status-AS">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 2"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-AS">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-AS">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ACLS Website & Portal Websites</td>
            <td id="Status-Sites">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 3"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-Sites">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-Sites">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">VPN/Remote Network Access</td>
            <td id="Status-VPN">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 4"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-VPN">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-VPN">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">crm.acls.org</td>
            <td id="Status-CRM">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 5"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-CRM">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-CRM">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
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
            <td class="serviceName">Outlook Email</td>
            <td id="Status-Outlook">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 6"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-Outlook">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-Outlook">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">OWA (webmail)</td>
            <td id="Status-iOWA">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 7"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-iOWA">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-iOWA">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ActiveSync (Mobile Devices)</td>
            <td id="Status-iAS">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 8"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-iAS">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-iAS">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">Network Access</td>
            <td id="Status-NA">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 9"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-NA">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-NA">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">Internet Access</td>
            <td id="Status-IA">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 10"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-IA">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-IA">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">crminternal.acls.org</td>
            <td id="Status-iCRM">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 11"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-iCRM">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-iCRM">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ACLS Website & Portal Websites</td>
            <td id="Status-iSites">
                <?php
                    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = 12"));
                    if($service["status"] == 1){
                        echo 'Up';
                    } else {
                        echo 'Down';
                    };
                ?>
            </td>
            <td id="ETA-iSites">
                <?php
                if($service["status"] == 0){
                echo $service["ETA"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
            <td id="NU-iSites">
                <?php
                if($service["status"] == 0){
                echo $service["next_update"];
                } else {
                    echo "N/A";
                };
                ?>
            </td>
        </tr>
        <tr>
            <td colspan=4 class="gray h4 text-center" id="notice">If you are experiencing an issue with a service not noted above, please email <a href="mailto:helpdesk@citadelny.com">helpdesk@citadelny.com</a> or call 212-931-8830.</td>
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
