<?php require_once("db_connect.php"); ?>
<?php require_once("functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status - status.acls.org</title>
    <!--status.acls.org-->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/home/bootstrap.min.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php global $show_status, $show_eta, $show_next_update ?>
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
                $i = 1;
                show_status($i);
                ?>
            </td>
            <td>
                <?php show_eta($i); ?>
            </td>
            <td>
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ActiveSync (Mobile Devices)</td>
            <td id="Status-AS">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-AS">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-AS">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ACLS Website & Portal Websites</td>
            <td id="Status-Sites">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-Sites">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-Sites">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">VPN/Remote Network Access</td>
            <td id="Status-VPN">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-VPN">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-VPN">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">crm.acls.org</td>
            <td id="Status-CRM">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-CRM">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-CRM">
                <?php show_next_update($i); ?>
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
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-Outlook">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-Outlook">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">OWA (webmail)</td>
            <td id="Status-iOWA">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-iOWA">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-iOWA">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ActiveSync (Mobile Devices)</td>
            <td id="Status-iAS">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-iAS">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-iAS">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">Network Access</td>
            <td id="Status-NA">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-NA">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-NA">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">Internet Access</td>
            <td id="Status-IA">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-IA">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-IA">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">crminternal.acls.org</td>
            <td id="Status-iCRM">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-iCRM">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-iCRM">
                <?php show_next_update($i); ?>
            </td>
        </tr>
        <tr>
            <td class="serviceName">ACLS Website & Portal Websites</td>
            <td id="Status-iSites">
                <?php
                $i++;
                show_status($i);
                ?>
            </td>
            <td id="ETA-iSites">
                <?php show_eta($i); ?>
            </td>
            <td id="NU-iSites">
                <?php show_next_update($i); ?>
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
