<?php

/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package swConsultans
 */

get_header(); ?>

        <div class="flex flex-wrap px-4 md:justify-center">
          <div class="serivices-content">
            <div class="information-page md:text-center">
              <div class="title">
                <h3 class="text-title6 text-grey-700">
                  Services
                </h3>
              </div>
              <div class="paragraph mt-6 md:mt-2">
                <p class="text-title5 md:text-title4 text-grey-700 w-10/12 md:mx-auto md:w-144">
                  We invite you to explore our website to learn more about our <span class="text-primary">services</span>, <span class="text-primary">expertise</span>, and successful <span class="text-primary">projects</span>.
                </p>
              </div>
            </div>
            <div class="image-page md:grid md:grid-cols-3 md:gap-x-7 md:gap-y-8 mt-6 md:mt-15 mb-20">
              <div class="image">
                <img class="md:h-[330px] md:w-72" src="/img/img1.png" alt="image">
                <p class="text-title6 text-grey-700 mt-3 md:mt-4">
                  Quantity Surveying
                </p>
              </div>
              <div class="image mt-7 md:mt-0">
                <img class="md:h-[330px] md:w-72" src="/img/img2.png" alt="image">
                <p class="text-title6 text-grey-700 md:w-52 mt-3 md:mt-4">
                  Project Management Services
                </p>
              </div>
              <div class="image hidden md:block">
                <img class="md:h-[330px]" src="/img/img3.png" alt="image">
                <p class="text-title6 text-grey-700 md:mt-4">
                  Grant Application Writing
                </p>
              </div>
              <div class="image hidden md:block">
                <img class="md:h-[330px]" src="/img/img4.png" alt="image">
                <p class="text-title6 text-grey-700 md:mt-4">
                  Expert Witness
                </p>
              </div>
              <div class="image hidden md:block">
                <img class="md:h-[330px]" src="/img/img5.png" alt="image">
                <p class="text-title6 text-grey-700 md:mt-4">
                  Tax Depreciation
                </p>
              </div>
            </div>
          </div>
        </div>



<?php
get_footer();
