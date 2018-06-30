<h2><?php echo $title; ?></h2>
<hr>
<?php foreach ($courses as $course) { ?>
    <h3><?php echo $course['name']; ?></h3>
    <small class="post-date">Creado el <?php echo Carbon\Carbon::parse($course['created_at'])->format('d/m/Y'); ?>, en <strong><?php echo $course['category_name']; ?></strong></small><br>
    <?php echo word_limiter($course['details'], 50); ?>
    <br>
    <br>
    <p><a class="btn btn-default btn-primary" href="<?php echo site_url('/courses/' . $course['id'])?>">Leer más</a></p>
<?php } ?>