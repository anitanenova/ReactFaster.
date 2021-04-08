<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevriX_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
// DXCheck is used to monitor our sites with our internal tools. Remove this if you don't need it
?>
    <meta property="autocheck:online" content="true" />

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e(
            	"Skip to content",
            	"dxstarter"
            ); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-header-primary">
                <div class="row">
                    <div class="columns small-12">
                        <div class="site-header-inner">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url("/")); ?>"
                                        rel="home">ReactFaster.</a></h1>

                            </div><!-- .site-branding -->

                            <div class="site-navigation-wrapper">
                                <nav class="site-navigation-primary">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="#" class="menu-item-link active">
                                                Home </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-item-link">
                                                Categories </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-item-link">
                                                Editorial </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-item-link">
                                                Quizzes </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-item-link">
                                                Memes </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav class="site-navigation-secondary">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="#" class="menu-item btn btn-primary btn-light btn-search"><svg
                                                    width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.875 14.6562C16.0625 14.8229 16.0625 15 15.875 15.1875L15.1875 15.875C15 16.0625 14.8229 16.0625 14.6562 15.875L10.875 12.0938C10.7917 12.0104 10.75 11.9271 10.75 11.8438V11.4062C9.52083 12.4688 8.10417 13 6.5 13C4.70833 13 3.17708 12.3646 1.90625 11.0938C0.635417 9.82292 0 8.29167 0 6.5C0 4.70833 0.635417 3.17708 1.90625 1.90625C3.17708 0.635417 4.70833 0 6.5 0C8.29167 0 9.82292 0.635417 11.0938 1.90625C12.3646 3.17708 13 4.70833 13 6.5C13 8.10417 12.4688 9.52083 11.4062 10.75H11.8438C11.9479 10.75 12.0312 10.7917 12.0938 10.875L15.875 14.6562ZM2.96875 10.0312C3.94792 11.0104 5.125 11.5 6.5 11.5C7.875 11.5 9.05208 11.0104 10.0312 10.0312C11.0104 9.05208 11.5 7.875 11.5 6.5C11.5 5.125 11.0104 3.94792 10.0312 2.96875C9.05208 1.98958 7.875 1.5 6.5 1.5C5.125 1.5 3.94792 1.98958 2.96875 2.96875C1.98958 3.94792 1.5 5.125 1.5 6.5C1.5 7.875 1.98958 9.05208 2.96875 10.0312Z"
                                                        fill="#2E2E2E" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-item btn btn-primary btn-red btn-login">
                                                Login </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div><!-- .site-header-inner -->
                    </div><!-- /columns -->
                </div><!-- /row -->
            </div>
        </header><!-- #site-header -->

        <div id="content" class="site-content">