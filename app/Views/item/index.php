<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
<div class="text-center mb-2">
    <h1>List of Items</h1>

</div>

<div class="container rounded position-relative">
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url() ?>item/add" class="btn btn-primary btn-sm" role="button"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Item</a>
    </div>
    <div class="card border border-primary">
        <span class="legend bg-primary text-white rounded px-3" style="position:absolute; top: -15px; left:15px; padding: 5px;">Search Item</span>
        <div class="card-body">
            <form action="<?= base_url() ?>item/search" method="POST">
                <div class="row mt-2 mb-3">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="search">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="search">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="search">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-2">
                        <div class="buttons mt-4">
                            <button type="submit" class="btn btn-primary btn-sm" role="button"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                            <a href="<?= base_url() ?>item/index" class="btn btn-warning btn-sm" role="button"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="border border-primary p-1 rounded mt-2">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="bg-primary text-white">ID</th>
                    <th class="bg-primary text-white">Name</th>
                    <th class="bg-primary text-white">Price</th>
                    <th class="bg-primary text-white">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item->id; ?></td>
                        <td><?= $item->name; ?></td>
                        <td>₱ <?= $item->price; ?></td>
                        <td>
                            <a href="<?= base_url() ?>item/view/<?= $item->id ?>" class="btn btn-success btn-sm" role="button"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                            <a href="<?= base_url() ?>item/edit/<?= $item->id ?>" class="btn btn-warning btn-sm" role="button"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                            <a href="<?= base_url() ?>item/delete/<?= $item->id ?>" class="btn btn-danger btn-sm" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>
<?= $this->endSection('content') ?>