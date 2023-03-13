<?php

namespace Homescriptone\ClickToChatWhatsapp\Blueprint;

use Statamic\Facades\Blueprint;
use Statamic\Fields\Blueprint as FieldsBlueprint;

class Formulus
{
    public static function getBlueprint(): FieldsBlueprint
    {

        return Blueprint::makeFromSections([
            'main' => [
                'display' => 'Main',
                'fields' => [
                    'display-widget' => [
                        'type' => 'toggle',
                        'default' => true,
                        'display' => __('Display the widget :'),
                        'instructions' => __('Display the Click To Chat widget on your website pages.')
                    ],
                    'widget-app' => [
                        'options' => [
                            'whatsapp' => __('WhatsApp / WhatsApp Business')
                        ],
                        'clearable' => false,
                        'multiple' => false,
                        'searchable' => false,
                        'taggable' => false,
                        'push_tags' => false,
                        'cast_booleans' => false,
                        'type' => 'select',
                        'display' => __('Widget App :'),
                        'default' => 'whatsapp',
                        'instructions' => __('Choose the application to use for the Click To Chat widget.'),
                    ],
                    'message' => [
                        'type' => 'textarea',
                        'instructions' => __('Define the default message, to send when using the Click To Chat widget.'),
                        'display' => __('Message :'),
                    ],
                    'phone-number' => [
                        'input_type' => 'tel',
                        'type' => 'text',
                        'display' => __('Phone Number :'),
                        'width' => 100,
                        'instructions' => __('Define the phone number, where you can be contacted. Prefix the phone number with the country code ( don\'t add 00 or + ). Eg: 441632960527')
                    ],
                    'widget-position' => [
                        'options' => [
                            'left' => __('Left'),
                            'right' => __('Right'),
                        ],
                        'clearable' => false,
                        'multiple' => false,
                        'searchable' => false,
                        'taggable' => false,
                        'push_tags' => false,
                        'cast_booleans' => false,
                        'type' => 'select',
                        'display' => __('Widget Position :'),
                        'default' => 'left',
                        'instructions' => __('Choose the position where the widget will be displayed.'),
                    ],
                    
                ],
            ],
        ]);
    }
}
