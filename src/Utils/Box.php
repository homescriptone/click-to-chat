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


    private function get_worldwide_country_code() {
        return array(
            'AD' => array(
                'name' => 'ANDORRA',
                'code' => '376',
            ),
            'AE' => array(
                'name' => 'UNITED ARAB EMIRATES',
                'code' => '971',
            ),
            'AF' => array(
                'name' => 'AFGHANISTAN',
                'code' => '93',
            ),
            'AG' => array(
                'name' => 'ANTIGUA AND BARBUDA',
                'code' => '1268',
            ),
            'AI' => array(
                'name' => 'ANGUILLA',
                'code' => '1264',
            ),
            'AL' => array(
                'name' => 'ALBANIA',
                'code' => '355',
            ),
            'AM' => array(
                'name' => 'ARMENIA',
                'code' => '374',
            ),
            'AN' => array(
                'name' => 'NETHERLANDS ANTILLES',
                'code' => '599',
            ),
            'AO' => array(
                'name' => 'ANGOLA',
                'code' => '244',
            ),
            'AQ' => array(
                'name' => 'ANTARCTICA',
                'code' => '672',
            ),
            'AR' => array(
                'name' => 'ARGENTINA',
                'code' => '54',
            ),
            'AS' => array(
                'name' => 'AMERICAN SAMOA',
                'code' => '1684',
            ),
            'AT' => array(
                'name' => 'AUSTRIA',
                'code' => '43',
            ),
            'AU' => array(
                'name' => 'AUSTRALIA',
                'code' => '61',
            ),
            'AW' => array(
                'name' => 'ARUBA',
                'code' => '297',
            ),
            'AZ' => array(
                'name' => 'AZERBAIJAN',
                'code' => '994',
            ),
            'BA' => array(
                'name' => 'BOSNIA AND HERZEGOVINA',
                'code' => '387',
            ),
            'BB' => array(
                'name' => 'BARBADOS',
                'code' => '1246',
            ),
            'BD' => array(
                'name' => 'BANGLADESH',
                'code' => '880',
            ),
            'BE' => array(
                'name' => 'BELGIUM',
                'code' => '32',
            ),
            'BF' => array(
                'name' => 'BURKINA FASO',
                'code' => '226',
            ),
            'BG' => array(
                'name' => 'BULGARIA',
                'code' => '359',
            ),
            'BH' => array(
                'name' => 'BAHRAIN',
                'code' => '973',
            ),
            'BI' => array(
                'name' => 'BURUNDI',
                'code' => '257',
            ),
            'BJ' => array(
                'name' => 'BENIN',
                'code' => '229',
            ),
            'BL' => array(
                'name' => 'SAINT BARTHELEMY',
                'code' => '590',
            ),
            'BM' => array(
                'name' => 'BERMUDA',
                'code' => '1441',
            ),
            'BN' => array(
                'name' => 'BRUNEI DARUSSALAM',
                'code' => '673',
            ),
            'BO' => array(
                'name' => 'BOLIVIA',
                'code' => '591',
            ),
            'BR' => array(
                'name' => 'BRAZIL',
                'code' => '55',
            ),
            'BS' => array(
                'name' => 'BAHAMAS',
                'code' => '1242',
            ),
            'BT' => array(
                'name' => 'BHUTAN',
                'code' => '975',
            ),
            'BW' => array(
                'name' => 'BOTSWANA',
                'code' => '267',
            ),
            'BY' => array(
                'name' => 'BELARUS',
                'code' => '375',
            ),
            'BZ' => array(
                'name' => 'BELIZE',
                'code' => '501',
            ),
            'CA' => array(
                'name' => 'CANADA',
                'code' => '1',
            ),
            'CC' => array(
                'name' => 'COCOS (KEELING) ISLANDS',
                'code' => '61',
            ),
            'CD' => array(
                'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
                'code' => '243',
            ),
            'CF' => array(
                'name' => 'CENTRAL AFRICAN REPUBLIC',
                'code' => '236',
            ),
            'CG' => array(
                'name' => 'CONGO',
                'code' => '242',
            ),
            'CH' => array(
                'name' => 'SWITZERLAND',
                'code' => '41',
            ),
            'CI' => array(
                'name' => 'COTE D IVOIRE',
                'code' => '225',
            ),
            'CK' => array(
                'name' => 'COOK ISLANDS',
                'code' => '682',
            ),
            'CL' => array(
                'name' => 'CHILE',
                'code' => '56',
            ),
            'CM' => array(
                'name' => 'CAMEROON',
                'code' => '237',
            ),
            'CN' => array(
                'name' => 'CHINA',
                'code' => '86',
            ),
            'CO' => array(
                'name' => 'COLOMBIA',
                'code' => '57',
            ),
            'CR' => array(
                'name' => 'COSTA RICA',
                'code' => '506',
            ),
            'CU' => array(
                'name' => 'CUBA',
                'code' => '53',
            ),
            'CV' => array(
                'name' => 'CAPE VERDE',
                'code' => '238',
            ),
            'CX' => array(
                'name' => 'CHRISTMAS ISLAND',
                'code' => '61',
            ),
            'CY' => array(
                'name' => 'CYPRUS',
                'code' => '357',
            ),
            'CZ' => array(
                'name' => 'CZECH REPUBLIC',
                'code' => '420',
            ),
            'DE' => array(
                'name' => 'GERMANY',
                'code' => '49',
            ),
            'DJ' => array(
                'name' => 'DJIBOUTI',
                'code' => '253',
            ),
            'DK' => array(
                'name' => 'DENMARK',
                'code' => '45',
            ),
            'DM' => array(
                'name' => 'DOMINICA',
                'code' => '1767',
            ),
            'DO' => array(
                'name' => 'DOMINICAN REPUBLIC',
                'code' => '1809',
            ),
            'DZ' => array(
                'name' => 'ALGERIA',
                'code' => '213',
            ),
            'EC' => array(
                'name' => 'ECUADOR',
                'code' => '593',
            ),
            'EE' => array(
                'name' => 'ESTONIA',
                'code' => '372',
            ),
            'EG' => array(
                'name' => 'EGYPT',
                'code' => '20',
            ),
            'ER' => array(
                'name' => 'ERITREA',
                'code' => '291',
            ),
            'ES' => array(
                'name' => 'SPAIN',
                'code' => '34',
            ),
            'ET' => array(
                'name' => 'ETHIOPIA',
                'code' => '251',
            ),
            'FI' => array(
                'name' => 'FINLAND',
                'code' => '358',
            ),
            'FJ' => array(
                'name' => 'FIJI',
                'code' => '679',
            ),
            'FK' => array(
                'name' => 'FALKLAND ISLANDS (MALVINAS)',
                'code' => '500',
            ),
            'FM' => array(
                'name' => 'MICRONESIA, FEDERATED STATES OF',
                'code' => '691',
            ),
            'FO' => array(
                'name' => 'FAROE ISLANDS',
                'code' => '298',
            ),
            'FR' => array(
                'name' => 'FRANCE',
                'code' => '33',
            ),
            'GA' => array(
                'name' => 'GABON',
                'code' => '241',
            ),
            'GB' => array(
                'name' => 'UNITED KINGDOM',
                'code' => '44',
            ),
            'GD' => array(
                'name' => 'GRENADA',
                'code' => '1473',
            ),
            'GE' => array(
                'name' => 'GEORGIA',
                'code' => '995',
            ),
            'GH' => array(
                'name' => 'GHANA',
                'code' => '233',
            ),
            'GI' => array(
                'name' => 'GIBRALTAR',
                'code' => '350',
            ),
            'GL' => array(
                'name' => 'GREENLAND',
                'code' => '299',
            ),
            'GM' => array(
                'name' => 'GAMBIA',
                'code' => '220',
            ),
            'GN' => array(
                'name' => 'GUINEA',
                'code' => '224',
            ),
            'GQ' => array(
                'name' => 'EQUATORIAL GUINEA',
                'code' => '240',
            ),
            'GR' => array(
                'name' => 'GREECE',
                'code' => '30',
            ),
            'GT' => array(
                'name' => 'GUATEMALA',
                'code' => '502',
            ),
            'GU' => array(
                'name' => 'GUAM',
                'code' => '1671',
            ),
            'GW' => array(
                'name' => 'GUINEA-BISSAU',
                'code' => '245',
            ),
            'GY' => array(
                'name' => 'GUYANA',
                'code' => '592',
            ),
            'HK' => array(
                'name' => 'HONG KONG',
                'code' => '852',
            ),
            'HN' => array(
                'name' => 'HONDURAS',
                'code' => '504',
            ),
            'HR' => array(
                'name' => 'CROATIA',
                'code' => '385',
            ),
            'HT' => array(
                'name' => 'HAITI',
                'code' => '509',
            ),
            'HU' => array(
                'name' => 'HUNGARY',
                'code' => '36',
            ),
            'ID' => array(
                'name' => 'INDONESIA',
                'code' => '62',
            ),
            'IE' => array(
                'name' => 'IRELAND',
                'code' => '353',
            ),
            'IL' => array(
                'name' => 'ISRAEL',
                'code' => '972',
            ),
            'IM' => array(
                'name' => 'ISLE OF MAN',
                'code' => '44',
            ),
            'IN' => array(
                'name' => 'INDIA',
                'code' => '91',
            ),
            'IQ' => array(
                'name' => 'IRAQ',
                'code' => '964',
            ),
            'IR' => array(
                'name' => 'IRAN, ISLAMIC REPUBLIC OF',
                'code' => '98',
            ),
            'IS' => array(
                'name' => 'ICELAND',
                'code' => '354',
            ),
            'IT' => array(
                'name' => 'ITALY',
                'code' => '39',
            ),
            'JM' => array(
                'name' => 'JAMAICA',
                'code' => '1876',
            ),
            'JO' => array(
                'name' => 'JORDAN',
                'code' => '962',
            ),
            'JP' => array(
                'name' => 'JAPAN',
                'code' => '81',
            ),
            'KE' => array(
                'name' => 'KENYA',
                'code' => '254',
            ),
            'KG' => array(
                'name' => 'KYRGYZSTAN',
                'code' => '996',
            ),
            'KH' => array(
                'name' => 'CAMBODIA',
                'code' => '855',
            ),
            'KI' => array(
                'name' => 'KIRIBATI',
                'code' => '686',
            ),
            'KM' => array(
                'name' => 'COMOROS',
                'code' => '269',
            ),
            'KN' => array(
                'name' => 'SAINT KITTS AND NEVIS',
                'code' => '1869',
            ),
            'KP' => array(
                'name' => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
                'code' => '850',
            ),
            'KR' => array(
                'name' => 'KOREA REPUBLIC OF',
                'code' => '82',
            ),
            'KW' => array(
                'name' => 'KUWAIT',
                'code' => '965',
            ),
            'KY' => array(
                'name' => 'CAYMAN ISLANDS',
                'code' => '1345',
            ),
            'KZ' => array(
                'name' => 'KAZAKSTAN',
                'code' => '7',
            ),
            'LA' => array(
                'name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
                'code' => '856',
            ),
            'LB' => array(
                'name' => 'LEBANON',
                'code' => '961',
            ),
            'LC' => array(
                'name' => 'SAINT LUCIA',
                'code' => '1758',
            ),
            'LI' => array(
                'name' => 'LIECHTENSTEIN',
                'code' => '423',
            ),
            'LK' => array(
                'name' => 'SRI LANKA',
                'code' => '94',
            ),
            'LR' => array(
                'name' => 'LIBERIA',
                'code' => '231',
            ),
            'LS' => array(
                'name' => 'LESOTHO',
                'code' => '266',
            ),
            'LT' => array(
                'name' => 'LITHUANIA',
                'code' => '370',
            ),
            'LU' => array(
                'name' => 'LUXEMBOURG',
                'code' => '352',
            ),
            'LV' => array(
                'name' => 'LATVIA',
                'code' => '371',
            ),
            'LY' => array(
                'name' => 'LIBYAN ARAB JAMAHIRIYA',
                'code' => '218',
            ),
            'MA' => array(
                'name' => 'MOROCCO',
                'code' => '212',
            ),
            'MC' => array(
                'name' => 'MONACO',
                'code' => '377',
            ),
            'MD' => array(
                'name' => 'MOLDOVA, REPUBLIC OF',
                'code' => '373',
            ),
            'ME' => array(
                'name' => 'MONTENEGRO',
                'code' => '382',
            ),
            'MF' => array(
                'name' => 'SAINT MARTIN',
                'code' => '1599',
            ),
            'MG' => array(
                'name' => 'MADAGASCAR',
                'code' => '261',
            ),
            'MH' => array(
                'name' => 'MARSHALL ISLANDS',
                'code' => '692',
            ),
            'MK' => array(
                'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
                'code' => '389',
            ),
            'ML' => array(
                'name' => 'MALI',
                'code' => '223',
            ),
            'MM' => array(
                'name' => 'MYANMAR',
                'code' => '95',
            ),
            'MN' => array(
                'name' => 'MONGOLIA',
                'code' => '976',
            ),
            'MO' => array(
                'name' => 'MACAU',
                'code' => '853',
            ),
            'MP' => array(
                'name' => 'NORTHERN MARIANA ISLANDS',
                'code' => '1670',
            ),
            'MR' => array(
                'name' => 'MAURITANIA',
                'code' => '222',
            ),
            'RS' => array(
                'name' => 'SERBIA',
                'code' => '381',
            ),
            'RU' => array(
                'name' => 'RUSSIAN FEDERATION',
                'code' => '7',
            ),
            'RW' => array(
                'name' => 'RWANDA',
                'code' => '250',
            ),
            'SA' => array(
                'name' => 'SAUDI ARABIA',
                'code' => '966',
            ),
            'SB' => array(
                'name' => 'SOLOMON ISLANDS',
                'code' => '677',
            ),
            'SC' => array(
                'name' => 'SEYCHELLES',
                'code' => '248',
            ),
            'SD' => array(
                'name' => 'SUDAN',
                'code' => '249',
            ),
            'SE' => array(
                'name' => 'SWEDEN',
                'code' => '46',
            ),
            'SG' => array(
                'name' => 'SINGAPORE',
                'code' => '65',
            ),
            'SH' => array(
                'name' => 'SAINT HELENA',
                'code' => '290',
            ),
            'SI' => array(
                'name' => 'SLOVENIA',
                'code' => '386',
            ),
            'SK' => array(
                'name' => 'SLOVAKIA',
                'code' => '421',
            ),
            'SL' => array(
                'name' => 'SIERRA LEONE',
                'code' => '232',
            ),
            'SM' => array(
                'name' => 'SAN MARINO',
                'code' => '378',
            ),
            'SN' => array(
                'name' => 'SENEGAL',
                'code' => '221',
            ),
            'SO' => array(
                'name' => 'SOMALIA',
                'code' => '252',
            ),
            'SR' => array(
                'name' => 'SURINAME',
                'code' => '597',
            ),
            'ST' => array(
            ),
            'TZ' => array(
                'name' => 'TANZANIA, UNITED REPUBLIC OF',
                'code' => '255',
            ),
            'UA' => array(
                'name' => 'UKRAINE',
                'code' => '380',
            ),
            'UG' => array(
                'name' => 'UGANDA',
                'code' => '256',
            ),
            'US' => array(
                'name' => 'UNITED STATES',
                'code' => '1',
            ),
            'UY' => array(
                'name' => 'URUGUAY',
                'code' => '598',
            ),
            'UZ' => array(
                'name' => 'UZBEKISTAN',
                'code' => '998',
            ),
            'VA' => array(
                'name' => 'HOLY SEE (VATICAN CITY STATE)',
                'code' => '39',
            ),
            'VC' => array(
                'name' => 'SAINT VINCENT AND THE GRENADINES',
                'code' => '1784',
            ),
            'VE' => array(
                'name' => 'VENEZUELA',
                'code' => '58',
            ),
            'VG' => array(
                'name' => 'VIRGIN ISLANDS, BRITISH',
                'code' => '1284',
            ),
            'VI' => array(
                'name' => 'VIRGIN ISLANDS, U.S.',
                'code' => '1340',
            ),
            'VN' => array(
                'name' => 'VIET NAM',
                'code' => '84',
            ),
            'VU' => array(
                'name' => 'VANUATU',
                'code' => '678',
            ),
            'WF' => array(
                'name' => 'WALLIS AND FUTUNA',
                'code' => '681',
            ),
            'WS' => array(
                'name' => 'SAMOA',
                'code' => '685',
            ),
            'XK' => array(
                'name' => 'KOSOVO',
                'code' => '381',
            ),
            'YE' => array(
                'name' => 'YEMEN',
                'code' => '967',
            ),
            'YT' => array(
                'name' => 'MAYOTTE',
                'code' => '262',
            ),
            'ZA' => array(
                'name' => 'SOUTH AFRICA',
                'code' => '27',
            ),
            'ZM' => array(
                'name' => 'ZAMBIA',
                'code' => '260',
            ),
            'ZW' => array(
                'name' => 'ZIMBABWE',
                'code' => '263',
            ),
        );
    }
    
    
    public function get_country_town_code( $town ) {
        $country = $this->get_worldwide_country_code();
        foreach ( $country as $country_name => $indicator ) {
            if ( $town == $country_name ) {
                $country_code = $indicator['code'];
    
                return $country_code;
            }
        }
    
          return null;
    }
    
    function get_country_name( $town ) {
        $code_country_code = $this->get_country_town_code( $town );
    
        $country = $this->get_worldwide_country_code();
        foreach ( $country as $country_name => $indicator ) {
            if ( $code_country_code == $indicator['code'] ) {
                return $indicator['name'];
            }
        }
        return null;
    }
    
    public function split_space_in_numbers( $phone_number ) {
        if ( ! empty( $phone_number ) || null != $phone_number ) {
            $phone_number = preg_replace( '/(\s+)|(\W+)/', '', $phone_number );
        }
        return $phone_number;
    }
    

}