<?php get_header(); ?>

<main role="main">
    <div id="top" class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-6">
                    <div class="text-left pt-5 text-white">
                        <h1 class="display-4"><?php echo get_the_title(2); ?></h1>
                        <?php $post = get_post(2);
                        $output = apply_filters('the_content', $post->post_content);
                        echo $output; ?>
                        <button class="btn btn-primary btn-lg" role="button">Download</button>
                        <button class="btn btn-outline-primary btn-lg" role="button">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pricing" class="pricing-table p-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-8">
                    <div class="text-center pt-3 pb-3">
                        <h2><?php echo get_the_title(13); ?></h2>
                        <?php $post = get_post(13);
                        $output = apply_filters('the_content', $post->post_content);
                        echo $output; ?>

                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-sm-12">
                    <div class="card-group">
                        <div class="card text-center m-2">
                            <div class="card-header text-white">
                                <h5 class="card-title">Standard</h5>
                                <span class="price display-3">$12</span>

                            </div>
                            <div class="card-body">
                                <ul class="card-text">
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-times"></i> Some goes here</li>
                                    <li><i class="fas fa-times"></i> Some goes here</li>
                                    <li><i class="fas fa-times"></i> Some goes here</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-outline-primary">Signup Now</button>
                            </div>
                        </div>
                        <div class="card text-center m-2">
                            <div class="card-header text-white">
                                <h5 class="card-title">Business</h5>
                                <span class="price display-3">$30</span>
                            </div>
                            <div class="card-body">
                                <ul class="card-text">
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-times"></i> Some goes here</li>
                                    <li><i class="fas fa-times"></i> Some goes here</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary">Signup Now</button>
                            </div>
                        </div>
                        <div class="card text-center m-2">
                            <div class="card-header text-white">
                                <h5 class="card-title">Premium</h5>
                                <span class="price display-3">$50</span>

                            </div>
                            <div class="card-body">
                                <ul class="card-text">
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                    <li><i class="fas fa-check"></i> Some goes here</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-outline-primary">Signup Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="download" class="download-app p-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-8">
                    <div class="text-center text-white pt-3 pb-3">
                        <h2><?php echo get_the_title(9); ?></h2>
                        <?php $post = get_post(9);
                        $output = apply_filters('the_content', $post->post_content);
                        echo $output; ?>
                        <button class="btn btn-outline-primary text-white" type="button"><i class="fab fa-apple"></i>
                            Apple Store
                        </button>
                        <button class="btn btn-outline-primary text-white" type="button"><i class="fab fa-android"></i>
                            Google Play
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-us" class="contact-form p-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-12 col-md-8">
                    <div class="text-center pt-3 pb-3">
                        <h2><?php echo get_the_title(11); ?></h2>
                        <?php $post = get_post(11);
                        $output = apply_filters('the_content', $post->post_content);
                        echo $output; ?>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputMessage">Message</label>
                                <textarea class="form-control" id="inputMessage" rows="3"
                                          placeholder="Message"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
