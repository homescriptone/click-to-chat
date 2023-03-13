<?php

namespace Homescriptone\ClickToChatWhatsapp\Utils;
use Homescriptone\ClickToChatWhatsapp\Blueprint\Formulus;
use Homescriptone\ClickToChatWhatsapp\MetaValues;

class Box{


    public static function get_values() {
        $blueprint = Formulus::getBlueprint();
        $fields = $blueprint->fields();
        $fields = $fields->preProcess();
        $values = new MetaValues( $fields );
        return $values->values();
    }

}