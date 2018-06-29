<?php //var_dump($category); die ('end'); ?>

<small class="post-date">Posted on: <?php echo $category['created_at']; ?></small><br>
<h2><?php echo $category['name']; ?></h2>
<div class="post-body">
    <?php echo $category['details']; ?>
</div>

<hr>
<div class="row">
    <div class="col-lg-4">
        <p class="bs-component">
            <a class="btn btn-primary" href="/categories/edit/<?php echo $category['id']; ?>">Edit</a>
            <?php echo form_open('/categories/delete/' . $category['id']); ?>
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </p>
    </div>
</div>
