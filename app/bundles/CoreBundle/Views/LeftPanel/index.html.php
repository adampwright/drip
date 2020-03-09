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
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 207.33 36.44"><defs><style>.cls-1,.cls-4{fill:none;}.cls-2{fill:#1a202c;}.cls-3{clip-path:url(#clip-path);}.cls-4{stroke:#b388ff;stroke-miterlimit:10;stroke-width:1.68px;}.cls-5,.cls-8{fill:#fff;}.cls-6{clip-path:url(#clip-path-3);}.cls-7{fill:#b388ff;}.cls-8{font-size:18.4px;font-family:MangoUXDisplay-Regular, Mango UX Display;}</style><clipPath id="clip-path" transform="translate(6 6.56)"><rect class="cls-1" y="0.18" width="24.64" height="24.64"/></clipPath><clipPath id="clip-path-3" transform="translate(6 6.56)"><rect class="cls-1" x="27.43" y="0.86" width="93.05" height="23.29"/></clipPath></defs><title>wrightway-drip</title><g id="Layer_2" data-name="Layer 2"><rect class="cls-2" width="207.33" height="36.44"/></g><g id="Layer_1" data-name="Layer 1"><g id="Artwork_16" data-name="Artwork 16"><g class="cls-3"><g class="cls-3"><path class="cls-4" d="M6.14,24H18.48c4.23-.1,5.39-2.46,5.32-5.32V5.5A4.49,4.49,0,0,0,19.32,1H6.14A5.32,5.32,0,0,0,.84,6.34V18.66A5.32,5.32,0,0,0,6.14,24Z" transform="translate(6 6.56)"/><path class="cls-5" d="M23.76,9.08l-3.42-.4-1.6-3.06L17.28,8.75l-3.38.58L15.7,11a15.57,15.57,0,0,1-3.58.65,19.88,19.88,0,0,1-.3-2.19c-.6-5.78.78-4.53-2.7-4.67s-2.67-1-2.49,2.79a30.66,30.66,0,0,0,.49,3.95c-.07.19-.14.38-.22.58a1.64,1.64,0,0,1-2-1.18s.13-.13-1.86.75c-2.15,1-2.23.87-2.23.84s0,.17.07.27c.49.91,3,1.08,5.4.94a2,2,0,0,1-.22.47,24.11,24.11,0,0,1-4.55,4.07,10.29,10.29,0,0,0,7.13-2.94A42.91,42.91,0,0,0,13,19.69c1,1.28,2.19.33,4.65-.09,1.73-.25.17-.91-.58-1.67-3.05-2.68-4.19-3.74-4.73-5.42,1-.15,2.37-.36,4.06-.65l-.47,3.22,3.38-1.56,3.08,1.53-1-3.51Zm-4.85,3.49-1.77.86.27-1.72,1.9-.35L17,11.09l-1.17-1.3L18,9.57l.86-2,.89,1.9,2.12.15-1.43,1.56L21,13.43Z" transform="translate(6 6.56)"/></g></g></g><g id="Artwork_9" data-name="Artwork 9"><g class="cls-6"><polygon class="cls-7" points="99.79 25.7 98.06 16.18 96.29 25.7 92.89 25.7 90.36 13.56 93.13 13.56 94.73 23.54 96.72 13.56 99.56 13.56 101.37 23.54 103.08 13.56 105.75 13.56 103.26 25.7 99.79 25.7"/><g class="cls-6"><path class="cls-7" d="M109.85,17.49l-.58,2a2.65,2.65,0,0,1-2.53-1.77,3.83,3.83,0,0,1-3.42,1.82,3.5,3.5,0,0,1-3.71-3.74c0-2.64,1.89-4.06,5.22-4.06h1.43V11c0-1.59-.67-2.11-2.14-2.11a9.74,9.74,0,0,0-3,.64l-.65-2a11.24,11.24,0,0,1,4.15-.87c3,0,4.4,1.49,4.4,4.18v5.09c0,1,.3,1.33.86,1.56m-3.59-1.63V13.41h-1.15c-1.79,0-2.68.68-2.68,2.11,0,1.17.56,1.83,1.62,1.83a2.44,2.44,0,0,0,2.21-1.49" transform="translate(6 6.56)"/><path class="cls-7" d="M111.47,24.14l-1-2.13c2.28-.37,3-1.15,3.66-2.87h-1L109.59,7h3L115,17.19,117.62,7h2.86l-3.72,12.18c-.87,2.84-1.89,4.68-5.29,4.95" transform="translate(6 6.56)"/><polygon class="cls-7" points="42.87 25.7 41.14 16.18 39.36 25.7 35.96 25.7 33.43 13.56 36.2 13.56 37.8 23.54 39.79 13.56 42.63 13.56 44.45 23.54 46.16 13.56 48.82 13.56 46.33 25.7 42.87 25.7"/><path class="cls-5" d="M50.39,6.84l-.47,2.85a3.75,3.75,0,0,0-1-.14c-1.38,0-2.1,1.08-2.53,3.12v6.47H43.6V7H46l.26,2.38c.54-1.74,1.64-2.71,3-2.71a3.83,3.83,0,0,1,1.14.16" transform="translate(6 6.56)"/><path class="cls-5" d="M54.12,2.65a1.75,1.75,0,1,1-3.49,0,1.75,1.75,0,1,1,3.49,0M51,7h2.77V19.14H51Z" transform="translate(6 6.56)"/><path class="cls-5" d="M62.62,8.06a3.19,3.19,0,0,1,2.08,3.12c0,2.36-1.73,4.08-4.61,4.08a4.26,4.26,0,0,1-1.36-.18,1.14,1.14,0,0,0-.48.9c0,.43.24.84,1.39.84h1.75c2.53,0,4.18,1.45,4.18,3.45,0,2.43-2,3.87-5.72,3.87-4.07,0-5.21-1.37-5.21-3.81h2.48c0,1.22.5,1.75,2.78,1.75s2.87-.64,2.87-1.61S62.1,19,60.83,19H59.09c-2.29,0-3.26-1.08-3.26-2.34a2.75,2.75,0,0,1,1.34-2.25,3.56,3.56,0,0,1-2-3.42c0-2.64,2-4.36,4.74-4.36a8.85,8.85,0,0,0,5.34-1.35l.69,2.34a9.72,9.72,0,0,1-3.31.41M58,11c0,1.47.76,2.39,2,2.39s2-.87,2-2.41-.7-2.29-2.08-2.29S58,9.58,58,11" transform="translate(6 6.56)"/><path class="cls-5" d="M75.82,10.35v8.79H73.05V10.81c0-1.51-.56-2-1.4-2s-1.73.71-2.41,1.82v8.46H66.47v-17l2.77-.29V8.45a4.06,4.06,0,0,1,3.34-1.79c2,0,3.24,1.4,3.24,3.69" transform="translate(6 6.56)"/><path class="cls-5" d="M81.6,19.49c-2.25,0-3.44-1.38-3.44-4V9.12H76.37V7h1.79V4.32L80.93,4V7h2.66l-.28,2.11H80.93v6.33c0,1.19.37,1.67,1.21,1.67a2.41,2.41,0,0,0,1.37-.46l1,1.91a4.8,4.8,0,0,1-2.88.92" transform="translate(6 6.56)"/></g></g></g><text class="cls-8" transform="translate(129.08 24.78)">drip</text></g></svg>
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