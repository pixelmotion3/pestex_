<?php if ($showLabel && $showField) { ?>
    <?php if ($options['wrapper'] !== false) { ?>
    <div <?= $options['wrapperAttrs'] ?> >
    <?php } ?>
<?php } ?>

<?php if ($showLabel && $options['label'] !== false && $options['label_show']) { ?>
    <?php include labelBlockPath() ?>
<?php } ?>

<?php if ($showField) { ?>
    <input type="<?= $type ?>" name="<?= $name ?>"  value="<?= $options['value'] ?>"
    <?= render_form_attributes($options['attr'] ?? []); ?>
    />

    <?php include helpBlockPath(); ?>
<?php } ?>

<?php include errorBlockPath(); ?>

<?php if ($showLabel && $showField) { ?>
    <?php if ($options['wrapper'] !== false) { ?>
    </div>
    <?php } ?>
<?php } ?>