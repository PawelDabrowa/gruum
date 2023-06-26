<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockImageWysiwyg extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Image Wysiwyg';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Image Wysiwyg block.';

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
        'src' => 'text',
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
        $blockImageWysiwyg = new FieldsBuilder('block_image_wysiwyg');

        $blockImageWysiwyg
            ->addText('section_id', [
                'label' => 'Section ID',
                'instructions' => 'For page links',
                'wrapper' => [
                    'width' => '33',
                ],
            ])
            ->addText('section_title', [
                'label' => 'Section Title',
                'wrapper' => [
                    'width' => '33',
                ],
            ])
            ->addRadio('section_padding', [
                'label' => 'Section Padding',
                'wrapper' => [
                    'width' => '34',
                ],
                'choices' => ['section' => 'Both','section-top' => 'Top only', 'section-bottom' => 'Bottom only'],
                'layout' => 'horizontal',
            ])
            ->addImage('image', [
                'label' => 'Image',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addWysiwyg('content', [
                'label' => 'Content',
                'wrapper' => [
                    'width' => '75',
                ],
            ])
            ->addRadio('add_button', [
                'label' => 'Add Button',
                'wrapper' => [
                    'width' => '25',
                ],
                'choices' => ['no' => 'No', 'yes' => 'Yes'],
                'layout' => 'horizontal',
            ])
            ->addRadio('button_type', [
                'label' => 'Button Type',
                'conditional_logic' => [
                    'field' => 'add_button',
                    'operator' => '==',
                    'value' => 'yes',
                ],
                'wrapper' => [
                    'width' => '25',
                ],
                'choices' => ['link' => 'Link', 'popup' => 'Popup'],
                'layout' => 'horizontal',
            ])
            ->addLink('button_link', [
                'label' => 'Button Link',
                'conditional_logic' => [
                    [
                        'field' => 'add_button',
                        'operator' => '==',
                        'value' => 'yes',
                    ],
                    [
                        'field' => 'button_type',
                        'operator' => '==',
                        'value' => 'link',
                    ]
                ],
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addText('popup_button_text', [
                'label' => 'Popup Button Text',
                'conditional_logic' => [
                    'field' => 'button_type',
                    'operator' => '==',
                    'value' => 'popup',
                ],
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('popup_class', [
                'label' => 'Popup Class',
                'conditional_logic' => [
                    'field' => 'button_type',
                    'operator' => '==',
                    'value' => 'popup',
                ],
                'wrapper' => [
                    'width' => '25',
                ],
            ]);
            
        return $blockImageWysiwyg->build();
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
