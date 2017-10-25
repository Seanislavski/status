    <?php
    global $i;
    //status 1
    if (isset($_POST['status1'])) {
        $status1 = $_POST['status1'];
        ?><br \><?php
        echo 'status1: ';
        echo $status1;
    } else {$status1 = '';}
    //ETA-OWA
    if (isset($_POST['ETA-OWA'])) {
        $ETAOWA = $_POST['ETA-OWA'];
        ?><br \><?php
        echo 'ETAOWA: ';
        echo $ETAOWA;
    } else {$ETAOWA = '';}
    //NU-OWA
    if (isset($_POST['NU-OWA'])) {
        $NUOWA = $_POST['NU-OWA'];
        ?><br \><?php
        echo 'NUOWA: ';
        echo $NUOWA;
    } else {$NUOWA = '';}
    //status1
    if (isset($_POST['status1'])) {
        $status1 = $_POST['status1'];
        ?><br \><?php
        echo 'Status: ';
        echo $status;
    } else {$status = '';}
    //ETA-ActiveSync
    if (isset($_POST['ETA-ActiveSync'])) {
        $ETAActiveSync = $_POST['ETA-ActiveSync'];
        ?><br \><?php
        echo 'ETAActiveSync: ';
        echo $ETAActiveSync;
    } else {$ETAActiveSync = '';}
    // NU-ActiveSync
    if (isset($_POST['NU-ActiveSync'])) {
        $NUActiveSync = $_POST['NU-ActiveSync'];
        ?><br \><?php
        echo 'NUActiveSync: ';
        echo $NUActiveSync;
    } else {$NUActiveSync = '';}
    // ETA-Sites
    if (isset($_POST['ETA-Sites'])) {
        $ETASites = $_POST['ETA-Sites'];
        ?><br \><?php
        echo 'ETASites: ';
        echo $ETASites;
    } else {$ETASites = '';}
    // NU-Sites
    if (isset($_POST['NU-Sites'])) {
        $NUSites = $_POST['NU-Sites'];
        ?><br \><?php
        echo 'NUSites: ';
        echo $NUSites;
    } else {$NUSites = '';}
    // ETA-VPN
    if (isset($_POST['ETA-VPN'])) {
        $ETAVPN = $_POST['ETA-VPN'];
        ?><br \><?php
        echo 'ETAVPN: ';
        echo $ETAVPN;
    } else {$ETAVPN = '';}
    // NU-VPN
    if (isset($_POST['NU-VPN'])) {
        $NUVPN = $_POST['NU-VPN'];
        ?><br \><?php
        echo 'NUVPN: ';
        echo $NUVPN;
    } else {$NUVPN = '';}
    // ETA-CRM
    if (isset($_POST['ETA-CRM'])) { $ETACRM = $_POST['ETA-CRM'];} else {$ETACRM = '';}
        ?><br \><?php
        echo 'ETACRM: ';
        echo $ETACRM;
    // NU-CRM
    if (isset($_POST['NU-CRM'])) { $NUCRM = $_POST['NU-CRM'];} else {$NUCRM = '';}
        ?><br \><?php
        echo 'NUCRM: ';
        echo $NUCRM;
    // ETA-Outlook
    if (isset($_POST['ETA-Outlook'])) { $ETAOutlook = $_POST['ETA-Outlook'];} else {$ETAOutlook = '';}
        ?><br \><?php
        echo 'ETAOutlook: ';
        echo $ETAOutlook;
    // NU-Outlook
    if (isset($_POST['NU-Outlook'])) { $NUOutlook = $_POST['NU-Outlook'];} else {$NUOutlook = '';}
        ?><br \><?php
        echo 'NUOutlook: ';
        echo $NUOutlook;
    // ETA-iOWA
    if (isset($_POST['ETA-iOWA'])) { $ETAiOWA = $_POST['ETA-iOWA'];} else {$ETAiOWA = '';}
        ?><br \><?php
        echo 'ETAiOWA: ';
        echo $ETAiOWA;
    // NU-iOWA
    if (isset($_POST['NU-iOWA'])) { $NUiOWA = $_POST['NU-iOWA'];} else {$NUiOWA = '';}
        ?><br \><?php
        echo 'NUiOWA: ';
        echo $NUiOWA;
    // ETA-iAS
    if (isset($_POST['ETA-iAS'])) { $ETAiAS = $_POST['ETA-iAS'];} else {$ETAiAS = '';}
        ?><br \><?php
        echo 'ETAiAS: ';
        echo $ETAiAS;
    // NU-iAS
    if (isset($_POST['NU-iAS'])) { $NUiAS = $_POST['NU-iAS'];} else {$NUiAS = '';}
        ?><br \><?php
        echo 'NUiAS: ';
        echo $NUiAS;
    // ETA-NA
    if (isset($_POST['ETA-NA'])) { $ETANA = $_POST['ETA-NA'];} else {$ETANA = '';}
        ?><br \><?php
        echo 'ETANA: ';
        echo $ETANA;
    // NU-NA
    if (isset($_POST['NU-NA'])) { $NUNA = $_POST['NU-NA'];} else {$NUNA = '';}
        ?><br \><?php
        echo 'NUNA: ';
        echo $NUNA;
    // ETA-IA
    if (isset($_POST['ETA-IA'])) { $ETAIA = $_POST['ETA-IA'];} else {$ETAIA = '';}
        ?><br \><?php
        echo 'ETAIA: ';
        echo $ETAIA;
    // NU-IA
    if (isset($_POST['NU-IA'])) { $NUIA = $_POST['NU-IA'];} else {$NUIA = '';}
        ?><br \><?php
        echo 'NUIA: ';
        echo $NUIA;
    // status11
    if (isset($_POST['status11'])) { $status11 = $_POST['status11'];} else {$status11 = '';}
        ?><br \><?php
        echo 'status11: ';
        echo $status11;
    // ETA-CRMi
    if (isset($_POST['ETA-CRMi'])) { $ETACRMi = $_POST['ETA-CRMi'];} else {$ETACRMi = '';}
        ?><br \><?php
        echo 'ETACRMi: ';
        echo $ETACRMi;
    // NU-CRMi
    if (isset($_POST['NU-CRMi'])) { $NUCRMi = $_POST['NU-CRMi'];
        ?><br \><?php
        echo 'NUCRMi: ';
        echo $NUCRMi;} else {$NUCRMi = '';}
    // ETA-iSites
    if (isset($_POST['ETA-iSites'])) { $ETAiSites = $_POST['ETA-iSites'];
        ?><br \><?php
        echo 'ETAiSites: ';
        echo $ETAiSites; } else {$ETAiSites = '';}
    // NU-iSites
    if (isset($_POST['NU-iSites'])) { $NUiSites = $_POST['NU-iSites'];} else {$NUiSites = '';}
        ?><br \><?php
        echo 'NUiSites: ';
        echo $NUiSites;
    ?>
