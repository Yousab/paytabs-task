<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<section>
    <div class="container">

        <h2>Update Category</h2>
        <form class="form-horizontal" action="/category/edit/<?php echo $updated_category->id; ?>" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" value="<?php echo $updated_category->name; ?>" placeholder="Enter category name" name="category_name" required aria-required="true">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="parent-category">Parent Category:</label>
                <div class="col-sm-10">
                    <select id="parent-category" class="form-control select-lg mb-3" name="parent_category">
                        <option selected value="">Select Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php print $category->id;  ?>" <?php ($updated_category->parent_id == $category->id) ? print "selected" : '' ?>><?php print $category->name; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection() ?>