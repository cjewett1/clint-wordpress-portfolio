<?php
/***
* The template for displaying the custom home page.
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>

<div class="banner-background">
        <div id="bg"></div>
        <div class="banner-section">
            <div class="banner-overlay">
                    <?php
                    the_field ('banner_title');
                    ?>
                </div>

                <div class="banner-image">
                <?php if( get_field('banner_image') ): ?>
                    <img src="<?php the_field('banner_image'); ?>" />
                <?php endif; ?>
                </div>
        </div>
</div>

        <section class="skills-section">
            <h2>My Skill Set</h2>
            <div class="skills-items">
                <div class="skill">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75" height="75"
                    viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
                    <style type="text/css">.st0{fill:#212025;}</style>
                    <path class="st0" d="M0,400c0-0.2,0-0.4,0-0.6c0-58.8,12.8-114.6,35.9-164.7l-1,2.5l190.9,522.7C157.6,726.6,102,676.7,62.9,615.3
                    l-1-1.6C23.1,554.2,0,481.5,0,403.3c0-1.1,0-2.3,0-3.4L0,400L0,400z M670,379.7c0,7.1-0.5,14-1.4,20.8l0.1-0.8
                    c-1.5,10.2-3.4,18.9-5.7,27.4l0.4-1.6c-2.6,10.4-4.6,18-6,22.9s-4.4,15.1-9,30.7c-4.7,15.6-7.7,25.7-9.1,30.2l-39.5,133.1
                    L455.1,212.7c16-1,31.3-2.4,45.8-4.2c6.1-0.3,11.3-4.1,13.5-9.5l0-0.1c1-2,1.5-4.4,1.5-6.9c0-3.4-1.1-6.6-2.9-9.2l0,0.1
                    c-2.8-4.3-7.6-7.1-13-7.1c-0.6,0-1.3,0-1.9,0.1h0.1l-106.7,5.3c-26-0.4-61-2.1-105.1-5.3c-0.5-0.1-1.2-0.1-1.8-0.1
                    c-3.3,0-6.4,1-8.9,2.8l0.1,0c-2.8,1.9-4.8,4.6-5.9,7.7l0,0.1c-0.7,1.9-1,4.1-1,6.4c0,1.1,0.1,2.3,0.3,3.4V196
                    c0.6,3.4,2.3,6.4,4.7,8.6c2.7,2.4,6.2,4,10.1,4.2h0l41.6,4.2L388,383.5l-87.4,262.2L155,212.7c16-1,31.3-2.4,45.8-4.2
                    c6.1-0.3,11.3-4.1,13.5-9.5l0-0.1c1-2,1.5-4.4,1.5-6.9c0-3.4-1.1-6.6-2.9-9.2l0,0.1c-2.8-4.3-7.6-7.1-13-7.1c-0.6,0-1.3,0-1.9,0.1
                    h0.1l-106.7,5.3c-2.4,0-6.4-0.1-12-0.3c-5.5-0.2-10-0.3-13.5-0.3c36.3-55.1,84.3-99.6,140.7-130.8l2-1C264,18.2,329.8,0.1,399.9,0.1
                    c52.5,0,102.7,10.1,148.6,28.5l-2.7-1c47.9,19.2,89,45.3,124.3,77.8l-0.3-0.3h-5.3c-0.4,0-0.8,0-1.2,0c-18.6,0-35.2,8.1-46.6,21
                    l-0.1,0.1c-11.8,12.7-19,29.7-19,48.5v1v-0.1c0,4.4,0.4,8.7,1.1,12.9l-0.1-0.5c0.7,4.2,1.4,7.9,2.1,11.2c1.1,4.6,2.5,8.6,4.3,12.3
                    l-0.2-0.4c2.1,4.7,3.7,8.3,4.7,10.9c2,4.6,4.1,8.4,6.5,12.1l-0.2-0.4c3.1,5.2,5.3,8.8,6.5,10.9c1.2,2.1,3.7,6.2,7.5,12.5l7.3,12
                    c19.8,31.3,31.9,69.3,32.7,110v0.2L670,379.7z M406.8,434.9L530,771.4c0.4,2.2,1.3,4.2,2.7,5.8v0c-39.5,14.4-85.1,22.8-132.6,22.9h0
                    c-0.3,0-0.6,0-0.9,0c-39.9,0-78.5-6.1-114.7-17.4l2.7,0.7L406.8,434.9z M750.6,208.2c31.1,55.1,49.4,121,49.4,191.2v0.8v0v2.9
                    c0,72.9-20.1,141.1-55.1,199.4l1-1.8c-35.6,60.4-84.6,109.4-143.2,143.8l-1.9,1L723,392.7c17-42.3,28-91.3,30.6-142.5l0-1.1
                    c0-0.3,0-0.8,0-1.2c0-14.1-1.1-27.9-3.3-41.4l0.2,1.5L750.6,208.2z"/>
                </svg>
                <p>
               While I am still learning, I believe that I have developed strong skills in WordPress development. I have built numerous websites using this incredibly powerful content management system, and each project has taught me valuable lessons. With continued practice and dedication, I am confident that I can thrive as a WordPress Developer. The possibilities for innovation and creativity with this platform are endless, and I am excited to continue building my skills and contributing to its incredibly helpful community. I do plan on tackling a headless CMS project to further develop my skills.
                </p>
                </div>
                <div class="skill">
                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 594.92 594.92"><path d="M297.46,0C133.18,0,0,133.18,0,297.46s133.18,297.46,297.46,297.46,297.46-133.18,297.46-297.46S461.74,0,297.46,0Zm-96.66,336.12l-10,12.63-83.12-64.71,83.38-64.44,9.73,12.36-68.65,51.82,68.65,52.34Zm38.4,93.38h-19.46l110.74-237.78h19.73l-111,237.78Zm164.66-80.75l-9.73-12.36,68.65-51.82-68.65-52.34,10-12.63,83.12,64.71-83.38,64.44Z" style="fill:#212025;"/></svg>
                <p>
                    Throughout the Web Development and Design program at NAIT, I have done a number of coding projects and have really started to hone my skills as a developer. Though I have a long way to go, I am excited for where the future may take me in this industry. I am always eager to learn more. While I am fairly new to libraries like React and Next.js I have taken it upon myself to create many websites and apps with various languages and frameworks in order to learn, practice and ultimately challenge myself to become the best developer that I can be. These projects are highlighted on my <a href="https://github.com/cjewett1" target="_blank">GitHub</a> profile and on the projects page of this site.
                </p>
                </div>
                <div class="skill">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75" height="75"
                    viewBox="0 0 800 592" style="enable-background:new 0 0 800 592;" xml:space="preserve">
                    <path d="M492.7,1.1C485,1.8,477,2.4,469.3,3.4c-32.9,3.7-64.8,13.1-94.4,27.8c-30.5,14.9-58.2,35-82,59.2c-1,1.3-3,2-4.7,1.7
                    c-16.5-2.5-33.2-3.2-49.9-2.3c-34,1.7-67.3,10.3-97.7,25.4C81.7,144.7,40.2,190.6,16.1,252.2C7.3,275,2.1,299,0.7,323.5
                    c0,1.7-0.3,3-0.7,4.3v25.8c0.7,6.7,1.7,13.1,2.3,19.8c3.3,27.1,11.1,53.2,23.4,77.7c27.5,54.9,69.6,95,126.2,119.8
                    c25.8,11.4,53.5,18.1,81.7,19.8c1.1,0,2,0.1,2.9,0.3h285.9c6.1-0.6,12.1-1.2,18.2-2c32.6-3.7,64.4-13.1,93.7-27.8
                    c50.1-24.5,92.3-62.7,121.5-110.1c20-31.3,33.5-66.4,39.5-103.1c1.7-11.3,2.7-23.1,4-34.5c0-1.7,0.3-3,0.7-4.3v-26.5
                    c-0.7-7.7-1.7-15.1-1.7-22.1c-3.7-32.6-13.1-64.4-27.8-93.7c-24.8-50.1-63.2-92.2-110.8-121.5c-31.2-19.8-66-33.1-102.4-39.2
                    c-12.1-2-23.8-3-35.8-4.3c-1.7,0-3-0.3-4.7-0.7L492.7,1.1z M505,57.5c70.9,0.2,131,27.5,179.8,81.8c27.6,31.4,46.3,69.6,53.9,110.8
                    c5,25.5,6,51.6,2.3,77.3c-6.3,44.9-23.4,85-52.5,120.2c-33.9,41.6-80.8,70.4-133.2,81.7c-28,6.1-56.9,7.3-85.3,3.3
                    c-36.5-4.7-70-16.7-100.1-38.5c-8-5.7-15.5-12.1-22.4-19.1c-40.9-40.2-81.3-80.7-122.2-120.8c-10-10-10.7-21.1-6-31.1
                    c5-11,16.8-17.4,28.8-15.7c7,0.7,12.4,4.7,17.4,9.7c36.8,37.1,73.3,73.6,110.1,110.8c27.6,28.2,64,46.2,103.1,51.2
                    c64.9,8.7,120.2-11.4,164-59.9c23.8-26.4,38.2-58.2,44.2-93.7c8.7-52.9-3.7-100.4-36.5-142.3c-29.1-37.2-67.3-60.3-113.5-68.6
                    c-47.2-8.3-91.7,0.7-132.2,26.5c-1,0.7-3.3,1-4.4,0.3c-14.7-10.9-30.4-20.4-46.9-28.5c0,0-0.3-0.3-0.7-1
                    c12.9-10.7,26.9-19.9,41.8-27.4c27.2-14.8,57.2-23.7,88-26.1C490.1,57.8,497.5,57.5,505,57.5L505,57.5z M251.5,146.3
                    c48.5-0.8,93,17.5,132.7,54.3c28.5,26.7,54.6,54.5,82,82.3c7.7,7.7,9.4,17.4,5.7,27.8s-12.1,15.4-22.8,17.1
                    c-7.9,1.1-15.7-1.8-21.1-7.7c-26.1-26.1-52.2-51.9-78-78.3c-21.1-21.8-46.2-34.2-75.7-39.5c-65.3-11.7-131.2,26.1-154.6,88
                    C89.7,369,137.2,458,219.2,476.8c16.1,3.7,33.2,3.7,49.9,3.3c4.7-0.3,7.3,1.3,10.7,4.3c16.1,15.8,33.2,31.5,49.9,47.2
                    c1,1,2.3,2,3.3,3c-2,0-3.3,0.3-4.7,0.3h-76.7c-91.1,0-170-63.3-189.8-152.3c-21.8-98.1,34.5-197.5,130.9-226.6
                    C211.8,150.1,231.6,146.8,251.5,146.3L251.5,146.3z"/>
                </svg>
                <p>
                    I enjoy creating and experimenting with the fantastic tools available in programs such as PhotoShop, Illustrator, and Figma. The possibilities for creativity are limitless. While I do tend to favor the development side, I recognize the importance of possessing skills in both areas to facilitate effective communication and collaboration with designers. By having a deep understanding of design principles and techniques, as well as being able to develop sites, I am equipped to work with designers to create exceptional, user-friendly designs. This synergy ultimately leads to better products, greater satisfaction, and a more fulfilling career.
                </p>
                </div>
            </div>
        </section>

        <div class= "projects-headline" >
            <p>My 5 most</p>
            <h2>Recent Projects</h2>
        </div>

        <div class="project-background">
            <div class="project-flex-container">
                <?php
                    $args = array(
                        'post_type'      => 'clints-projects',
                        'posts_per_page' => 5,
                        'order' => 'DESC'
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'home-portfolio');
                    }?>
                <?php wp_reset_query() ?>
            </div>
        </div>

<?php get_footer();