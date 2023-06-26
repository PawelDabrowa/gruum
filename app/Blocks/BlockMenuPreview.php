<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockMenuPreview extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Menu Preview';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Menu Preview block.';

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
        $blockMenuPreview = new FieldsBuilder('block_menu_preview');

        $blockMenuPreview
            ->addText('section_id', [
                'label' => 'Section ID',
                'wrapper' => [
                    'width' => '33',
                ]
            ])
            ->addText('label', [
                'wrapper' => [
                    'width' => '33',
                ],
            ])
            ->addText('main_title', [
                'wrapper' => [
                    'width' => '34',
                ],
            ])
            ->addGroup('menu_preview', [
                'layout' => 'row'
            ])
                ->addTab('restaurant', [
                    'placement' => 'top-ailgned',
                ])
                    ->addImage('restaurant_image',[
                        'return_format' => 'id',
                    ])
                    ->addImage('restaurant_icon',[
                        'return_format' => 'url',
                    ])
                    ->addText('restaurant_subtitle')
                    ->addTextArea('restaurant_text')
                    ->addText('restaurant_button_text')
                    ->addUrl('restaurant_button_url')
                    ->addText('restaurant_button_text_2')
                    ->addUrl('restaurant_button_url_2')
                ->addTab('bar', [
                    'placement' => 'top-ailgned',
                ])
                    ->addImage('bar_image',[
                        'return_format' => 'id',
                    ])
                    ->addImage('bar_icon',[
                        'return_format' => 'url',
                    ])
                    ->addText('bar_subtitle')
                    ->addTextArea('bar_text')
                    ->addText('bar_button_text')
                    ->addUrl('bar_button_url')
                    ->addText('bar_button_text_2')
                    ->addUrl('bar_button_url_2')
                ->addTab('fish_and_chips', [
                    'placement' => 'top-ailgned',
                ])
                    ->addImage('fish_image',[
                        'return_format' => 'id',
                    ])
                    ->addImage('fish_icon',[
                        'return_format' => 'url',
                    ])
                    ->addText('fish_subtitle')
                    ->addTextArea('fish_text')
                    ->addText('fish_button_text')
                    ->addUrl('fish_button_url')
                    ->addText('fish_button_text_2')
                    ->addUrl('fish_button_url_2')
                ->addTab('kids_menu', [
                    'placement' => 'top-ailgned',
                ])
                    ->addImage('kids_menu_image',[
                        'return_format' => 'id',
                    ])
                    ->addImage('kids_menu_icon',[
                        'return_format' => 'url',
                    ])
                    ->addText('kids_menu_subtitle')
                    ->addTextArea('kids_menu_text')
                    ->addText('kids_menu_button_text')
                    ->addUrl('kids_menu_button_url')
                    ->addText('kids_menu_button_text_2')
                    ->addUrl('kids_menu_button_url_2')
            ->endGroup();

        return $blockMenuPreview->build();
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
