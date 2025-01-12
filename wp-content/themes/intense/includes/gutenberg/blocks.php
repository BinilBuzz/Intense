<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // Welcome Banner Block
        acf_register_block_type(array(
            'name' => 'Welcome Banner Block',
            'title' => __('Welcome Banner Block'),
            'description' => __('Welcome Banner Block'),
            'render_template' => 'blocks/welcome-banner.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Welcome Banner Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Service Heading Block
        acf_register_block_type(array(
            'name' => 'Service Heading Block',
            'title' => __('Service Heading Block'),
            'description' => __('Service Heading Block'),
            'render_template' => 'blocks/services.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Service Heading Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Services Block
        acf_register_block_type(array(
            'name' => 'Services Block',
            'title' => __('Services Block'),
            'description' => __('Services Block'),
            'render_template' => 'blocks/services.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Services Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Services Details Top Content Block
        acf_register_block_type(array(
            'name' => 'Services Details Top Content Block',
            'title' => __('Services Details Top Content Block'),
            'description' => __('Services Details Top Content Block'),
            'render_template' => 'blocks/services-details-top-content.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Services Details Top Content Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // About Everest Ad Block
        acf_register_block_type(array(
            'name' => 'About Everest Ad Block',
            'title' => __('About Everest Ad Block'),
            'description' => __('About Everest Ad Block'),
            'render_template' => 'blocks/about-everest-ad.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('About Everest Ad Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Our Teams Block
        acf_register_block_type(array(
            'name' => 'Our Teams Block',
            'title' => __('Our Teams Block'),
            'description' => __('Our Teams Block'),
            'render_template' => 'blocks/our-teams.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Our Teams Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Our Works Block
        acf_register_block_type(array(
            'name' => 'Our Works Block',
            'title' => __('Our Works Block'),
            'description' => __('Our Works Block'),
            'render_template' => 'blocks/our-works.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Our Works Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Our Clients Block
        acf_register_block_type(array(
            'name' => 'Our Clients Block',
            'title' => __('Our Clients Block'),
            'description' => __('Our Clients Block'),
            'render_template' => 'blocks/our-clients.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Our Clients Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Blogs Block
        acf_register_block_type(array(
            'name' => 'Blogs Block',
            'title' => __('Blogs Block'),
            'description' => __('Blogs Block'),
            'render_template' => 'blocks/blogs.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Blogs Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        // Testimonial Block
        acf_register_block_type(array(
            'name' => 'Testimonial Block',
            'title' => __('Testimonial Block'),
            'description' => __('Testimonial Block'),
            'render_template' => 'blocks/client-testimonials.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Testimonial Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Elevate Your Brand Block
        acf_register_block_type(array(
            'name' => 'Elevate Your Brand Block',
            'title' => __('Elevate Your Brand Block'),
            'description' => __('Elevate Your Brand Block'),
            'render_template' => 'blocks/elevate-your-brand.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Elevate Your Brand Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Elevate Your Brand Block
        acf_register_block_type(array(
            'name' => 'Page Banner Block',
            'title' => __('Page Banner Block Block'),
            'description' => __('Page Banner Block Block'),
            'render_template' => 'blocks/page-banner.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Page Banner Block Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Who We Are Block
        acf_register_block_type(array(
            'name' => 'Who We Are Block',
            'title' => __('Who We Are Block'),
            'description' => __('Who We Are Block'),
            'render_template' => 'blocks/who-we-are.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Who We Are Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Why Everest Ad Block
        acf_register_block_type(array(
            'name' => 'Why Everest Ad Block',
            'title' => __('Why Everest Ad Block'),
            'description' => __('Why Everest Ad Block'),
            'render_template' => 'blocks/why-everest-ad.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Why Everest Ad Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Service Listing Block
        acf_register_block_type(array(
            'name' => 'Service Listing Block',
            'title' => __('Service Listing Block'),
            'description' => __('Service Listing Block'),
            'render_template' => 'blocks/service-listing-block.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Service Listing Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
        //Contact Section Block
        acf_register_block_type(array(
            'name' => 'Contact Section Block',
            'title' => __('Contact Section Block'),
            'description' => __('Contact Section Block'),
            'render_template' => 'blocks/contact.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Contact Section Block'),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => []
                ]
            ],
        ));
    }
}
