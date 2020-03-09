<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$extraMenu = $view['menu']->render('extra');
?>
<!-- start: sidebar-header -->
<div class="sidebar-header">
    <!-- brand -->
    <a class="mautic-brand<?php echo (!empty($extraMenu)) ? ' pull-left pl-0 pr-0' : ''; ?>" href="#">
        <!-- logo figure -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 60"><defs><style>.cls-1,.cls-4{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#1a202c;}.cls-4{stroke:#b388ff;stroke-miterlimit:10;stroke-width:2.19px;}.cls-5{fill:#fff;}</style><clipPath id="clip-path"><rect class="cls-1" x="-0.03" y="13.94" width="32.07" height="32.06"/></clipPath></defs><title>purple-star-boxed</title><g id="Layer_1" data-name="Layer 1"><g id="Artwork_16" data-name="Artwork 16"><g class="cls-2"><g class="cls-2"><path class="cls-3" d="M8,44.91H24c5.51-.13,7-3.2,6.92-6.92V20.85A5.82,5.82,0,0,0,25.11,15H8A6.92,6.92,0,0,0,1.06,22V38A6.93,6.93,0,0,0,8,44.91"/><path class="cls-4" d="M8,44.91H24c5.51-.13,7-3.2,6.92-6.92V20.85A5.82,5.82,0,0,0,25.11,15H8A6.92,6.92,0,0,0,1.06,22V38A6.93,6.93,0,0,0,8,44.91Z"/><path class="cls-5" d="M30.89,25.51,26.44,25l-2.09-4-1.89,4.07-4.4.75L20.4,28a20.53,20.53,0,0,1-4.67.84c-.17-.94-.3-1.89-.39-2.84-.77-7.53,1-5.9-3.5-6.08-4.71-.07-3.48-1.24-3.24,3.62a40.46,40.46,0,0,0,.63,5.15c-.09.24-.18.5-.28.75A2.13,2.13,0,0,1,6.4,27.93s.17-.18-2.42,1C1.17,30.15,1.07,30,1.07,30s0,.21.1.35c.64,1.19,3.9,1.4,7,1.22a2.6,2.6,0,0,1-.28.61C7.35,33.24,2.64,37.24,2,37.47a13.34,13.34,0,0,0,9.27-3.82c1.28,1.76,3.09,3.18,5.62,5.67,1.32,1.67,2.85.43,6.06-.11,2.25-.32.21-1.19-.76-2.17-4-3.5-5.45-4.87-6.16-7.06,1.36-.19,3.09-.46,5.29-.84l-.61,4.19,4.39-2,4,2-1.35-4.56Zm-6.32,4.55-2.29,1.12.35-2.25,2.47-.44L22,28.13l-1.53-1.69,2.81-.28,1.12-2.6L25.6,26l2.76.2-1.86,2,.77,2.92Z"/></g></g></g></g></svg>
        <!--/ logo figure -->
        <!-- logo text -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 168 60"><defs><style>.cls-1,.cls-8{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#b388ff;}.cls-4{clip-path:url(#clip-path-2);}.cls-5,.cls-6{fill:#fff;}.cls-6{font-size:24px;font-family:MangoUXDisplay-Medium, Mango UX Display;font-weight:500;}.cls-7{clip-path:url(#clip-path-3);}.cls-8{stroke:#b388ff;stroke-miterlimit:10;stroke-width:2.19px;}</style><clipPath id="clip-path"><rect class="cls-1" x="6.62" y="16" width="111" height="27.78"/></clipPath><clipPath id="clip-path-2"><rect class="cls-1" x="6.62" y="16" width="111" height="27.78"/></clipPath><clipPath id="clip-path-3"><rect class="cls-1" x="-32.03" y="13.94" width="32.07" height="32.06"/></clipPath></defs><title>purple-ww-boxed</title><g id="Layer_3" data-name="Layer 3"><g id="Artwork_9" data-name="Artwork 9"><g class="cls-2"><polygon class="cls-3" points="85.79 37.81 83.72 26.45 81.6 37.81 77.55 37.81 74.53 23.34 77.83 23.34 79.74 35.24 82.12 23.34 85.5 23.34 87.67 35.24 89.71 23.34 92.89 23.34 89.92 37.81 85.79 37.81"/><g class="cls-4"><path class="cls-3" d="M104.94,35.84l-.69,2.33a3.15,3.15,0,0,1-3-2.11,4.59,4.59,0,0,1-4.08,2.16,4.17,4.17,0,0,1-4.42-4.46c0-3.15,2.25-4.84,6.22-4.84h1.71V28.1c0-1.89-.8-2.52-2.56-2.52a11.61,11.61,0,0,0-3.61.76L93.71,24a13.5,13.5,0,0,1,5-1c3.64,0,5.24,1.78,5.24,5V34c0,1.18.36,1.59,1,1.86m-4.28-1.94V31H99.29c-2.14,0-3.2.82-3.2,2.52,0,1.39.67,2.19,1.93,2.19a2.91,2.91,0,0,0,2.64-1.78"/><path class="cls-3" d="M106.87,43.78l-1.13-2.55c2.71-.44,3.59-1.37,4.37-3.42H109l-4.34-14.48h3.51l3,12.16,3.1-12.16h3.41l-4.44,14.54c-1,3.39-2.25,5.58-6.31,5.91"/><polygon class="cls-3" points="17.88 37.81 15.81 26.45 13.7 37.81 9.64 37.81 6.62 23.34 9.93 23.34 11.84 35.24 14.21 23.34 17.59 23.34 19.76 35.24 21.8 23.34 24.98 23.34 22.01 37.81 17.88 37.81"/><path class="cls-5" d="M34,23.14l-.56,3.4a4.39,4.39,0,0,0-1.22-.17c-1.65,0-2.5,1.29-3,3.72v7.72h-3.3V23.33h2.86l.31,2.85C29.73,24.1,31,23,32.65,23a4.61,4.61,0,0,1,1.36.19"/><path class="cls-5" d="M38.46,18.13A2.08,2.08,0,1,1,36.36,16a2,2,0,0,1,2.1,2.13m-3.72,5.2H38V37.81h-3.3Z"/><path class="cls-5" d="M48.6,24.59a3.82,3.82,0,0,1,2.48,3.73c0,2.81-2.06,4.87-5.5,4.87A5.4,5.4,0,0,1,44,33,1.33,1.33,0,0,0,43.39,34c0,.52.28,1,1.65,1h2.09c3,0,5,1.72,5,4.1,0,2.9-2.35,4.63-6.81,4.63-4.86,0-6.23-1.64-6.23-4.54h3c0,1.45.6,2.08,3.31,2.08s3.43-.77,3.43-1.92-.8-1.72-2.32-1.72H44.39c-2.73,0-3.9-1.29-3.9-2.8A3.3,3.3,0,0,1,42.1,32.2a4.26,4.26,0,0,1-2.41-4.08c0-3.14,2.35-5.2,5.66-5.2a10.56,10.56,0,0,0,6.38-1.61l.82,2.79a11.67,11.67,0,0,1-3.95.49M43,28.07c0,1.75.91,2.85,2.43,2.85s2.43-1,2.43-2.88-.83-2.73-2.48-2.73S43,26.4,43,28.07"/><path class="cls-5" d="M64.35,27.33V37.81h-3.3V27.88c0-1.81-.68-2.33-1.68-2.33-1.16,0-2.07.85-2.87,2.16v10.1H53.2V17.56l3.3-.36v7.86a4.86,4.86,0,0,1,4-2.14c2.43,0,3.87,1.67,3.87,4.41"/><path class="cls-5" d="M71.24,38.22c-2.68,0-4.1-1.64-4.1-4.73V25.85H65V23.33h2.14v-3.2l3.3-.41v3.61h3.18l-.34,2.52H70.44v7.56c0,1.42.44,2,1.45,2a3,3,0,0,0,1.63-.54l1.16,2.27a5.73,5.73,0,0,1-3.44,1.09"/></g></g></g><text class="cls-6" transform="translate(119.95 38.81)">drip</text></g><g id="Layer_1" data-name="Layer 1"><g id="Artwork_16" data-name="Artwork 16"><g class="cls-7"><g class="cls-7"><path class="cls-8" d="M-24,44.91H-8c5.51-.13,7-3.2,6.92-6.92V20.85A5.82,5.82,0,0,0-6.89,15H-24A6.92,6.92,0,0,0-30.94,22V38A6.93,6.93,0,0,0-24,44.91Z"/></g></g></g></g></svg>
        <!--/ logo text -->
    </a>
    <?php if (!empty($extraMenu)): ?>
        <div class="dropdown extra-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
            <?php echo $extraMenu; ?>
        </div>
    <?php endif; ?>
    <!--/ brand -->
</div>
<!--/ end: sidebar-header -->

<!-- start: sidebar-content -->
<div class="sidebar-content">
    <!-- scroll-content -->
    <div class="scroll-content slimscroll">
        <!-- start: navigation -->
        <nav class="nav-sidebar">
            <?php echo $view['content']->getCustomContent('menu.above', $mauticTemplateVars); ?>
            <?php echo $view['menu']->render('main'); ?>

            <!-- start: left nav -->
            <ul class="nav sidebar-left-dark">
                <li class="hidden-xs">
                    <a href="javascript:void(0)" data-toggle="minimize" class="sidebar-minimizer"><span class="direction icon pull-left fa"></span><span class="nav-item-name pull-left text"><?php echo $view['translator']->trans('mautic.core.menu.left.collapse'); ?></span></a>
                </li>
            </ul>
            <!--/ end: left nav -->

        </nav>
        <!--/ end: navigation -->
    </div>
    <!--/ scroll-content -->
</div>
<!--/ end: sidebar-content -->