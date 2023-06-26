<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

// class OurItems extends Field
// {
//     /**
//      * The option page menu name.
//      *
//      * @var string
//      */
//     public $name = 'Our Items';

//     /**
//      * The option page document title.
//      *
//      * @var string
//      */
//     public $title = 'Our Items | Options';

//     /**
//      * The option page menu position.
//      *
//      * @var int
//      */
//     public $position = '27';

//     /**
//      * The dash icon.
//      *
//      * @var string|array
//      */
//     public $icon = 'dashicons-screenoptions';

//     /**
//      * The option page field group.
//      *
//      * @return array
//      */
//     public function fields()
//     {
//         $ourItems = new FieldsBuilder('our_items');

//         $ourItems
//         ->addRepeater('item', [
//             'layout' => 'table',
//         ])
//             ->addImage('item_image', [
//                 'return_format' => 'url',
//             ])
//             ->addText('title')
//             ->addRadio('brand', [
//                 'choices' => ['azzuro' => 'Azzuro', 'julius' => 'Julius Meinl'],
//             ])
//             ->addRadio('item_type', [
//                 'choices' => ['light' => 'Light Roast', 'moderate' => 'Moderate Roast', 'heavy' => 'Heavy Roast', 'decaf' => 'Decaf'],
//             ])
//             ->addTextarea('content')
//             ->addLink('the_button')
//         ->endRepeater();

//         return $ourItems->build();
//     }
// }
