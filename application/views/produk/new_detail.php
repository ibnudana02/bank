<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">

            <div class="content col-lg-9">

                <div id="blog" class="single-post">

                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-animate="bounce">
                                <a href="#">
                                    <!-- <img alt="" src="<?= base_url('assets/new/') ?>images/blog/1.jpg"> -->
                                    <img alt="" src="<?= base_url('upload/produk/' . $row->image); ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><?= ucwords($row->produk); ?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('M d, Y', strtotime($row->created_on)) ?></span>
                                    <span class="post-meta-category"><a href="#"><i class="fa fa-tag"></i><?= $row->jenis ?></a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                                <?php echo $row->deskripsi; ?>
                            </div>
                            <div class="post-navigation">
                                <a href="blog-single-slider.html" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post</span>Post with a slider and lightbox</div>
                                </a>
                                <a href="blog-masonry-3.html" class="post-all">
                                    <i class="icon-grid"> </i>
                                </a>
                                <a href="blog-single-video.html" class="post-next">
                                    <div class="post-next-title"><span>Next Post</span>Post with YouTube Video</div>
                                </a>
                            </div>

                            <!-- <div class="comments" id="comments">
                                <div class="comment_number">
                                    Comments <span>(2)</span>
                                </div>
                                <div class="comment-list">

                                    <div class="comment" id="comment-1">
                                        <div class="image"><img alt="" src="images/blog/author.jpg" class="avatar"></div>
                                        <div class="text">
                                            <h5 class="name">John Doe</h5>
                                            <span class="comment_date">Posted at 15:32h, 06 December</span>
                                            <a class="comment-reply-link" href="#">Reply</a>
                                            <div class="text_holder">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="respond-form" id="respond">
                                <div class="respond-comment">
                                    Leave a <span>Comment</span></div>
                                <form class="form-gray-fields">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="name">Name</label>
                                                <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="email">Email</label>
                                                <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="website">Website</label>
                                                <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="upper" for="comment">Your comment</label>
                                                <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group text-center">
                                                <button class="btn" type="submit">Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>


            <div class="sidebar sticky-sidebar col-lg-3">

                <div class="widget  widget-newsletter">
                    <form id="widget-search-form-sidebar" action="https://inspirothemes.com/polo/search-results-page.html" method="get">
                        <div class="input-group">
                            <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="widget">
                    <div class="tabs">
                        <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-posts-content">
                            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/5.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">A true story, that never been told!</a>
                                            <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/6.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Beautiful nature, and rare feathers!</a>
                                            <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/7.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">The most happiest time of the day!</a>
                                            <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget  widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>