<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockBannerVideo1 extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Block Banner Video1';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Display a video banner with heading and subtitle.';

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
        'src' => 'embed-video',
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
    public $example = [];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'data' => $this->data(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $blockBannerVideo1 = new FieldsBuilder('block_banner_video1');

        $blockBannerVideo1
            ->addText('heading', [
                'label' => 'Heading Field',
            ])
            ->addTextarea('text', [
                'label' => 'Textarea Field',
                'rows' => '3',
                'new_lines' => 'br', // Possible values are 'wpautop', 'br', or ''.
            ])
            ->addImage('poster', [
                'label' => 'Poster Field',
                'wrapper' => [
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ])
            ->addRadio('video_source', [
                'choices' => [
                    'file' =>'File', 
                    'url' => 'URL'
                ],
                'wrapper' => [
                    'width' => '20',
                ],
                'layout' => 'horizontal',
                'return_format' => 'value'
            ])
            ->addFile('video', [
                'label' => 'Video File',
                'conditional_logic' => [
                    'field' => 'video_source',
                    'operator' => '==',
                    'value' => 'file',
                ],
                'wrapper' => [
                    'width' => '60',
                ],
                'return_format' => 'url',
            ])
            ->addUrl('video_url', [
                'instructions' => 'mp4 url',
                'conditional_logic' => [
                    'field' => 'video_source',
                    'operator' => '==',
                    'value' => 'url',
                ],
                'wrapper' => [
                    'width' => '60',
                ],
            ]);

        return $blockBannerVideo1->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function data()
    {
        return [
            'heading' => get_field('heading'),
            'text' => get_field('text'),
            'video_source' => get_field('video_source'),
            'video' => get_field('video'),
            'video_url' => get_field('video_url'),
            'poster' => get_field('poster')
        ];
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
