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

<div class="container mx-auto py-12">
    <div class="flex flex-wrap px-4">
        <div class="description w-full lg:w-4/12">
            <div class="number">
                <h3 class="text-primary text-display1 font-nunito font-bold mb-0 leading-none">01</h3>
            </div>
            <div class="subtitle">
                <h4 class="text-title6 text-grey-700 mt-7 font-extrabold">
                    Feasibility Studies
                </h4>
            </div>
            <div class="paragraph">
                <p class="text-body text-grey-700 mt-8">
                    We provide comprehensive assessments conducted at the early stages of a construction project to determine its viability and potenti...
                </p>
            </div>
            <div class="link-acces">
                <a href="#" class="text-primary text-button block mt-6">Learn More</a>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
