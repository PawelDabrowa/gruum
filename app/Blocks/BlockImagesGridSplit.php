<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockImagesGridSplit extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Images Grid Split';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Images Grid Split block.';

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
        'src' => 'grid-view',
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
        $blockImagesGridSplit = new FieldsBuilder('block_images_grid_split');

        $blockImagesGridSplit
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '33',
                ],
            ])
            ->addTrueFalse('text_position', [
                'label' => 'Text Position',
                'wrapper' => [
                    'width' => '33',
                ],
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Text left',
                'ui_off_text' => 'Text right',
            ])
            ->addColorPicker('background_color', [
                'label' => 'Background Color',
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '34',
                ],
                'default_value' => '',
            ])
            ->addText('header', [
                'label' => 'Header',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addImage('divider_image', [
                'label' => 'Divider Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'url',
            ])
            ->addWysiwyg('static_content',[
                'label' => 'Static Content',
                'wrapper' => [
                    'width' => ''
                ],
            ])
            ->addLink('button_one', [
                'label' => 'Button One',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ])
            ->addLink('button_two', [
                'label' => 'Button Two',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ])
            ->addImage('top_left_image', [
                'label' => 'Top Left Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'url',
            ])
            ->addImage('top_right_image', [
                'label' => 'Top Right Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'url',
            ])
            ->addImage('bottom_left_image', [
                'label' => 'Bottom Left Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'url',
            ])
            ->addImage('bottom_right_image', [
                'label' => 'Bottom Right Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'url',
            ]);

        return $blockImagesGridSplit->build();
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
