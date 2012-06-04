<?php
if(!defined('SETUPINC')) die('Kwaheri!');
?>    
<div id="main">
    <h1 style="color:#FF7700;">Upgrade Aborted!</h1>
    <div id="intro">
        <p>Upgrade aborted due to errors. Any errors at this stage are fatal. Please note the error(s), if any, when contacting us.<p>
        <?php
        if($upgrader && ($errors=$upgrader->getErrors())) {
            if($errors['err'])
                echo sprintf('<b><font color="red">%s</font></b>',$errors['err']);
            echo '<ul class="error">';
            unset($errors['err']);
            foreach($errors as $k => $error)
                echo sprintf('<li>%s</li>',$error);
            echo '</ul>';
        } else {
            echo '<b><font color="red">Internal error occurred - get technical help.</font></b>';
        }
        ?>
        <p>Please, refer to the <a target="_blank" href="http://osticket.com/wiki/Upgrade_and_Migration">Upgrade Guide</a> on the wiki for more information.</p>
    </div>
    <p><strong>Need Help?</strong> We provide <a target="_blank" href="http://osticket.com/support/professional_services.php"><u>professional upgrade services</u></a> and commercial support. <a target="_blank" href="http://osticket.com/support/">Contact us</a> today for expedited help.</p>
</div>    
<div id="sidebar">
    <h3>What to do?</h3>
    <p>Restore your previous version from backup and try again or <a target="_blank" href="http://osticket.com/support/">seek help</a>.</p>    
</div>
