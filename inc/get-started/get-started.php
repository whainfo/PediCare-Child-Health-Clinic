<?php
function PediCare_Child_Health_Clinic_theme_page_admin_style( $hook ) {
    if ( 'appearance_page_dentix-guide-page' === $hook ) {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get( 'Version' );

        $version_string = is_string( $theme_version ) ? $theme_version : false;
        wp_enqueue_style(
            'dentix-theme-admin-style',
            get_theme_file_uri( 'dist/css/about-admin.css' ),
            array(),
            $version_string
        );
    }
}
add_action( 'admin_enqueue_scripts', 'PediCare_Child_Health_Clinic_theme_page_admin_style' );

add_action('admin_menu', 'PediCare_Child_Health_Clinic_getting_started');
function PediCare_Child_Health_Clinic_getting_started()
{
    add_theme_page(esc_html__('Get Started', 'pedicare-child-health-clinic'), esc_html__('Get Started', 'pedicare-child-health-clinic'), 'edit_theme_options', 'dentix-guide-page', 'PediCare_Child_Health_Clinic_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function PediCare_Child_Health_Clinic_admin_theme_style()
{
    wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}

add_action('admin_enqueue_scripts', 'PediCare_Child_Health_Clinic_admin_theme_style');

//guidline for about theme
function PediCare_Child_Health_Clinic_test_guide()
{
    //custom function about theme customizer
    $return = add_query_arg(array());
    $theme = wp_get_theme('pedicare-child-health-clinic');
    $screenshot_url = $theme->get_screenshot();
    ?>




    <div id="welcome-panel" class="welcome-panel">
        <div class="welcome-panel-content">
            <div class="welcome-panel-header">
                <h2><?php echo esc_html( $theme->Name ); ?></h2>
                <p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'pedicare-child-health-clinic' ); ?></p>
                <div class="logo-panel">
                    <a href="<?php echo esc_url('https://webhelpagency.com/'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri().'/src/images/logos/WHA_logo.svg' ); ?>"></a>
                </div>
            </div>

            <div class="welcome-panel-column-container">
                <div class="container-wrap">
                    <div class="welcome-panel-column two-columns">
                        <!-- <div class="welcome-panel-icon-pages"></div> -->
                        <div class="welcome-panel-column-content">
                            <h3><?php esc_html_e( 'Getting Started with DentiX!', 'pedicare-child-health-clinic' ); ?></h3>
                            <p><?php esc_html_e( 'Awesome! DentiX has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'pedicare-child-health-clinic' ); ?></p>
                        </div>
                    </div>

                    <div class="welcome-panel-column two-columns">
                        <div class="welcome-panel-column-content">
                            <h3><?php esc_html_e( 'More Features with Web Help Agency', 'pedicare-child-health-clinic' ); ?></h3>
                            <p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you to buy extended design. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'pedicare-child-health-clinic' ); ?></p>
                            <a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://webhelpagency.com/"); ?>><?php esc_html_e( 'Buy DentiX Pro', 'pedicare-child-health-clinic' ); ?></a>
                        </div>
                    </div>

                </div>
                <div class="sidebar">
                    <div class="welcome-panel-column important-links">
                        <!-- <div class="welcome-panel-icon-pages"></div> -->
                        <div class="welcome-panel-column-content">
                            <h3><?php esc_html_e( 'Important Links', 'pedicare-child-health-clinic' ); ?></h3>
                            <a target="_blank" href="<?php echo esc_url( 'https://wordpress.org/support/theme/dentix/' ); ?>"><?php esc_html_e( 'Theme Support', 'pedicare-child-health-clinic' ); ?></a>
                            <a target="_blank" href="https://dentix.webhelpagency.com/"><?php esc_html_e( 'View Demo', 'pedicare-child-health-clinic' ); ?></a>
                        </div>
                    </div>

                    <div class="welcome-panel-column review">
                        <!-- <div class="welcome-panel-icon-pages"></div> -->
                        <div class="welcome-panel-column-content">
                            <h3><?php esc_html_e( 'Leave us a review', 'pedicare-child-health-clinic' ); ?></h3>
                            <p><?php esc_html_e( 'Loved DentiX Theme? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'pedicare-child-health-clinic' ); ?></p>
                            <a href="https://wordpress.org/support/theme/dentix/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'pedicare-child-health-clinic' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
