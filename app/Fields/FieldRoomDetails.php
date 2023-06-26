<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FieldRoomDetails extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldRoomDetails = new FieldsBuilder('field_room_details');

        $fieldRoomDetails
            ->setLocation('post_type', '==', 'rooms');

        $fieldRoomDetails
            ->addText('room_title', [
                'label' => 'Room Title',
                'wrapper' => [
                    'width' => '30',
                ],
            ])
            ->addText('room_snippet', [
                'label' => 'Room Snippet',
                'wrapper' => [
                    'width' => '70',
                ],
            ])
            ->addWysiwyg('room_description',[
                'label' => 'Room Description',
                'wrapper' => [
                    'width' => '50'
                ],
            ])
            ->addGallery('gallery', [
                'label' => 'Gallery Slider',
                'wrapper' => [
                    'width' => '50'
                ],
                'return_format' => 'array',
            ])
            ->addTab('price_and_book', [
                'label' => 'Slider CTA layout (price and book)',
                'placement' => 'top_aligned',
            ])
            ->addText('room_price', [
                'label' => 'Room Price',
                'wrapper' => [
                    'width' => '20',
                ],
            ])
            ->addLink('button_link', [
                'label' => 'Button Link',
                'wrapper' => [
                    'width' => '30',
                ],
            ])
            ->addTab('read_more', [
                'label' => 'Slider CTA layout (read more)',
                'placement' => 'top_aligned',
            ])
            ->addText('read_more_button_text', [
                'label' => 'Read More Button Text',
                'instructions' => 'default is Read more',
                'wrapper' => [
                    'width' => '20',
                ],
                'placeholder' => 'Read more',
            ])
            ->addTrueFalse('open_post', [
                'label' => 'Open Post',
                'instructions' => 'show room page or in modal',
                'wrapper' => [
                    'width' => '30',
                ],
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Open modal',
                'ui_off_text' => 'Open page',
            ]);

        return $fieldRoomDetails->build();
    }
}
