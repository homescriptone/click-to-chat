<?php

namespace Homescriptone\ClickToChatWhatsapp\Tags;
use Homescriptone\ClickToChatWhatsapp\Utils\Box;
use Statamic\Tags\Tags;

class Clicktochat extends Tags
{
    /**
     * The {{ clicktochat }} tag.
     *
     * @return string|array
     */
    public function index()
    {
       return $this->get_widget();
    }


    private function get_widget() {
        $values = Box::get_values();

        if ( ! isset( $values ) || ! $values['display-widget'] ) {
            return;
        }
        
       // dd( $values );

        ob_start();
        ?>

        <?php
        return ob_get_clean();
    }



    private function create_link( $app_name = "whatsapp" ) {

    }
}