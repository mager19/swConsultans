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

<div class="container mx-auto">
        <div class="flex flex-wrap px-4">
            <div class="content-information md:flex md:items-center">
                <div class="info">
                  <div class="title">
                    <h3 class="text-title4 md:text-title2 text-grey-700">
                        Feasibility Studies
                    </h3>
                </div>
                <div class="paragraph md:w-6/12 mt-5 md:mt-4">
                    <p class="text-body text-black">
                        We provide comprehensive assessments conducted at the early stages of a construction project to determine its viability and potential for success.
                    </p>
                </div>
                </div>
                <div class="link md:w-3/12 mt-9 md:mt-3">
                    <a href="#" class="bg-primary text-white text-button px-9 py-3 rounded-3xl hover:bg-grey-600 visited:text-white">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="images-content md:flex md:items-center mt-9">
              <div class="image-big md:mt-1">
                <img class="w-[348px] h-[155px] md:w-[610px] md:h-[500px]" src="/img/mall.png" alt="image">
              </div>
              <div class="images-small flex justify-between md:flex-col md:px-7 mt-3 md:mt-1">
                <div class="img md:py-4">
                  <img class="w-[165px] h-[134px] md:w-[287px] md:h-[235px]" src="/img/mall2.png" alt="image">
                </div>
                <div class="img md:py-4">
                  <img class="w-[161px] h-[134px] md:w-[287px] md:h-[235px]" src="/img/mall3.png" alt="image">
                </div>
              </div>
            </div>
        </div>
    </div>



<?php
get_footer();
