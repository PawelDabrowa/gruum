<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockContactDetails extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Contact Details';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Contact Details block.';

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
        'src' => 'editor-ul',
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
        $blockContactDetails = new FieldsBuilder('block_contact_details');

        $blockContactDetails
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addColorPicker('background_color', [
                'label' => 'Background Color',
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '75',
                ],
                'default_value' => '',
            ])
            ->addText('phone_block_title', [
                'label' => 'Phone Block Title',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addTextArea('phone_block_content', [
                'label' => 'Phone Block Content',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addText('phone_block_telephone', [
                'label' => 'Phone Block Telephone',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addText('phone_block_email', [
                'label' => 'Phone Block Email',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addText('address_block_title', [
                'label' => 'Address Block Title',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addTextArea('address_block_content', [
                'label' => 'Address Block Content',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('book_online_block_title', [
                'label' => 'Book Online Block Title',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addTextArea('book_online_block_content', [
                'label' => 'Book Online Block Content',
                'wrapper' => [
                    'width' => '25',
                ]
            ])
            ->addLink('button_link', [
                'label' => 'Button Link',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ]);

        return $blockContactDetails->build();
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
