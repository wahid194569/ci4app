<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello World!</h1>
            <?php
            // d($tes) berfungsi seperti var_dump
            // d($tes);
            // dd($tes) == var_dump + die
            // dd($tes);

            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>