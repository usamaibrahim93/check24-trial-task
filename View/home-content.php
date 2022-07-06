<?php
/**
 * Application Home Content
 *
 */

?>

<div class="container px-4 px-lg-5">
    <?php if( $data['blogs'] ): ?>
        <?php foreach( $data['blogs'] as $blog ): ?>
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light"><?php echo $blog['title']; ?></h1>
                    <p><?php echo $blog['content']; ?></p>
                    <a class="btn btn-primary" href="<?php echo getBlogUrl($blog['slug']); ?>">Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h1>No blogs found</h1>
    <?php endif; ?>
</div>
