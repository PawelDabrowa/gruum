<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BlockGalleryThingsToDoOverlay extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $blockGalleryThingsToDoOverlay = new FieldsBuilder('block_gallery_things_to_do_overlay');

        $blockGalleryThingsToDoOverlay
            ->setLocation('post_type', '==', 'gallery');

        $blockGalleryThingsToDoOverlay
            ->addTextarea('overlay_text', [
                'wrapper' => [
                    'width' => '50',
                ]
            ])
            ->addLink('overlay_button',[
                'wrapper' => [
                    'width' => '50',
                ]
            ]);

        return $blockGalleryThingsToDoOverlay->build();
    }
}
