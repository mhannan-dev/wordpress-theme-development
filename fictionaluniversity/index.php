<?php define('WP_USE_THEMES', false);
get_header(); ?>
<main id="site-content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
                            </a>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on January 1, 2022 by Start Bootstrap</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php the_content(); ?></p>

                        </section>
                    </article>
                <?php endwhile; ?>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>