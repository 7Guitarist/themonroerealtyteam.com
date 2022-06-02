<?php get_header(); ?>
<!-- slideshow -->
<section class="hp-slideshow">
    <div class="region-slideshow-container">
        <h2 class="hidden">Slideshow</h2>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?>
        <?php endif ?>
    </div>
</section>
<!-- slideshow end -->
<!-- cta -->
<section class="hp-cta">
    <div class="region-cta-container">
        <a href="[blogurl]" aria-label="View Properties" class="site-btn">View Properties</a>
        <a href="[blogurl]" aria-label="Contact us" class="site-btn">Contact us</a>
        <a href="[blogurl]" aria-label="Make an Appointment" class="site-btn">Make an Appointment</a>
        <a href="[blogurl]" aria-label="Join our team" class="site-btn">Join our team</a>
    </div>

    <div class="site-bg">
        <img alt="background" src="<?php echo get_stylesheet_directory_uri() ?>/images/cta-bg.jpg" width="1600"
            height="466" />
    </div>
    <div class="site-bg hover">
        <img alt="background" src="<?php echo get_stylesheet_directory_uri() ?>/images/cta-bg-hover.jpg" width="1600"
            height="469" />
    </div>
</section>
<!-- cta end -->
<!-- buffalo-stories -->
<section class="hp-buffalo-stories">
    <div class="region-buffalo-stories-container">
        <strong class="site-title-primary">The Buffalo Story</strong>
        <p>In today’s real estate market, selling and buying a home requires advanced
            knowledge of online as well as traditional marketing platforms.
            Just having a real estate license and listing a home on
            the MLS is not enough – you want
            an agent who has their ear to the ground when it comes to market trends,
            a deep understanding of
            the communities they serve,
            and the ability to think outside the box.
        </p>
        <a href="[blogurl]" aria-label="READ MORE" class="site-btn">
            <span>READ MORE</span>
            <span class="btn-plus">+</span>
        </a>
    </div>

    <div class="site-bg">
        <img alt="background" src="<?php echo get_stylesheet_directory_uri() ?>/images/bs-bg.png" width="229"
            height="486" />
    </div>
</section>
<!-- buffalo-stories end -->
<!-- quick-search -->
<section class="hp-quick-search">
    <div class="region-quick-search-container">
        <div class="quick-search-form">
            <div class="primary-qs-item site-title">
                <strong class="site-title-primary">Quick Search</strong>
            </div>
            <div class="secondary-qs-item">
                <select aria-label="qs-fields">
                    <option value="SFR,CND">House / Condo</option>
                    <option value="SFR">House Only</option>
                    <option value="CND">Condo Only</option>
                    <option value="RI">Multi-Family</option>
                    <option value="COM">Commercial</option>
                    <option value="LL">Lots / Land</option>
                    <option value="RI">Multi-Unit Residential</option>
                    <option value="MH">Mobile Home</option>
                    <option value="RNT">Rental</option>
                    <option value="FRM">Farms</option>
                </select>
            </div>
            <div class="tertiary-qs-item">
                <input type="text" placeholder="City or Zip" aria-label="qs-fields" />
            </div>
            <div class="fourth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Beds</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="fifth-qs-item">
                <select aria-label="qs-fields">
                    <option value="">Baths</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                </select>
            </div>
            <div class="sixth-qs-item">
                <select aria-label="qs-fields">
                    <option>Min. Price</option>
                    <option>$1,000,000</option>
                    <option>$2,000,000</option>
                    <option>$3,000,000</option>
                    <option>$4,000,000</option>
                </select>
            </div>
            <div class="seventh-qs-item">
                <select aria-label="qs-fields">
                    <option>Max. Price</option>
                    <option>$1,000,000</option>
                    <option>$2,000,000</option>
                    <option>$3,000,000</option>
                    <option>$4,000,000</option>
                </select>
            </div>
            <div class="eighth-qs-item">
                <input type="text" placeholder="ai-font-magnifying-glass-b" aria-label="qs-fields" />
            </div>
            <div class="ninth-qs-item">
                <a href="[blogurl]" aria-label="Settings" class="site-btn">
                    <img alt="agent" class="img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/qs-setting.png" width="65"
                        height="63" />
                </a>
            </div>
        </div>
    </div>

    <div class="site-bg">
        <img alt="background" src="<?php echo get_stylesheet_directory_uri() ?>/images/qs-bg.jpg" width="1600"
            height="436" />
    </div>
</section>
<!-- quick-search end -->
<!-- welcome -->
<section class="hp-welcome">
    <div class="region-welcome-container">
        <div class="welcome-primary-section">
            <img alt="agent" class="img-responsive"
                src="<?php echo get_stylesheet_directory_uri() ?>/images/about-image.jpg" width="479" height="555" />
        </div>
        <div class="welcome-secondary-section">
            <div class="site-title">
                <span class="site-title-secondary">WELCOME</span>
                <strong class="site-title-primary">MEET Kaleb Monroe</strong>
            </div>
            <p>Age is just a number and this applies to our Team Leader Kaleb Monroe
                in every sense. Kaleb is a 21-year-old real estate team owner and investor.
                His age has not limited him to the things he has been able to accomplish
                over a short period of time. He has been a licensed realtor helping
                clients for the last three years in addition to becoming the #1 Solo
                Production Agent for Keller Williams Clear Lake and landing the title
                of Rookie of the Year for 2021. His determination and ambitious personality
                has paved the way for his fast and ever-growing realty team. His team is
                motivated to reach the goal of helping over 100 families buy or sell client
                homes in 2022 which happens to double Kaleb’s personal production.
                Kaleb is a force to be reckoned with and everything he has accomplished
                since Highschool is only a glimpse of what his future accomplishments will
                entail.
                Keep an eye on this kid, he is going places!
            </p>
            <a href="[blogurl]" aria-label="READ MORE" class="site-btn">
                <span>READ MORE</span>
                <span class="btn-plus">+</span>
            </a>
        </div>
    </div>
    <div class="welcome-bbm">M</div>
</section>
<!-- welcome end -->
<!-- team -->
<section class="hp-team">
    <div class="region-team-container">
        <strong class="site-title-primary">MEET THE TEAM</strong>
        <div class="team-slick">
            <a href="[blogurl]" aria-label="team" class="team-item">
                <div class="team-img canvas-wrapper">
                    <canvas width="339" height="339"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-1.jpg" />
                </div>
                <div class="team-content">
                    <strong>ANGEL ISAIAH GONZALEZ</strong>
                    <p>R e a l t o r ®</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="team" class="team-item">
                <div class="team-img canvas-wrapper">
                    <canvas width="339" height="339"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-2.jpg" />
                </div>
                <div class="team-content">
                    <strong>ANGEL ISAIAH GONZALEZ</strong>
                    <p>R e a l t o r ®</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="team" class="team-item">
                <div class="team-img canvas-wrapper">
                    <canvas width="339" height="339"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-3.jpg" />
                </div>
                <div class="team-content">
                    <strong>ANGEL ISAIAH GONZALEZ</strong>
                    <p>R e a l t o r ®</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="team" class="team-item">
                <div class="team-img canvas-wrapper">
                    <canvas width="339" height="339"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-4.jpg" />
                </div>
                <div class="team-content">
                    <strong>ANGEL ISAIAH GONZALEZ</strong>
                    <p>R e a l t o r ®</p>
                </div>
            </a>
            <a href="[blogurl]" aria-label="team" class="team-item">
                <div class="team-img canvas-wrapper">
                    <canvas width="339" height="339"></canvas>
                    <img alt="team" class="img-team canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/team-4.jpg" />
                </div>
                <div class="team-content">
                    <strong>ANGEL ISAIAH GONZALEZ</strong>
                    <p>R e a l t o r ®</p>
                </div>
            </a>
        </div>
        <a href="[blogurl]" aria-label="Meet the team" class="site-btn">
            <span>Meet the team</span>
            <span class="btn-plus">+</span>
        </a>
    </div>

</section>
<!-- team end -->
<!-- properties -->
<section class="hp-properties">
    <div class="region-properties-container">
        <div class="properties-slick">
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="1600" height="573"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-1.jpg" />
                </div>
                <div class="properties-content">
                    <h3>$1,987,000</h3>
                    <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                    <div class="bbs">
                        <span>5 Beds</span>
                        <span>5 Baths</span>
                    </div>
                </div>
                <span class="site-btn">
                    <span>VIEW DETAILS</span>
                    <span class="btn-plus">+</span>
                </span>
            </a>
            <a href="[blogurl]" aria-label="properties" class="properties-item">
                <div class="properties-img canvas-wrapper">
                    <canvas width="1600" height="573"></canvas>
                    <img alt="properties" class="img-properties canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/properties-2.jpg" />
                </div>
                <div class="properties-content">
                    <h3>$1,987,000</h3>
                    <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                    <div class="bbs">
                        <span>5 Beds</span>
                        <span>5 Baths</span>

                    </div>
                </div>
                <span class="site-btn">
                    <span>VIEW DETAILS</span>
                    <span class="btn-plus">+</span>
                </span>
            </a>
        </div>
    </div>

</section>
<!-- properties end -->
<!-- sold -->
<section class="hp-sold">
    <div class="region-sold-container">
        <strong class="site-title-primary">sold Properties</strong>
        <div class="sold-slick-wrapper">
            <div class="sold-slick">
                <a href="[blogurl]" aria-label="sold" class="sold-item">
                    <div class="sold-img canvas-wrapper">
                        <canvas width="465" height="372"></canvas>
                        <img alt="sold" class="img-sold canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/sp-1.jpg" />
                    </div>
                    <div class="sold-content">
                        <h3>$1,987,000</h3>
                        <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                        <div class="bbs">
                            <span>5 Beds</span>
                            <span>5 Baths</span>
                        </div>
                        <span class="site-btn">
                            <span>READ MORE</span>
                            <span class="btn-plus">+</span>
                        </span>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="sold" class="sold-item">
                    <div class="sold-img canvas-wrapper">
                        <canvas width="465" height="372"></canvas>
                        <img alt="sold" class="img-sold canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/sp-2.jpg" />
                    </div>
                    <div class="sold-content">
                        <h3>$1,987,000</h3>
                        <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                        <div class="bbs">
                            <span>5 Beds</span>
                            <span>5 Baths</span>
                        </div>
                        <span class="site-btn">
                            <span>READ MORE</span>
                            <span class="btn-plus">+</span>
                        </span>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="sold" class="sold-item">
                    <div class="sold-img canvas-wrapper">
                        <canvas width="465" height="372"></canvas>
                        <img alt="sold" class="img-sold canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/sp-3.jpg" />
                    </div>
                    <div class="sold-content">
                        <h3>$1,987,000</h3>
                        <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                        <div class="bbs">
                            <span>5 Beds</span>
                            <span>5 Baths</span>
                        </div>
                        <span class="site-btn">
                            <span>READ MORE</span>
                            <span class="btn-plus">+</span>
                        </span>
                    </div>
                </a>
                <a href="[blogurl]" aria-label="sold" class="sold-item">
                    <div class="sold-img canvas-wrapper">
                        <canvas width="465" height="372"></canvas>
                        <img alt="sold" class="img-sold canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/sp-3.jpg.jpg" />
                    </div>
                    <div class="sold-content">
                        <h3>$1,987,000</h3>
                        <p>1700 East Walnut Avenue <br> El Segundo, CA 90245</p>
                        <div class="bbs">
                            <span>5 Beds</span>
                            <span>5 Baths</span>
                        </div>
                        <span class="site-btn">
                            <span>READ MORE</span>
                            <span class="btn-plus">+</span>
                        </span>
                    </div>
                </a>
            </div>
            <div class="sold-slick-arrow">
                <span class="ai-font-arrow-h-p prev"></span>
                <span class="ai-font-arrow-h-n next"></span>
            </div>
        </div>
        <a href="[blogurl]" aria-label="view all properties" class="site-btn">view all properties</a>
    </div>
</section>
<!-- sold end -->
<!-- areas -->
<section class="hp-areas">
    <div class="region-areas-container">
        <div class="area-wrapper1">
            <a href="[blogurl]" aria-label="areas" class="wrapper-item">
                <div class="areas-img canvas-wrapper">
                    <canvas width="679" height="344"></canvas>
                    <img alt="areas" class="img-areas canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area1.jpg" />
                </div>
                <span>The Woodlands</span>
            </a>


            <a href="[blogurl]" aria-label="areas" class="wrapper-item">
                <div class="areas-img canvas-wrapper">
                    <canvas width="679" height="344"></canvas>
                    <img alt="areas" class="img-areas canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area2.jpg" />
                </div>
                <span>Sugarland</span>
            </a>
            <a href="[blogurl]" aria-label="areas" class="wrapper-item">
                <div class="areas-img canvas-wrapper">
                    <canvas width="679" height="344"></canvas>
                    <img alt="areas" class="img-areas canvas-img img-responsive"
                        src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area2.jpg" />
                </div>
                <span>Clear Lake</span>
            </a>
        </div>
    </div>
    <div class="area-wrapper2">
        <a href="[blogurl]" aria-label="areas" class="wrapper-item">
            <div class="areas-img canvas-wrapper">
                <canvas width="679" height="344"></canvas>
                <img alt="areas" class="img-areas canvas-img img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area4.jpg" />
            </div>
            <span>Richmond</span>
        </a>
        <a href="[blogurl]" aria-label="areas" class="wrapper-item">
            <div class="areas-img canvas-wrapper">
                <canvas width="679" height="344"></canvas>
                <img alt="areas" class="img-areas canvas-img img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area5.jpg" />
            </div>
            <span>Friendswood</span>
        </a>
        <a href="[blogurl]" aria-label="areas" class="wrapper-item">
            <div class="areas-img canvas-wrapper">
                <canvas width="679" height="344"></canvas>
                <img alt="areas" class="img-areas canvas-img img-responsive"
                    src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-area6.jpg" />
            </div>
            <span>Katy</span>
        </a>

    </div>
</section>
<!-- areas end -->
<!-- testimonials -->
<section class="hp-testimonials">
    <div class="region-testimonials-container">

        <strong class="site-title-primary">The Monroe Team Reviews</strong>
        <div class="testimonials-slick-wrapper">
            <div class="testimonials-slick">
                <div class="testimonials-content">
                    <span class="quote">“</span>
                    <p>“We can’t thank Marco enough for helping us find our dream home
                        in Houston Texas. It’s exactly what we dreamed it would be – and we
                        didn’t go over our budget! Marco’s local market knowledge, expertise,
                        and amazing dedication made the whole buying process truly enjoyable.
                        Thank you so much, Marco! “
                    </p>
                    <h3>- John Doe</h3>
                </div>
                <div class="testimonials-content">
                    <span class="quote">“</span>
                    <p>“We can’t thank Marco enough for helping us find our dream home
                        in Houston Texas. It’s exactly what we dreamed it would be – and we
                        didn’t go over our budget! Marco’s local market knowledge, expertise,
                        and amazing dedication made the whole buying process truly enjoyable.
                        Thank you so much, Marco! “
                    </p>
                    <h3>- John Doe</h3>
                </div>
            </div>
            <div class="testimonials-slick-arrow">
                <span class="ai-font-arrow-h-p prev"></span>
                <span class="ai-font-arrow-h-n next"></span>
            </div>
        </div>
        <a href="[blogurl]" aria-label="view more testimonials" class="site-btn">
            <span>view more testimonials</span>
            <span class="btn-plus">+</span>
        </a>

    </div>
</section>
<!-- testimonials end -->
<!-- blogs -->
<section class="hp-blogs">
    <div class="region-blogs-container">
        <strong class="site-title-primary">Featured Vlogs</strong>
        <div class="blogs-slick-wrapper">
            <div class="blogs-slick">
                <a href="https://www.youtube.com/watch?v=mSgTCmR5aPQ" target="_blank" aria-label="blogs"
                    class="blogs-item aios-video-popup">
                    <div class="blogs-img canvas-wrapper">
                        <canvas width="564" height="333"></canvas>
                        <img alt="blogs" class="img-blogs canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-vlogs-1.jpg" />
                    </div>
                    <div class="blogs-content">
                        <span class="ai-font-play-button-a"></span>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=mSgTCmR5aPQ" target="_blank" aria-label="blogs"
                    class="blogs-item aios-video-popup">
                    <div class="blogs-img canvas-wrapper">
                        <canvas width="564" height="333"></canvas>
                        <img alt="blogs" class="img-blogs canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-vlogs-2.jpg" />
                    </div>
                    <div class="blogs-content">
                        <span class="ai-font-play-button-a"></span>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=mSgTCmR5aPQ" target="_blank" aria-label="blogs"
                    class="blogs-item aios-video-popup">
                    <div class="blogs-img canvas-wrapper">
                        <canvas width="564" height="333"></canvas>
                        <img alt="blogs" class="img-blogs canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-vlogs-3.jpg" />
                    </div>
                    <div class="blogs-content">
                        <span class="ai-font-play-button-a"></span>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=mSgTCmR5aPQ" target="_blank" aria-label="blogs"
                    class="blogs-item aios-video-popup">
                    <div class="blogs-img canvas-wrapper">
                        <canvas width="564" height="333"></canvas>
                        <img alt="blogs" class="img-blogs canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-vlogs-4.jpg" />
                    </div>
                    <div class="blogs-content">
                        <span class="ai-font-play-button-a"></span>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=mSgTCmR5aPQ" target="_blank" aria-label="blogs"
                    class="blogs-item aios-video-popup">
                    <div class="blogs-img canvas-wrapper">
                        <canvas width="564" height="333"></canvas>
                        <img alt="blogs" class="img-blogs canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/featured-vlogs-4.jpg" />
                    </div>
                    <div class="blogs-content">
                        <span class="ai-font-play-button-a"></span>
                    </div>
                </a>
            </div>
            <div class="blogs-slick-arrow">
                <span class="ai-font-arrow-h-p prev"></span>
                <span class="ai-font-arrow-h-n next"></span>
            </div>
        </div>
        <a href="[blogurl]" aria-label="view All Vlogs" class="site-btn">
            <span>view All Vlogs</span>
            <span class="btn-plus">+</span>
        </a>

    </div>
</section>

<!-- blogs end -->
<!-- social -->
<section class="hp-social">
    <div class="region-social-container">
        <strong class="site-title-primary">Social Media</strong>
        <div class="social-smi">
            <li>
                <a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
                    <span class="ai-font-facebook"></span>
                </a>
            </li>
            <li>
                <a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
                    <span class="ai-font-twitter"></span>
                </a>
            </li>
            <li>
                <a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
                    <span class="ai-font-youtube"></span>
                </a>
            </li>
        </div>
        <div class="social-slick-wrapper">
            <div class="social-slick">
                <a href="[blogurl]" aria-label="social" class="social-item">
                    <div class="social-img canvas-wrapper">
                        <canvas width="293" height="293"></canvas>
                        <img alt="social" class="img-social canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/social-media-1.jpg" />
                    </div>
                </a>
                <a href="[blogurl]" aria-label="social" class="social-item">
                    <div class="social-img canvas-wrapper">
                        <canvas width="293" height="293"></canvas>
                        <img alt="social" class="img-social canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/social-media-2.jpg" />
                    </div>
                </a>
                <a href="[blogurl]" aria-label="social" class="social-item">
                    <div class="social-img canvas-wrapper">
                        <canvas width="293" height="293"></canvas>
                        <img alt="social" class="img-social canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/social-media-3.jpg" />
                    </div>
                </a>
                <a href="[blogurl]" aria-label="social" class="social-item">
                    <div class="social-img canvas-wrapper">
                        <canvas width="293" height="293"></canvas>
                        <img alt="social" class="img-social canvas-img img-responsive"
                            src="<?php echo get_stylesheet_directory_uri() ?>/images/social-media-3.jpg" />
                    </div>
                </a>
            </div>
            <div class="social-slick-arrow">
                <span class="ai-font-arrow-h-p prev"></span>
                <span class="ai-font-arrow-h-n next"></span>
            </div>
        </div>
        <div class="site-title">
            <strong class="site-title-secondary">FOLLOW US ON</strong>
            <strong class="site-title-primary">instagram</strong>
        </div>
        <a href="[blogurl]" aria-label="VIEW MORE" class="site-btn">
            <span>VIEW MORE</span>
            <span class="btn-plus">+</span>
        </a>

    </div>
</section>
<!-- social end -->
<!-- contact -->
<section class="hp-contact">
    <div class="site-bg">
        <img alt="background" src="<?php echo get_stylesheet_directory_uri() ?>/images/contact-us-bg.jpg" width="1508"
            height="635" />
    </div>
    <div class="region-contact-container">
        <div class="site-title">
            <strong class="site-title-secondary">GET IN TOUCH</strong>
            <strong class="site-title-primary">with us</strong>
        </div>
        <P>Get in touch with the Monroe Team</P>
        <div class="contact-form ">
            <?php echo do_shortcode('[contact-form-7 html_class="use-floating-validation-tip" id="34" title="hp template form 2"]')?>
        </div>
    </div>
</section>
<!-- contact end -->
<?php get_footer(); ?>