<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FieldMenuFilter extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $fieldMenuFilter = new FieldsBuilder('field_menu_filter');

        $fieldMenuFilter
            ->setLocation('post_type', '==', 'menu');

        $fieldMenuFilter
            ->addTextarea('text', [
                'required' => 1,
                'placeholder' => 'max 140 words',
                'maxlength' => '240',
                'rows' => '4',
            ])
            ->addText('price');

        return $fieldMenuFilter->build();
    }
}
