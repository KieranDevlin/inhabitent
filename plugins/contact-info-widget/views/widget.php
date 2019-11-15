<!-- This file is used to markup the public-facing widget. -->

<?php if (strlen(trim($phone)) > 0) : ?>
    <p>
        <i class="fas fa-phone-alt"></i>
        <a href="tel:<?= $phone; ?>"> <?= $phone; ?></a>

    </p>

<?php endif; ?>

<?php if (strlen(trim($email)) > 0) : ?>
    <p>
        <i class="fas fa-envelope"></i>
        <a href="mailto:<?= $email; ?>"> <?= $email; ?></a>

    </p>
<?php endif; ?>

<?php if (strlen(trim($address)) > 0) : ?>
    <p>
        <i class="fas fa-map-marker-alt"></i>
        <?= $address; ?>

    </p>
<?php endif; ?>