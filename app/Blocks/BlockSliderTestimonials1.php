<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockSliderTestimonials1 extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Slider Testimonials 1';

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
        $blockSliderTestimonials1 = new FieldsBuilder('block_slider_testimonials1');

        $blockSliderTestimonials1
        ->addText('section_id')
        ->addText('title', [
            'label' => 'Title if needed',
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
        ->addImage('background_image',[
            'return_format' => 'url',
        ])
            ->addRepeater('items')
                ->addWysiwyg('item', [
                    'label' => 'Content',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                ])
            ->endRepeater();

        return $blockSliderTestimonials1->build();
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
