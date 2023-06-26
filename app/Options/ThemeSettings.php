<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ThemeSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Settings | Options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = '10';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeSettings = new FieldsBuilder('theme_settings');

        $themeSettings
            ->addTab('Layout Options', [
                'label' => 'Layout Options',
            ])
            ->addGroup('layout', [
                'label' => 'Layout',
                'layout' => 'block',
            ])
            ->addRadio('nav_layout', [
                'label' => 'Nav Layout',
                'choices' => ['Default', 'Side', 'Alpine'],
                'layout' => 'horizontal',
                'return_format' => 'value',
            ])
            ->addRadio('blog_layout', [
                'label' => 'Blog Layout',
                'choices' => ['Default', 'Tiles'],
                'layout' => 'horizontal',
                'return_format' => 'value',
            ]);
            

        // $themeSettings
        //     ->addTab('booking_settings')
        //     ->addText('booking_widget_shortcode', [
        //         'label' => 'Booking Widget shortcode (insert html_id into shortcode... html_id="booking-widget")',
        //         'instructions' => 'Shortcode here...',
        //     ])
        //     ->addRadio('booking_widget_position', [
        //         'choices' => ['default' => 'Fixed Bottom', 'fixed-right' => 'Fixed Right'],
        //         'layout' => 'horizontal',
        //     ]);

        $themeSettings
            ->addTab('Logo', [
                'label' => 'Logo',
            ])
                ->addImage('logo', [
                    'label' => 'Logo',
                    'return_format' => 'id',
                    'preview_size' => 'icon',
                ]);
        $themeSettings
            ->addTab('social_icons',[
                'label' => 'Social Icons',
            ])
                ->addUrl('facebook_url', [
                    'wrapper' => [
                        'width' => '33'
                    ]
                ])
                ->addUrl('twitter_url', [
                    'wrapper' => [
                        'width' => '33'
                    ]
                ])
                ->addUrl('instagram_url', [
                    'wrapper' => [
                        'width' => '33'
                    ]
                ]);
         $themeSettings
            ->addTab('contact_details',[
                'label' => 'Contact Details',
            ])
                ->addText('company_name', [
                    'wrapper' => [
                        'width' => '50'
                    ]
                ])
                ->addText('address', [
                    'wrapper' => [
                        'width' => '50'
                    ]
                ])
                ->addText('telephone', [
                    'wrapper' => [
                        'width' => '50'
                    ]
                ])
                ->addText('email', [
                    'wrapper' => [
                        'width' => '50'
                    ]
                ]);
        $themeSettings
            ->addTab('footer',[
                'label' => 'Footer',
            ])
                ->addTextArea('text_footer', [
                    'wrapper' => [
                        'width' => '50'
                    ]
                ])
                ->addText('instagram_shortcode', [
                    'wrapper' => [
                        'width' => '50'
                    ],
                    'placeholder' => 'Instagram Shortcode goes here...',
                ])
                ->addText('footer_contact_form', [
                    'wrapper' => [
                        'width' => '50'
                    ],
                    'placeholder' => 'Footer Contact From Shortcode goes here...',
                ])
                ->addText('footer_newsletter', [
                    'wrapper' => [
                        'width' => '50'
                    ],
                    'placeholder' => 'Footer Newsletter Shortcode goes here...',
                ]);

        return $themeSettings->build();
    }
}
