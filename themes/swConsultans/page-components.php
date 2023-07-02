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

<header>
        <div class="container mx-auto">
          <div class="flex flex-wrap px-4 h-14 lg:h-24 items-center ">
            <div class="logo w-11/12 md:w-4/12">
              <svg width="152" height="30" viewBox="0 0 152 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_126_153)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1668 8.76398C17.9334 7.93988 16.4834 7.5 15 7.5V0C17.9667 0 20.8668 0.879735 23.3335 2.52796C25.8003 4.17617 27.7229 6.51886 28.8582 9.25973C29.9935 12.0006 30.2906 15.0167 29.7118 17.9263C29.133 20.8361 27.7044 23.5088 25.6066 25.6066C23.5088 27.7044 20.8361 29.133 17.9263 29.7118C15.0167 30.2906 12.0006 29.9935 9.25973 28.8582C6.51885 27.7229 4.17617 25.8003 2.52796 23.3335C0.879735 20.8668 0 17.9667 0 15H7.5C7.5 16.4834 7.93988 17.9334 8.76398 19.1668C9.58807 20.4002 10.7594 21.3614 12.1299 21.9291C13.5003 22.4968 15.0083 22.6453 16.4632 22.3559C17.918 22.0665 19.2544 21.3522 20.3033 20.3033C21.3522 19.2544 22.0665 17.918 22.3559 16.4632C22.6453 15.0083 22.4968 13.5003 21.9291 12.1299C21.3614 10.7594 20.4002 9.58807 19.1668 8.76398Z" fill="#CD049A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3.9637e-06C7.5 0.984918 7.30601 1.96019 6.9291 2.87013C6.55218 3.78007 5.99974 4.60686 5.3033 5.30331C4.60686 5.99975 3.78007 6.55219 2.87013 6.9291C1.96018 7.30601 0.984911 7.5 3.27832e-07 7.5L0 15C1.96983 15 3.92037 14.612 5.74026 13.8582C7.56015 13.1044 9.21375 11.9995 10.6066 10.6066C11.9995 9.21375 13.1044 7.56015 13.8582 5.74026C14.612 3.92037 15 1.96983 15 0L7.5 3.9637e-06Z" fill="#CD049A"/>
                <path d="M94.2143 10.8394H90.5753V22.3986H94.2143V10.8394Z" fill="#CD049A"/>
                <path d="M90.9802 8.67495C91.3605 9.0555 91.836 9.24577 92.4067 9.24577C92.9775 9.24577 93.4455 9.0555 93.81 8.67495C94.1752 8.27857 94.3575 7.80285 94.3575 7.24789C94.3575 6.67708 94.1752 6.20137 93.81 5.82083C93.4455 5.44027 92.9775 5.25 92.4067 5.25C91.836 5.25 91.3605 5.44027 90.9802 5.82083C90.615 6.20137 90.4327 6.67708 90.4327 7.24789C90.4327 7.80285 90.615 8.27857 90.9802 8.67495Z" fill="#CD049A"/>
                <path d="M38.3671 22.3986V5.60675H42.1013V19.1164H49.5459V22.3986H38.3671Z" fill="#CD049A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M56.2705 22.6602C55.0813 22.6602 54.0031 22.3986 53.0359 21.8753C52.0845 21.3362 51.3313 20.6068 50.7763 19.6871C50.2214 18.7675 49.9439 17.7368 49.9439 16.5952C49.9439 15.4535 50.2214 14.4308 50.7763 13.527C51.3313 12.6232 52.0845 11.9096 53.0359 11.3864C53.9872 10.8472 55.0655 10.5777 56.2705 10.5777C57.4756 10.5777 58.5538 10.8394 59.5052 11.3626C60.4566 11.8858 61.2098 12.6073 61.7647 13.527C62.3197 14.4308 62.5972 15.4535 62.5972 16.5952C62.5972 17.7368 62.3197 18.7675 61.7647 19.6871C61.2098 20.6068 60.4566 21.3362 59.5052 21.8753C58.5538 22.3986 57.4756 22.6602 56.2705 22.6602ZM56.2705 19.3542C56.7938 19.3542 57.2536 19.2432 57.6501 19.0212C58.0465 18.7834 58.3477 18.4583 58.5538 18.046C58.7758 17.6179 58.8868 17.1343 58.8868 16.5952C58.8868 16.0561 58.7758 15.5883 58.5538 15.1919C58.3318 14.7796 58.0227 14.4625 57.6262 14.2405C57.2457 14.0026 56.7938 13.8838 56.2705 13.8838C55.7632 13.8838 55.3113 14.0026 54.9148 14.2405C54.5185 14.4625 54.2092 14.7796 53.9872 15.1919C53.7652 15.6042 53.6543 16.0798 53.6543 16.6189C53.6543 17.1422 53.7652 17.6179 53.9872 18.046C54.2092 18.4583 54.5185 18.7834 54.9148 19.0212C55.3113 19.2432 55.7632 19.3542 56.2705 19.3542Z" fill="#CD049A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M65.4793 26.9176C66.4465 27.3616 67.5643 27.5836 68.8329 27.5836C70.0696 27.5836 71.1717 27.3378 72.1389 26.8462C73.1062 26.3547 73.8672 25.6729 74.4222 24.8008C74.9771 23.9287 75.255 22.8981 75.255 21.7088V10.8394H71.6869V11.616C71.4216 11.3926 71.1202 11.2051 70.7832 11.0534C70.1647 10.7521 69.4591 10.6015 68.6664 10.6015C67.604 10.6015 66.6605 10.8552 65.836 11.3626C65.0114 11.8541 64.3614 12.5359 63.8857 13.408C63.4099 14.2643 63.1722 15.2315 63.1722 16.3098C63.1722 17.3722 63.4099 18.3394 63.8857 19.2115C64.3614 20.0836 65.0114 20.7733 65.836 21.2807C66.6605 21.7881 67.604 22.0418 68.6664 22.0418C69.4433 22.0418 70.1489 21.8912 70.7832 21.5899C71.0904 21.444 71.3679 21.272 71.6156 21.0739V21.804C71.6156 22.6126 71.354 23.239 70.8307 23.683C70.3234 24.127 69.6178 24.3489 68.7139 24.3489C67.9846 24.3489 67.3582 24.2221 66.835 23.9683C66.3276 23.7147 65.8677 23.342 65.4554 22.8505L63.2197 25.0862C63.7747 25.879 64.5279 26.4895 65.4793 26.9176ZM70.6642 18.4741C70.2995 18.6961 69.8635 18.8071 69.3561 18.8071C68.8487 18.8071 68.4047 18.6961 68.0242 18.4741C67.6594 18.2521 67.3741 17.9509 67.168 17.5703C66.9618 17.1739 66.8587 16.7537 66.8587 16.3098C66.8587 15.8341 66.9618 15.406 67.168 15.0254C67.3741 14.6449 67.6674 14.3436 68.0479 14.1216C68.4285 13.8996 68.8645 13.7886 69.3561 13.7886C69.8635 13.7886 70.2995 13.8996 70.6642 14.1216C71.0448 14.3436 71.3302 14.6449 71.5205 15.0254C71.7266 15.406 71.8297 15.8341 71.8297 16.3098C71.8297 16.7854 71.7266 17.2135 71.5205 17.5941C71.3302 17.9588 71.0448 18.2521 70.6642 18.4741Z" fill="#CD049A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M82.9132 22.6602C81.7237 22.6602 80.6452 22.3986 79.6785 21.8753C78.7267 21.3362 77.9737 20.6068 77.4187 19.6871C76.8637 18.7675 76.5862 17.7368 76.5862 16.5952C76.5862 15.4535 76.8637 14.4308 77.4187 13.527C77.9737 12.6232 78.7267 11.9096 79.6785 11.3864C80.6295 10.8472 81.708 10.5777 82.9132 10.5777C84.1177 10.5777 85.1962 10.8394 86.1472 11.3626C87.099 11.8858 87.852 12.6073 88.407 13.527C88.962 14.4308 89.2395 15.4535 89.2395 16.5952C89.2395 17.7368 88.962 18.7675 88.407 19.6871C87.852 20.6068 87.099 21.3362 86.1472 21.8753C85.1962 22.3986 84.1177 22.6602 82.9132 22.6602ZM82.9132 19.3542C83.436 19.3542 83.8957 19.2432 84.2925 19.0212C84.6885 18.7834 84.99 18.4583 85.1962 18.046C85.4182 17.6179 85.5292 17.1343 85.5292 16.5952C85.5292 16.0561 85.4182 15.5883 85.1962 15.1919C84.9742 14.7796 84.6652 14.4625 84.2685 14.2405C83.8882 14.0026 83.436 13.8838 82.9132 13.8838C82.4055 13.8838 81.9532 14.0026 81.5572 14.2405C81.1605 14.4625 80.8515 14.7796 80.6295 15.1919C80.4075 15.6042 80.2965 16.0798 80.2965 16.6189C80.2965 17.1422 80.4075 17.6179 80.6295 18.046C80.8515 18.4583 81.1605 18.7834 81.5572 19.0212C81.9532 19.2432 82.4055 19.3542 82.9132 19.3542Z" fill="#CD049A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M102.961 22.6364C102.185 22.6364 101.471 22.4858 100.82 22.1845C100.478 22.026 100.169 21.8367 99.8933 21.6166V27.2744H96.3015V10.8394H99.9405V11.6371C100.205 11.4212 100.498 11.2345 100.82 11.0772C101.471 10.76 102.185 10.6015 102.961 10.6015C104.055 10.6015 105.023 10.8631 105.863 11.3864C106.719 11.9096 107.385 12.6232 107.861 13.527C108.353 14.4308 108.598 15.4615 108.598 16.6189C108.598 17.7765 108.353 18.8071 107.861 19.711C107.385 20.6148 106.719 21.3283 105.863 21.8515C105.023 22.3748 104.055 22.6364 102.961 22.6364ZM102.296 19.3542C102.818 19.3542 103.271 19.2352 103.651 18.9974C104.048 18.7596 104.357 18.4345 104.579 18.0223C104.801 17.61 104.912 17.1422 104.912 16.6189C104.912 16.0798 104.801 15.6042 104.579 15.1919C104.357 14.7796 104.048 14.4625 103.651 14.2405C103.271 14.0026 102.827 13.8838 102.319 13.8838C101.812 13.8838 101.36 14.0026 100.964 14.2405C100.583 14.4625 100.282 14.7796 100.06 15.1919C99.8378 15.6042 99.7268 16.0798 99.7268 16.6189C99.7268 17.1422 99.8295 17.61 100.036 18.0223C100.258 18.4345 100.567 18.7596 100.964 18.9974C101.36 19.2352 101.804 19.3542 102.296 19.3542Z" fill="#CD049A"/>
                <path d="M112.16 22.4224C112.826 22.5968 113.499 22.684 114.181 22.684C115.624 22.684 116.765 22.3511 117.606 21.6851C118.462 21.0191 118.89 20.1233 118.89 18.9974C118.89 18.2681 118.756 17.6813 118.486 17.2374C118.217 16.7776 117.868 16.4129 117.44 16.1433C117.011 15.8738 116.559 15.6596 116.084 15.5011C115.608 15.3425 115.156 15.2078 114.728 15.0968C114.3 14.9858 113.951 14.8589 113.681 14.7162C113.412 14.5735 113.277 14.3832 113.277 14.1454C113.277 13.9234 113.381 13.7569 113.586 13.6459C113.792 13.5191 114.101 13.4557 114.514 13.4557C114.942 13.4557 115.378 13.5428 115.822 13.7173C116.282 13.8917 116.694 14.193 117.059 14.6211L119.128 12.5281C118.605 11.8621 117.923 11.3626 117.083 11.0297C116.258 10.6808 115.355 10.5064 114.371 10.5064C113.436 10.5064 112.619 10.6649 111.922 10.982C111.224 11.2992 110.684 11.7353 110.304 12.2902C109.924 12.8293 109.733 13.4715 109.733 14.2168C109.733 14.9144 109.868 15.4932 110.138 15.953C110.407 16.397 110.756 16.7459 111.184 16.9995C111.612 17.2532 112.064 17.4515 112.54 17.5941C113.015 17.7368 113.467 17.8716 113.896 17.9985C114.323 18.1095 114.673 18.2443 114.942 18.4028C115.228 18.5456 115.37 18.7596 115.37 19.045C115.37 19.267 115.251 19.4414 115.013 19.5683C114.791 19.6951 114.466 19.7585 114.038 19.7585C113.419 19.7585 112.849 19.6475 112.326 19.4255C111.803 19.1877 111.35 18.8627 110.97 18.4504L108.901 20.5434C109.298 20.9715 109.773 21.3521 110.328 21.6851C110.899 22.0022 111.509 22.2479 112.16 22.4224Z" fill="#CD049A"/>
                <path d="M125.526 22.6602C124.464 22.6602 123.521 22.4462 122.696 22.0181C121.887 21.5741 121.253 20.9715 120.794 20.2104C120.333 19.4335 120.104 18.5456 120.104 17.5466V10.8394H123.743V17.499C123.743 17.8954 123.806 18.2363 123.933 18.5217C124.076 18.8072 124.282 19.0292 124.551 19.1877C124.821 19.3463 125.146 19.4255 125.526 19.4255C126.065 19.4255 126.494 19.259 126.811 18.926C127.128 18.5772 127.286 18.1016 127.286 17.499V10.8394H130.925V17.5228C130.925 18.5376 130.696 19.4335 130.235 20.2104C129.776 20.9715 129.142 21.5741 128.333 22.0181C127.524 22.4462 126.589 22.6602 125.526 22.6602Z" fill="#CD049A"/>
                <path d="M136.373 10.8394H132.734V22.3986H136.373V15.6438C136.373 15.2474 136.453 14.9144 136.611 14.6449C136.786 14.3753 137.016 14.1691 137.301 14.0265C137.587 13.8679 137.911 13.7886 138.276 13.7886C138.799 13.7886 139.235 13.9551 139.584 14.2881C139.949 14.6052 140.131 15.0571 140.131 15.6438V22.3986H143.771V15.6438C143.771 15.2474 143.85 14.9144 144.008 14.6449C144.183 14.3753 144.412 14.1691 144.698 14.0265C144.983 13.8679 145.309 13.7886 145.673 13.7886C146.197 13.7886 146.633 13.9551 146.981 14.2881C147.346 14.6052 147.528 15.0571 147.528 15.6438V22.3986H151.168V15.2395C151.168 14.2723 150.961 13.4477 150.549 12.7659C150.152 12.0682 149.606 11.537 148.908 11.1724C148.226 10.7917 147.441 10.6015 146.553 10.6015C145.649 10.6015 144.833 10.7997 144.104 11.1961C143.63 11.4487 143.216 11.7746 142.861 12.1739C142.53 11.7562 142.128 11.4145 141.653 11.1485C141.02 10.7839 140.298 10.6015 139.489 10.6015C138.633 10.6015 137.864 10.7839 137.183 11.1485C136.886 11.3002 136.616 11.482 136.373 11.6937V10.8394Z" fill="#CD049A"/>
                </g>
                <defs>
                <clipPath id="clip0_126_153">
                <rect width="151.5" height="30" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </div>
            <div class="nav w-1/12 md:w-8/12">
              <div class="hamburger flex justify-end md:hidden">
                <a href="#">
                  <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.66668C0 0.930297 0.596954 0.333344 1.33333 0.333344H22.6667C23.403 0.333344 24 0.930297 24 1.66668C24 2.40306 23.403 3.00001 22.6667 3.00001H1.33333C0.596954 3.00001 0 2.40306 0 1.66668ZM8 11C8 10.2636 8.59695 9.66668 9.33333 9.66668H22.6667C23.403 9.66668 24 10.2636 24 11C24 11.7364 23.403 12.3333 22.6667 12.3333H9.33333C8.59695 12.3333 8 11.7364 8 11ZM0 20.3333C0 19.597 0.596953 19 1.33333 19H22.6667C23.403 19 24 19.597 24 20.3333C24 21.0697 23.403 21.6667 22.6667 21.6667H1.33333C0.596953 21.6667 0 21.0697 0 20.3333Z" fill="#CD049A"/>
                    </svg>                    
                </a>
              </div>
              <div class="navigation-bar hidden md:flex md:gap-5 md:justify-end md:items-center">
                <a href="#" class="lg:text-bodyBold md:text-button text-grey-600">Home</a>
                <a href="#" class="lg:text-bodyBold md:text-button text-grey-600 flex items-center gap-1">Services 
                <figure>
                  <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.99251 9.12088C7.89424 9.12208 7.79681 9.1027 7.70649 9.06399C7.61616 9.02527 7.53493 8.96809 7.46803 8.8961L0.724775 2.15285C0.425075 1.85315 0.425075 1.38861 0.724775 1.08891C1.02448 0.789211 1.48901 0.789211 1.78871 1.08891L8.00749 7.30769L14.2113 1.1039C14.511 0.804196 14.9755 0.804196 15.2752 1.1039C15.5749 1.4036 15.5749 1.86813 15.2752 2.16783L8.53197 8.91109C8.38212 9.06094 8.18731 9.13586 8.00749 9.13586L7.99251 9.12088Z" fill="#3C84AB"/>
                  </svg>
                </figure></a>
                <a href="#" class="lg:text-bodyBold md:text-button text-grey-600" >Qualification</a>
                <a href="#" class="lg:text-bodyBold md:text-button text-grey-600" >Tax Depreciation</a>
                <a href="#" class="lg:text-bodyBold md:text-button text-grey-600" >Contact</a>
              </div>
            </div>
          </div>
        </div>
      </header>



<?php
get_footer();
