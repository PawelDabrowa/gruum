<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FieldOffersDetails extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldOffersDetails = new FieldsBuilder('field_offers_details');

        $fieldOffersDetails
            ->setLocation('post_type', '==', 'offers');

        $fieldOffersDetails
            ->addText('offer_title', [
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('offer_subtitle', [
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('offer_type', [
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addText('offer_snippet', [
                'wrapper' => [
                    'width' => '25',
                ],
            ])
            ->addTextarea('offer_descritpion', [
                'wrapper' => [
                    'width' => '50',
                ],
                'rows' => '8',
                'new_lines' => 'br',
            ])
            ->addGallery('gallery', [
                'wrapper' => [
                    'width' => '50',
                ],
                'return_format' => 'array',
            ])
            ->addRadio('show_offer_price', [
                'choices' => ['no' => 'No', 'yes' => 'Yes'],
                'wrapper' => [
                    'width' => '15',
                ],
                'layout' => 'horizontal',
            ])
            ->addText('offer_price', [
                'conditional_logic' => [
                    'field' => 'show_offer_price',
                    'operator' => '==',
                    'value' => 'yes',
                ],
                'wrapper' => [
                    'width' => '10',
                ],
            ])
            ->addText('per_person_night', [
                'label' => 'Per Person / Night',
                'conditional_logic' => [
                    'field' => 'show_offer_price',
                    'operator' => '==',
                    'value' => 'yes',
                ],
                'wrapper' => [
                    'width' => '10',
                ],
            ])
            ->addRadio('enable_read_more_popup', [
                'choices' => ['no' => 'No', 'yes' => 'Yes'],
                'wrapper' => [
                    'width' => '15',
                ],
                'layout' => 'horizontal',
            ])
            ->addText('read_more_button_text', [
                'conditional_logic' => [
                    'field' => 'enable_read_more_popup',
                    'operator' => '==',
                    'value' => 'yes',
                ],
                'wrapper' => [
                    'width' => '15',
                ],
                'placeholder' => 'Read more',
            ])
            ->addLink('button_link', [
                'wrapper' => [
                    'width' => '35',
                ],
                'return_format' => 'array',
            ]);

        return $fieldOffersDetails->build();
    }
}
