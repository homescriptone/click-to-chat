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
        
        $app_name = $values['widget-app'];
        $position = $values['widget-position'];
        $phone_number = $values['phone-number'];
        $message = $values['message'];

        $img_url = "";

        if ( $app_name == "whatsapp" ) {
            $img_url = 'homescriptone/click-to-chat/img/whatsapp.png';
        }
       
        ob_start();
        ?>
            <style>
                .whatsapp-icon-right {
                    position: fixed;
                    bottom: 12%;
                    right: 20px;
                }

                .whatsapp-icon-left {
                    position: fixed;
                    bottom: 12%;
                    left: 20px;
                }

                .hs-click-to-chat-whatsapp-button{
                    width : 200px;
                }
            </style>
            <a href="https://wa.me/<?= $phone_number; ?>?text=<?= $message; ?>" target="_blank" class="icons">  
                <img src="<?= asset( $img_url ); ?>" alt="WhatsApp Icon" class="hs-click-to-chat-whatsapp-button whatsapp-icon-<?= $position; ?>">
            </a>
        <?php
        return ob_get_clean();
    }
}