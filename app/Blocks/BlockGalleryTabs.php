<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockGalleryTabs extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Gallery Tabs';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Gallery Tabs block.';

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
        'src' => 'images-alt2',
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
        $blockGalleryTabs = new FieldsBuilder('block_gallery_tabs');

        $blockGalleryTabs
        ->addText('section_id', [
            'label' => 'Section ID',
            'wrapper' => [
                'width' => '30',
            ],
        ])
        ->addText('title', [
            'label' => 'Title',
            'wrapper' => [
                'width' => '30',
            ],
        ])
        ->addTextArea('content', [
            'label' => 'Content',
            'wrapper' => [
                'width' => '40',
            ],
        ])
        ->addRepeater('gallery_tab', [
            'label' => 'Gallery Tab',
            'button_label' => 'Add Tab',
        ])
            ->addText('tab_title', [
                'label' => 'Tab Title',
            ])
            ->addGallery('the_gallery', [
                'label' => 'The Gallery',
                'return_format' => 'id',
            ])
        ->endRepeater();

        return $blockGalleryTabs->build();
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
