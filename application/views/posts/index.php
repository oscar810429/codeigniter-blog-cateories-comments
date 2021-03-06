<h1><?php echo $title; ?></h1>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img id="imgSize" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
            <p><?php echo word_limiter($post['body'], 50); ?></p><br>
            <p><a class="btn btn-default" href="<?php echo site_url('posts/'.$post['slug']); ?>">Read More</a></p>
        </div>
    </div>
<?php endforeach; ?>