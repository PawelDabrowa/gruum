<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockImageSplitLarge extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Image Split Large';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Image Split Large block.';

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
        $blockImageSplitLarge = new FieldsBuilder('block_image_split_large');

        $blockImageSplitLarge
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '33',
                ]
            ])
            ->addRadio('text_position', [
                'wrapper' => [
                    'width' => '33',
                ],
                'choices' => ['left' => 'Left', 'right' => 'Right'],
                'layout' => 'horizontal',
            ])
            ->addRadio('section_bg_color', [
                'wrapper' => [
                    'width' => '34',
                ],
                'choices' => ['section-white' => 'White', 'section-medium' => 'Medium', 'section-dark' => 'Dark'],
                'layout' => 'horizontal',
            ])
            ->addText('headline')
            ->addWysiwyg('static_content',[
                'wrapper' => [
                    'width' => '75'
                ],
            ])
            ->addImage('image', [
                'wrapper' => [
                    'width' => '25',
                ],
                'return_format' => 'url',
                'preview_size' => 'medium',
            ])
            ->addRadio('button_type', [
                'choices' => ['url' => 'Url', 'popup' => 'Popup'],
                'layout' => 'horizontal',
            ])
            ->addLink('button_one_link', [
                'conditional_logic' => [
                    [
                        'field' => 'button_type',
                        'operator' => '==',
                        'value' => 'url',
                    ]
                ],
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ])->addLink('button_two_link', [
                'conditional_logic' => [
                    [
                        'field' => 'button_type',
                        'operator' => '==',
                        'value' => 'url',
                    ]
                ],
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ])
            ->addText('button_popup_text', [
                'conditional_logic' => [
                    [
                        'field' => 'button_type',
                        'operator' => '==',
                        'value' => 'popup',
                    ]
                ],
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('popup_class', [
                'conditional_logic' => [
                    [
                        'field' => 'button_type',
                        'operator' => '==',
                        'value' => 'popup',
                    ]
                ],
                'wrapper' => [
                    'width' => '50',
                ]
            ]);

        return $blockImageSplitLarge->build();
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
