<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockSingleTestimonialParallax extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Single Testimonial Parallax';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Block Single Testimonial Parallax block.';

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
        $blockSingleTestimonialParallax = new FieldsBuilder('block_single_testimonial_parallax');

        $blockSingleTestimonialParallax
            ->addGroup('testimonial_banner', [
                'label' => 'Testimonial Banner',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
                ],
                'layout' => 'row',
                'sub_fields' => [],
            ])
                ->addText('testimonial_text', [
                    'label' => 'Testimonial Text',
                ])
                ->addImage('background_image', [
                    'label' => 'Background image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                ])
                ->addText('overlay_color', [
                    'label' => 'Overlay Color',
                    'instructions' => 'Change default overlay color e.g. rgba(0,0,0,0.6)',
                ])
                ->addNumber('image_height', [
                    'label' => 'Image Height',
                ])
                ->addTrueFalse('background_attachment', [
                    'label' => 'Background Attachment Fixed',
                ])
            ->endGroup();

        return $blockSingleTestimonialParallax->build();
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
