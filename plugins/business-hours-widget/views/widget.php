<!-- This file is used to markup the public-facing widget. -->

<?php if (strlen(trim($monday_friday)) > 0) : ?>
    <p>
        <span class="days-of-operation">Monday to Friday: &nbsp;</span><?= $monday_friday; ?>
    </p>
<?php endif; ?>

<?php if (strlen(trim($saturday)) > 0) : ?>
    <p>
        <span class="days-of-operation">Saturday: &nbsp;</span><?= $saturday; ?>
    </p>
<?php endif; ?>

<?php if (strlen(trim($sunday)) > 0) : ?>
    <p>
        <span class="days-of-operation">Sunday: &nbsp;</span><?= $sunday; ?>
    </p>
<?php endif; ?>