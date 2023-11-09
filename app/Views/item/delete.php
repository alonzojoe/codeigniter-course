<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
<div class="text-center mb-2">
    <h1>Delete Item</h1>

</div>
<div class="container rounded position-relative">
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url() ?>item/index" class="btn btn-danger btn-sm" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Item List</a>
    </div>
    <form action="<?= base_url() ?>item/destroy/<?= $item->id ?>">
        <div class="mt-4 border border-primary rounded p-3 position-relative">
            <span class="legend bg-primary text-white rounded px-3" style="position:absolute; top: -16px; left:15px; padding: 5px;">Delete Item Confirmation</span>
            <div class="form-group row mt-3">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input id="name" name="name" placeholder="Item Name" type="text" class="form-control" readonly value="<?= $item->name ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Price</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">PHP</div>
                        </div>
                        <input id="price" name="price" placeholder="0" type="text" class="form-control" readonly value="<?= $item->price ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description" name="description" cols="40" rows="5" class="form-control" readonly><?= $item->description ?></textarea>
                </div>
            </div>
            <div class="text-center">
                <h1>Are you sure you want to delete this item?</h1>
                <div class="d-flex justify-content-center gap-2">
                    <button type="submit" class="btn btn-danger" role="button"><i class="fa fa-check" aria-hidden="true"></i> Yes</button>
                    <a href="<?= base_url() ?>item/index" class="btn btn-warning" role="button"><i class="fa fa-times" aria-hidden="true"></i> No</a>
                </div>
            </div>

        </div>
    </form>
</div>
<?= $this->endSection('content') ?>