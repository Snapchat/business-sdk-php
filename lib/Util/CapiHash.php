<?php

namespace SnapBusinessSDK\Util;

class CapiHash
{
    public static function normAndHashStr($data) {
        if (is_null($data) || preg_match('/^[A-Fa-f0-9]{64}$/', trim($data))) {
            return $data;
        }
        return hash('sha256', strtolower(trim($data)), false);
    }

    public static function normAndSoundex($data) {
        if (is_null($data) || preg_match('/^[A-Z]\d{3}$/', trim($data))) {
            return $data;
        }
        return soundex(trim($data));
    }

    public static function normAndHashPhoneNum($data) {
        if (is_null($data) || preg_match('/^[A-Fa-f0-9]{64}$/', trim($data))) {
            return $data;
        }

        $ptn1 = '/^((\+|00)(\d+)[\-\s])?0?(.+)/';
        $ptn2 = '/[^\d.]/';
        if ( 1 === preg_match($ptn1, trim($data), $matches1)) {
            $countryCode = $matches1[3];
            $num = $matches1[4];

            if (!empty($countryCode)) {
                $countryCode = preg_replace($ptn2, '', $countryCode);
            }

            if (!empty($num)) {
                $num = preg_replace($ptn2, '', $num);
            }

            if (empty($countryCode)) {
                $countryCode = '1';
            }

            if (!empty($num)) {
                return $countryCode . $num;
            }
        }
        return null;
    }
}