<!-- This file is used to markup the public-facing widget. -->

<?php if (strlen(trim($phone)) > 0) : ?>
    <p>
        <i class="fas fa-phone-alt"></i>
        <a href="tel:778-456-7891"> <?= $phone; ?></a>

    </p>

<?php endif; ?>

<?php if (strlen(trim($email)) > 0) : ?>
    <p>
        <i class="fas fa-envelope"></i>
        <a href="mailto:info@inhabitent.com"> <?= $email; ?></a>

    </p>
<?php endif; ?>

<?php if (strlen(trim($address)) > 0) : ?>
    <p>
        <i class="fas fa-map-marker-alt"></i>
        <?= $address; ?>

    </p>
<?php endif; ?>