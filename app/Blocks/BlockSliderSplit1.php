<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockSliderSplit1 extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Slider Split 1';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Slider Split 1 block.';

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
        'src' => 'align-pull-left',
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
        $blockSliderSplit1 = new FieldsBuilder('block_slider_split1');

        $blockSliderSplit1
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '40',
                ],
            ])
            ->addRadio('section_layout_style', [
                'label' => 'Section Layout Style',
                'wrapper' => [
                    'width' => '60',
                ],
                'choices' => ['default' => 'Default', 'space' => 'Space around'],
                'layout' => 'horizontal',
            ])
            ->addTrueFalse('gallery_position', [
                'label' => 'Gallery Position',
                'wrapper' => [
                    'width' => '40',
                ],
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Gallery left',
                'ui_off_text' => 'Gallery right',
            ])
            ->addRadio('section_bg_color', [
                'label' => 'Section Bg Color',
                'wrapper' => [
                    'width' => '60',
                ],
                'choices' => ['default-color' => 'White', 'section-medium' => 'Medium', 'section-dark' => 'Dark'],
                'layout' => 'horizontal',
            ])
            ->addGallery('gallery', [
                'label' => 'Gallery',
            ])
            ->addWysiwyg('static_content', [
                'label' => 'Static Content',
            ])
            ->addRadio('button_type', [
                'label' => 'Button Type',
                'wrapper' => [
                    'width' => '30',
                ],
                'choices' => ['link' => 'Link', 'popup' => 'Popup'],
                'layout' => 'horizontal',
            ])
            ->addText('button_popup_text', [
                'label' => 'Button Popup Text',
                'conditional_logic' => [
                    'field' => 'button_type',
                    'operator' => '==',
                    'value' => 'popup',
                ],
                'wrapper' => [
                    'width' => '35',
                ],
            ])
            ->addLink('button_one_link', [
                'label' => 'Button One Link',
                'conditional_logic' => [
                    'field' => 'button_type',
                    'operator' => '==',
                    'value' => 'link',
                ],
                'wrapper' => [
                    'width' => '35',
                ],
                'return_format' => 'array',
            ])
            ->addLink('button_two_link', [
                'label' => 'Button Two Link',
                'conditional_logic' => [
                    'field' => 'button_type',
                    'operator' => '==',
                    'value' => 'link',
                ],
                'wrapper' => [
                    'width' => '35',
                ],
                'return_format' => 'array',
            ]);

        return $blockSliderSplit1->build();
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
