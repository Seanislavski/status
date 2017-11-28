<?php require_once("./db_connect.php"); ?>
<?php require_once("./functions.php"); ?>

<?php
    // print_r($_POST["status2"]);
    if (isset($_POST["submit"])) {
        // $newv = $_POST["submit"];
        // echo "\$submit: $newv";

        switch(true) {
            case $_POST["status1"]:
                $number = "status1";
                updateStatus($number, $conn);
            case $_POST["status2"]:
                $number = "status2";
                updateStatus($number, $conn);
            case $_POST["status3"]:
                updateStatus('status3', $conn);
            case $_POST["status4"]:
                updateStatus('status4', $conn);
            case $_POST["status5"]:
                updateStatus('status5', $conn);
            case $_POST["status6"]:
                updateStatus('status6', $conn);
            case $_POST["status7"]:
                updateStatus('status7', $conn);
            case $_POST["status8"]:
                updateStatus('status8', $conn);
            case $_POST["status9"]:
                updateStatus('status9', $conn);
            case $_POST["status10"]:
                updateStatus('status10', $conn);
            case $_POST["status11"]:
                updateStatus('status11', $conn);
            case $_POST["status12"]:
                updateStatus('status12', $conn);
            case $_POST["ETAOWA"]:
                updateETA(1, $conn);
            case $_POST["NUOWA"]:
                updateNU(1, $conn);


        }
    } else {
            echo 'UNSET $_POST["submit"]';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Test</title>
    <link rel="stylesheet" href="style/home/bootstrap.min.css" />
    <link rel="stylesheet" href="style/home/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- <script src="js/bootstrap-toggle.min.js"></script> -->
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/main.js"></script>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<!-- Add "?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?"
    (with &gt & &lt symbols) to the above form element (where now it points
     to db_update.php) in order to use this same page for processing the
     form (must be above HTML)-->

<?php //start
global $conn, $i;
// mysqli_ping($conn);
?> <!-- end -->

<table class="table">

    <caption class="h3"><img id="ACLSlogo" src="img/acls.jpg"> Current Status of ACLS IT Systems</caption>
    <thead>
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
            <td class= Status-OWA">
                <?php
                    global $i;
                    $i = 1;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAOWA" id="ETAOWA" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUOWA" id="NUOWA" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAActiveSync" id="ETAActiveSync" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUActiveSync" id="NUActiveSync" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETASites" id="ETASites" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUSites" id="NUSites" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>VPN/Remote Network Access</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETAVPN" id="ETAVPN" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUVPN" id="NUVPN" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>crm.acls.org</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETACRM" id="ETACRM" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUCRM" id="NUCRM" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>

    </tbody>
        <thead>
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
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
                <!-- <input type="checkbox" checked data-toggle="toggle"> -->
            </td>
            <td>
                <input type="text" name="ETAOutlook" id="ETAOutlook" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUOutlook" id="NUOutlook" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>OWA (webmail)</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiOWA" id="ETAiOWA" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiOWA" id="NUiOWA" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>

        </tr>
        <tr>
            <td>ActiveSync (Mobile Devices)</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiAS" id="ETAiAS" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiAS" id="NUiAS" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>Network Access</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETANA" id="ETANA" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUNA" id="NUNA" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>Internet Access</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAIA" id="ETAIA" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUIA" id="NUIA" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>crminternal.acls.org</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETACRMi" id="ETACRMi" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUCRMi" id="NUCRMi" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td>ACLS Website & Portal Websites</td>
            <td>
                <?php
                    $i++;
                    get_status($i);
                 ?>
            </td>
            <td>
                <input type="text" name="ETAiSites" id="ETAiSites" value="
                <?php
                    get_eta($i);
                ?>
                ">
            </td>
            <td>
                <input type="text" name="NUiSites" id="NUiSites" value="
                <?php
                    get_next_update($i);
                ?>
                ">
            </td>
        </tr>
        <tr>
            <td colspan=4 class="gray h4">If you are experiencing an issue with a service not noted above, please email <a href="mailto:helpdesk@citadelny.com">helpdesk@citadelny.com</a> or call 212-931-8830.</td>
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
<input type="submit" value="Save" name="submit">
</form>
</body>
</html>
<?php $conn->close();  ?>
