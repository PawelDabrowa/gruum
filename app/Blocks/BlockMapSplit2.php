<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockMapSplit2 extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Map Split2';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Map Split2 block.';

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
        $blockMapSplit2 = new FieldsBuilder('block_map_split2');

        $blockMapSplit2
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addTrueFalse('map_position', [
                'label' => 'Map Position',
                'wrapper' => [
                    'width' => '25',
                ],
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Map left',
                'ui_off_text' => 'Map right',
            ])
            ->addText('form_title', [
                'label' => 'Form Title',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('contact_form', [
                'label' => 'Contact form',
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addImage('header_image', [
                'label' => 'Header Image',
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'id',
            ])
            ->addTextArea('form_intro', [
                'label' => 'Form intro',
                'wrapper' => [
                    'width' => '50',
                ],
            ])
            ->addTextArea('google_map_iframe', [
                'label' => 'Google map iFrame',
            ]);

        return $blockMapSplit2->build();
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
