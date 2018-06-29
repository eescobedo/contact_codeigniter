<h2><?php echo $title; ?></h2>

<?php foreach ($categories as $post) { ?>
    <h3><?php echo $post['name']; ?></h3>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
    <?php echo word_limiter($post['details'], 50); ?>
    <br>
    <br>
    <p><a class="btn btn-default btn-primary" href="<?php echo site_url('/categories/' . $post['id'])?>">Read More</a></p>
<?php } ?>