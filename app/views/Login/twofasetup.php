<?php require APPROOT.'/views/includes/header.php'; ?>

    <h1>2FA Setup View</h1>
    <p>This view is invoked by the TwoFAController</p>
    
    <h2>Please scan the QR Code with an Authenticator App </h2>

    <?php
        echo '<img src="'.$data['qrcode'].'" alt="QRCode" />';
    ?>

<?php require APPROOT.'/views/includes/footer.php'; ?>