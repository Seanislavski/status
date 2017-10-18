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
                    get_status(1);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-OWA" id="ETA-OWA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-OWA" id="NU-OWA" placeholder="
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
                    get_status(2);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-ActiveSync" id="ETA-ActiveSync" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-ActiveSync" id="NU-ActiveSync" placeholder="
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
                    get_status(3);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-Sites" id="ETA-Sites" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-Sites" id="NU-Sites" placeholder="
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
                    get_status(4);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETA-VPN" id="ETA-VPN" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-VPN" id="NU-VPN" placeholder="
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
                    get_status(5);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETA-CRM" id="ETA-CRM" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-CRM" id="NU-CRM" placeholder="
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
                    get_status(6);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETA-Outlook" id="ETA-Outlook" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-Outlook" id="NU-Outlook" placeholder="
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
                    get_status(7);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-iOWA" id="ETA-iOWA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-iOWA" id="NU-iOWA" placeholder="
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
                    get_status(8);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-iAS" id="ETA-iAS" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-iAS" id="NU-iAS" placeholder="
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
                    get_status(9);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-NA" id="ETA-NA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-NA" id="NU-NA" placeholder="
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
                    get_status(10);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-IA" id="ETA-IA" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-IA" id="NU-IA" placeholder="
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
                    get_status(11);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-CRMi" id="ETA-CRMi" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-CRMi" id="NU-CRMi" placeholder="
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
                    get_status(12);
                 ?>
            </td>
            <td>
                <input type="text" name="ETA-iSites" id="ETA-iSites" placeholder="
                <?php
                    get_eta();
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NU-iSites" id="NU-iSites" placeholder="
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
echo 'Status: '      . $_POST['NU-CRMi'];
// echo 'ID: '          . $_POST['id'];
// echo 'ETA: '         . $_POST["ETA"];
// echo 'Next Update: ' . $_POST["next_update"];
 ?>
<input type="submit" value="Save">
</form>
</body>
</html>
<?php $connection->close();  ?>
