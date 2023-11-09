<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
<div class="text-center">
    <h1>My Form</h1>

    <?= form_open('item/add') ?>
    <?php
    $data = [
        'name'     => 'name',
        'id'       => 'name',
        'placeholder'    => 'Enter Item Name',
        'class' => 'form-control form-control-sm',
    ];

    ?>

    <?= form_input($data) ?>
    <?= form_input('name', set_value('name')) ?>

</div>

<?= $this->endSection('content') ?>