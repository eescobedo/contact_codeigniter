<h2><?php echo $course['name']; ?></h2>
<small class="post-date">Posted on: <?php echo $course['created_at']; ?></small><br>
<div class="post-body">
    <?php echo $course['details']; ?>
</div>
<div class="post-body">
    <?php echo $course['schedule']; ?>
</div>

<hr>
<div class="row">
    <div class="col-lg-4">
        <p class="bs-component">
            <a class="btn btn-primary" href="/courses/edit/<?php echo $course['id']; ?>">Edit</a>
            <?php echo form_open('/courses/delete/' . $course['id']); ?>
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </p>
    </div>
</div>
