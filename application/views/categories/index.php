<h2><?php echo $title; ?></h2>
<hr>
<?php foreach ($categories as $post) { ?>
    <h3><?php echo $post['name']; ?></h3>
    <small class="post-date">Creada el: <?php echo Carbon\Carbon::parse($post['created_at'])->format('d/m/Y'); ?></small><br>
    <?php echo word_limiter($post['details'], 50); ?>
    <br>
    <br>
    <p><a class="btn btn-default btn-primary" href="<?php echo site_url('/categories/' . $post['id'])?>">Leer más</a></p>
<?php } ?>