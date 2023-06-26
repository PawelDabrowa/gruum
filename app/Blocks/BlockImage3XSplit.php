<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockImage3XSplit extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Image3 X Split';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Image3 X Split block.';

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
        $blockImage3XSplit = new FieldsBuilder('block_image3_x_split');

        $blockImage3XSplit
            ->addText('section_id', [
                'wrapper' => [
                    'width' => '25'
                ]
            ])
            ->addText('label', [
                'wrapper' => [
                    'width' => '25'
                ]
            ])
            ->addColorPicker('background_color', [
                'wrapper' => [
                    'width' => '25'
                ]
            ])
            ->addColorPicker('header_text_color', [
                'wrapper' => [
                    'width' => '25'
                ]
            ])
            ->addText('header_bottom', [
                'label' => 'Header',
                'wrapper' => [
                    'width' => '50'
                ]
            ])
            ->addTextArea('sub_header_bottom', [
                'label' => 'Sub Header',
                'wrapper' => [
                    'width' => '50'
                ]
            ])
            ->addRadio('text_column', [
                'choices' => [
                    'one' =>'One Column', 
                    'two' => 'Two Columns'
                ],
                'wrapper' => [
                    'width' => '20',
                ],
                'layout' => 'vertical',
                'return_format' => 'value'
            ])
            ->addColorPicker('text_color', [
                'wrapper' => [
                    'width' => '20',
                ],
                'default_value' => '#0F1111',
            ])
            ->addTextArea('text_bottom', [
                'rows' => '8',
                'wrapper' => [
                    'width' => '60',
                ],
                'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addTrueFalse('switch_images', [
                'wrapper' => [
                    'width' => '30',
                ],
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Images Right',
                'ui_off_text' => 'Images Left',
            ])
            ->addGroup('top_image_position', [
                'wrapper' => [
                    'width' => '35',
                ],
                'layout' => 'table'
            ])
                ->addRadio('horizontal_position', [
                    'wrapper' => [
                        'width' => '50',
                    ],
                    'layout' => 'horizontal',
                    'choices' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ],
                ])
                ->addRadio('vertical_position', [
                    'wrapper' => [
                        'width' => '50',
                    ],
                    'layout' => 'horizontal',
                    'choices' => [
                        'up' => 'Up',
                        'down' => 'Down'
                    ],
                ])
            ->endGroup()
            ->addGroup('bottom_image_position', [
                'wrapper' => [
                    'width' => '35',
                ],
                'layout' => 'table'
            ])
                ->addRadio('horizontal_position', [
                    'wrapper' => [
                        'width' => '50',
                    ],
                    'layout' => 'horizontal',
                    'choices' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ],
                ])
                ->addRadio('vertical_position', [
                    'wrapper' => [
                        'width' => '50',
                    ],
                    'layout' => 'horizontal',
                    'choices' => [
                        'up' => 'Up',
                        'down' => 'Down'
                    ],
                ])
            ->endGroup()
            ->addGroup('images_bottom', [
                'layout' => 'table',
            ])
                ->addImage('image_1', [
                    'label' => 'Main image',
                    'return_format' => 'id',
                    'preview_size' => 'full',
                ])
                ->addImage('image_2', [
                    'label' => 'Top image',
                    'return_format' => 'id',
                    'preview_size' => 'full',
                ])
                ->addImage('image_3', [
                    'label' => 'Bottom image',
                    'return_format' => 'id',
                    'preview_size' => 'full',
                ])
            ->endGroup()
            ->addGroup('button', [
                'label' => 'Left Button',
            ])
                ->addLink('button_link')
                ->addColorPicker('button_background_color',[
                    'label' => 'Button Background Color',
                ])
                ->addColorPicker('button_font_color', [
                    'label' => 'Button Font Color',
                ])
                ->addColorPicker('button_border_color', [
                    'label' => 'Button Border Color',
                ])
            ->endGroup()
            ->addGroup('button_1', [
                'label' => 'Right Button',
            ])
                ->addLink('button_link')
                ->addColorPicker('button_background_color',[
                    'label' => 'Button Background Color',
                ])
                ->addColorPicker('button_font_color', [
                    'label' => 'Button Font Color',
                ])
                ->addColorPicker('button_border_color', [
                    'label' => 'Button Border Color',
                ])
            ->endGroup();
        return $blockImage3XSplit->build();
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
