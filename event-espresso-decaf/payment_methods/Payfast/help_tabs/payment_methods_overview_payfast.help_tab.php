<?php

?>
<h3><?php
    _e('Payfast', 'event_espresso'); ?></h3>
<p>
    <?php
    _e(
        'You will need a Payfast Individual or Business account to receive payments using Payfast.',
        'event_espresso'
    ); ?>
</p>
<h3><?php
    _e('Payfast Settings', 'event_espresso'); ?></h3>
<ul>
    <li>
        <strong><?php
            _e('Debug Mode', 'event_espresso'); ?></strong><br/>
        <?php
        _e(
            'This is the equivalent to sandbox or test mode. If this option is enabled,
           be sure to enter the sandbox credentials in the necessary fields.
           Be sure to turn this setting off when you are done testing.',
            'event_espresso'
        ); ?>
    </li>
    <li>
        <strong><?php
            _e('Image URL', 'event_espresso'); ?></strong><br/>
        <?php
        _e('Select an image/logo that should be shown on the payment page for Payfast.', 'event_espresso'); ?>
    </li>
    <li>
        <strong><?php
            _e('Payfast Merchant ID', 'event_espresso'); ?></strong><br/>
        <?php
        _e('The merchant id available from the \'Settings\' page within the logged in dashboard on payfast.io'); ?>
    </li>
    <li>
        <strong><?php
            _e('Payfast Merchant Key', 'event_espresso'); ?></strong><br/>
        <?php
        _e('The merchant key available from the \'Settings\' page within the logged in dashboard on payfast.io'); ?>
    </li>
    <strong><?php
        _e('Payfast Passphrase', 'event_espresso'); ?></strong><br/>
    <?php
    _e(
        'ONLY INSERT A VALUE INTO THE SECURE PASSPHRASE IF YOU HAVE SET THIS ON THE
          INTEGRATION PAGE OF THE LOGGED IN AREA OF THE PAYFAST WEBSITE!'
    ); ?>
    </li>

</ul>
