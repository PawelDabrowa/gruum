<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockImageIconsSplit extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Image Icons Split';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = '';

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
        $blockImageIconsSplit = new FieldsBuilder('block_image_icons_split');

        $blockImageIconsSplit
            ->addText('title', [
                'label' => 'Title if needed',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addTextarea('introduction', [
                'label' => 'Small introduction if needed',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
                'delay' => 0,
            ])
            ->addText('title_first_row', [
                'label' => 'Title First Row',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('subtitle_first_row', [
                'label' => 'Subtitle First Row',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('title_second_row', [
                'label' => 'Title Second Row',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addText('subtitle_second_row', [
                'label' => 'Subtitle Second Row',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addLink('button_link', [
                'label' => 'Button Link if needed',
                'required' => 0,
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addImage('image', [
                'label' => 'Image',
                'required' => 0,
                'return_format' => 'id',
                'wrapper' => [
                    'width' => '50',
                ]
            ]);

        return $blockImageIconsSplit->build();
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
