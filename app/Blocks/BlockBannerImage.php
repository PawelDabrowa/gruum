<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockBannerImage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Banner Image';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Banner Image block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = [
        // Specifying a background color to appear with the icon e.g.: in the inserter.
        'background' => '#fdc300',
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#000',
        // Specifying a dashicon for the block
        'src' => 'format-image',
    ];

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'editor';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'items' => $this->items(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $blockBannerImage = new FieldsBuilder('block_banner_image');

        $blockBannerImage
            ->addImage('background_image', [
                'label' => 'Background Image',
                'wrapper' => [
                    'width' => '25',
                ],
                'return_format' => 'url',
            ])
            ->addText('header_title', [
                'label' => 'Header Title',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('h1_title', [
                'label' => 'H1 Title',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('subtitle', [
                'label' => 'Subtitle',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addColorPicker('button_background_color', [
                'label' => 'Button Background Color',
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '33',
                ],
                'default_value' => '',
            ])
            ->addColorPicker('button_font_color', [
                'label' => 'Button Font Color',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '33',
                ],
                'default_value' => '',
            ])
            ->addLink('button_link', [
                'label' => 'Button Link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '34',
                ],
                'return_format' => 'array',
            ]);

        return $blockBannerImage->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: $this->example['items'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
