<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

// class GalleryFilterModal extends Field
// {
//     /**
//      * The option page menu name.
//      *
//      * @var string
//      */
//     public $name = 'Gallery';

//     /**
//      * The option page document title.
//      *
//      * @var string
//      */
//     public $title = 'Gallery Filter Modal | Options';

//     /**
//      * The option page menu position.
//      *
//      * @var int
//      */
//     public $position = '26';

//     /**
//      * The dash icon.
//      *
//      * @var string|array
//      */
//     public $icon = 'dashicons-format-gallery';

//     /**
//      * The option page field group.
//      *
//      * @return array
//      */
//     public function fields()
//     {
//         $galleryFilterModal = new FieldsBuilder('gallery_filter_modal');

//         $galleryFilterModal
//             ->addText('headline')
//             ->addRepeater('gallery', [
//                 'button_label' => 'Add Item',
//                 'layout' => 'table',
//             ])
//                 ->addImage('image', [
//                     'return_format' => 'array',
//                     'preview_size' => 'thumbnail',
//                 ])
//                 ->addRadio('image_label', [
//                     'choices' => ['rooms' => 'Rooms', 'eat' => 'Eat', 'drink' => 'Drink', 'events' => 'Events'],
//                 ])
//             ->endRepeater();

//         return $galleryFilterModal->build();
//     }
// }
