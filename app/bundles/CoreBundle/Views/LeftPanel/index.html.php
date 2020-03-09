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
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53"><defs><style>.cls-1,.cls-4{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#1a202c;}.cls-4{stroke:#b388ff;stroke-miterlimit:10;stroke-width:3.62px;}.cls-5{fill:#fff;}</style><clipPath id="clip-path"><rect class="cls-1" width="10" height="10"/></clipPath></defs><title>purple-star</title><g id="Artwork_16" data-name="Artwork 16"><g class="cls-2"><g class="cls-2"><path class="cls-3" d="M13.22,51.19H39.74c9.11-.21,11.61-5.28,11.44-11.44V11.43a9.62,9.62,0,0,0-9.62-9.62H13.22A11.44,11.44,0,0,0,1.81,13.24V39.75A11.44,11.44,0,0,0,13.22,51.19"/><path class="cls-4" d="M13.22,51.19H39.74c9.11-.21,11.61-5.28,11.44-11.44V11.43a9.62,9.62,0,0,0-9.62-9.62H13.22A11.44,11.44,0,0,0,1.81,13.24V39.75A11.44,11.44,0,0,0,13.22,51.19Z"/><path class="cls-5" d="M51.11,19.14l-7.36-.86L40.31,11.7l-3.14,6.73L29.9,19.67l3.87,3.6a32.61,32.61,0,0,1-7.71,1.39A46.35,46.35,0,0,1,25.42,20c-1.28-12.44,1.68-9.75-5.8-10-7.77-.12-5.75-2-5.35,6a64,64,0,0,0,1.05,8.51c-.16.4-.31.82-.47,1.23-3.55.56-3.88-2.23-4.23-2.52,0,0,.29-.29-4,1.61C2,26.8,1.82,26.6,1.82,26.54s.06.36.16.58c1.06,2,6.46,2.32,11.61,2a4.53,4.53,0,0,1-.46,1c-.93,1.75-8.71,8.36-9.79,8.75,7.82-.42,11.67-3,15.33-6.32C20.78,35.49,23.78,37.84,28,42c2.17,2.76,4.71.71,10-.19,3.71-.53.36-2-1.26-3.59-6.55-5.77-9-8-10.17-11.66,2.23-.31,5.11-.77,8.73-1.39l-1,6.92,7.26-3.35L48.17,32l-2.23-7.53ZM40.67,26.65,36.88,28.5l.58-3.71,4.08-.73-5.06-.6L34,20.67l4.64-.46,1.86-4.31L42.37,20l4.57.32-3.08,3.35,1.27,4.83Z"/></g></g></g></svg>
        </svg>
        <!--/ logo figure -->
        <!-- logo text -->
        <svg version="1.1" class="mautic-logo-text mnl-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 65" enable-background="new 0 0 260 65" xml:space="preserve">
            <g>
                <path class="m" d="M39.336,57.983V37.951c0-4.932-2.58-9.409-7.664-9.409
                c-5.008,0-7.967,4.477-7.967,9.409v20.032h-9.258V20.498h8.575l0.683,4.553c1.972-3.794,6.298-5.16,9.864-5.16
                c4.477,0,8.955,1.822,11.079,6.981c3.339-5.311,7.664-6.829,12.521-6.829c10.623,0,15.859,6.526,15.859,17.756v20.185H63.77V37.799
                c0-4.932-2.049-9.106-7.057-9.106s-8.119,4.326-8.119,9.258v20.032H39.336z"/>
                <path class="a" d="M109.031,20.574h8.879v37.41h-8.728l-0.456-5.464
                c-2.124,4.402-7.967,6.527-12.14,6.604c-11.079,0.074-19.275-6.754-19.275-19.883c0-12.898,8.575-19.652,19.502-19.577
                c5.01,0,9.789,2.352,11.913,6.07L109.031,20.574z M86.569,39.24c0,7.134,4.934,11.384,11.079,11.384
                c14.569,0,14.569-22.689,0-22.689C91.503,27.935,86.569,32.108,86.569,39.24"/>
                <path class="u" d="M133.101,20.574v19.578c0,5.69,3.11,10.016,9.03,10.016
                c5.69,0,9.561-4.781,9.561-10.471V20.574h9.181v37.486h-8.27l-0.607-5.084c-3.871,3.794-7.437,5.614-12.672,5.614
                c-8.954,0-15.48-6.754-15.48-18.363V20.574H133.101z"/>
                <path class="t" d="M182.123,10.026V20.65h10.319v7.967h-10.396V44.78
                c0,3.567,1.973,5.313,4.855,5.313c1.443,0,3.112-0.455,4.479-1.14l2.58,7.893c-2.656,1.062-4.857,1.518-7.664,1.594
                c-8.12,0.303-13.432-4.326-13.432-13.659V28.617h-6.98V20.65h6.98v-9.637L182.123,10.026z"/>
                <path class="i" d="M209.441,10.026c0,7.209-10.929,7.209-10.929,0 C198.513,2.818,209.441,2.818,209.441,10.026 M199.348,57.984h9.259V20.422h-9.259V57.984z"/>
                <path class="c" d="M247.803,53.203c-4.326,4.249-8.879,5.92-14.418,5.92
                c-10.853,0-19.881-6.526-19.881-19.807c0-13.279,9.028-19.805,19.881-19.805c5.312,0,9.409,1.518,13.507,5.54l-5.843,6.146
                c-2.2-1.973-4.934-2.959-7.514-2.959c-6.221,0-10.773,4.553-10.773,11.078c0,7.133,4.855,10.927,10.623,10.927
                c2.959,0,5.919-0.834,8.194-3.11L247.803,53.203z"/>
            </g>
        </svg>
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