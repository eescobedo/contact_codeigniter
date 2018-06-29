<h2><?php echo $title; ?></h2>

<?php foreach ($courses as $course) { ?>
    <h3><?php echo $course['name']; ?></h3>
    <small class="post-date">Posted on: <?php echo $course['created_at']; ?></small><br>
    <?php echo $course['details']; ?>
    <br>
    <br>
    <p><a class="btn btn-default btn-primary" href="<?php echo site_url('/courses/' . $course['id'])?>">Read More</a></p>
<?php } ?>