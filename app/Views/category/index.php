<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section class="">
    <div class="container">
        <div class="row">
            <?php if ($message) : ?>
                <div class="alert alert-primary col-lg-12" role="alert">
                    <?php print $message; ?>
                </div>
            <?php endif; ?>
            <div class="col-lg-12 mb-2">
                <h2 style="float: left;" class="col-lg-6">Categories List (<?php print count($categories); ?>)</h1>
                    <a style="float: right;" href="/category/add" role="button" class="col-lg-3 btn btn-primary">Add New Category</a>
            </div>

            <div class="col-lg-12">
                <table class="category-list table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Parent Category</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?php print $category->name; ?></td>
                                <td><?php ($category->parent_id) ? print $parent_categories[$category->parent_id] : print '-'; ?></td>
                                <td><?php print $category->created_at; ?></td>
                                <td><?php print $category->updated_at; ?></td>
                                <td>
                                    <a class="btn btn-secondary" href="<?php print '/category/update/' . $category->id; ?>">Update</a>
                                    <a class="btn btn-secondary ml-2" href="<?php print  '/category/delete/' . $category->id; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>