<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
<div class="text-center mb-2">
    <h1>Add Item</h1>

</div>
<div class="container rounded position-relative">
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url() ?>item/index" class="btn btn-danger btn-sm" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Item List</a>
    </div>
    <!-- <div class="card border border-primary">
        <span class="legend bg-primary text-white rounded px-3" style="position:absolute; top: -15px; left:15px; padding: 5px;">Create New Item</span>
        <div class="card-body">
            <div class="row mt-2 mb-3">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="search">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="search">
                        <label for="">Description</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="search">
                        <label for="">Price</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="buttons mt-4">
                        <a href="#" class="btn btn-primary btn-sm" role="button"><i class="fa fa-save" aria-hidden="true"></i> Save Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger mb-2" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>


    <form class="mt-4 border border-primary rounded p-3 position-relative" action="<?= base_url() ?>item/add" method="POST">
        <span class="legend bg-primary text-white rounded px-3" style="position:absolute; top: -16px; left:15px; padding: 5px;">Create New Item</span>
        <div class="form-group row mt-3">
            <label for="name" class="col-4 col-form-label">Item Name</label>
            <div class="col-4">
                <input id="name" name="name" placeholder="Item Name" type="text" class="form-control <?php if (validation_show_error('price')) echo 'is-invalid' ?>" value="<?= set_value('name') ?>" value="<?= set_value('name') ?>">
            </div>
            <div class="col-4">
                <?php if (validation_show_error('name')) : ?>
                    <div class="alert alert-danger py-1" role="alert">
                        <?= validation_show_error('name') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <div class="col-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">PHP</div>
                    </div>
                    <input id="price" name="price" placeholder="0" type="text" class="form-control <?php if (validation_show_error('price')) echo 'is-invalid' ?>" value="<?= set_value('price') ?>">
                </div>
            </div>
            <div class="col-4">
                <?php if (validation_show_error('price')) : ?>
                    <div class="alert alert-danger py-1" role="alert">
                        <?= validation_show_error('price') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description</label>
            <div class="col-4">
                <textarea id="description" name="description" cols="40" rows="5" class="form-control <?php if (validation_show_error('price')) echo 'is-invalid' ?>"><?= set_value('description') ?></textarea>
            </div>
            <div class="col-4">
                <?php if (validation_show_error('description')) : ?>
                    <div class="alert alert-danger py-1" role="alert">
                        <?= validation_show_error('description') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Submit</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection('content') ?>