<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
<div class="text-center mb-2">
    <h1>Edit Item</h1>

</div>
<div class="container rounded position-relative">
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url() ?>item/index" class="btn btn-danger btn-sm" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Item List</a>
    </div>

    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger mb-2" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
    <form class="mt-4 border border-primary rounded p-3 position-relative" action="<?= base_url() ?>item/edit/<?= $item->id ?>" method="POST">
        <span class="legend bg-primary text-white rounded px-3" style="position:absolute; top: -16px; left:15px; padding: 5px;">Edit Item <?= $item->name ?></span>
        <div class="form-group row mt-3">
            <label for="name" class="col-4 col-form-label">Item Name</label>
            <div class="col-8">
                <input id="name" name="name" placeholder="Item Name" type="text" class="form-control" value="<?= set_value('id', $item->id) ?>" disabled>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="name" class="col-4 col-form-label">Item Name</label>
            <div class="col-8">
                <input id="name" name="name" placeholder="Item Name" type="text" class="form-control" value="<?= set_value('name', $item->name) ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">PHP</div>
                    </div>
                    <input id="price" name="price" placeholder="0" type="text" class="form-control" value="<?= set_value('price', $item->price) ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description</label>
            <div class="col-8">
                <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?= set_value('description', $item->description) ?></textarea>
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