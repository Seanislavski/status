<?php require_once("./db_connect.php"); ?>
<?php require_once("./functions.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Test</title>
    <link rel="stylesheet" href="style/home/bootstrap.min.css" />
    <link rel="stylesheet" href="style/home/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<form action="db_update.php" method="post">

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
                <?php
                    global $b;
                    get_status();
                    echo 'test ' . $b;
                 ?>
            </td>
            <td>
                <input type="text" name="ETAOWA" id="ETAOWA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUOWA" id="NUOWA" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETAActiveSync" id="ETAActiveSync" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUActiveSync" id="NUActiveSync" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETASites" id="ETASites" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUSites" id="NUSites" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>VPN/Remote Network Access</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETAVPN" id="ETAVPN" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUVPN" id="NUVPN" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>crm.acls.org</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETACRM" id="ETACRM" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUCRM" id="NUCRM" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
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
            <td>Outlook Email</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETAOutlook" id="ETAOutlook" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUOutlook" id="NUOutlook" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>OWA (webmail)</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiOWA" id="ETAiOWA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiOWA" id="NUiOWA" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>

        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiAS" id="ETAiAS" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiAS" id="NUiAS" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>Network Access</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETANA" id="ETANA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUNA" id="NUNA" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>Internet Access</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETAIA" id="ETAIA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUIA" id="NUIA" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>crminternal.acls.org</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETACRMi" id="ETACRMi" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUCRMi" id="NUCRMi" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td class="text-center">
                <?php
                    get_status();
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiSites" id="ETAiSites" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiSites" id="NUiSites" placeholder="
                <?php
                    get_next_update();
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td colspan=4 class="gray h4 text-center">If you are experiencing an issue with a service not noted above, please email <a href="mailto:helpdesk@citadelny.com">helpdesk@citadelny.com</a> or call 212-931-8830.</td>
        </tr>
    </tbody>
</table>
<?php
global $status;
// echo 'Status: '      . $_POST['NU-CRMi'];
// echo 'ID: '          . $_POST['id'];
// echo 'ETA: '         . $_POST["ETA"];
// echo 'Next Update: ' . $_POST["next_update"];
 ?>
<input type="submit" value="Save">
</form>
</body>
</html>
<?php $connection->close();  ?>
