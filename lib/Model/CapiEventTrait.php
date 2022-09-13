<?php

namespace SnapBusinessSDK\Model;

use SnapBusinessSDK\Util\CapiHash;

Trait CapiEventTrait {

    public function setEmail($unhashed_email) {
        $this->setHashedEmail(CapiHash::normAndHashStr($unhashed_email));
        return $this;
    }

    public function setMobileAdId($unhashed_mobile_ad_id) {
        $this->setHashedMobileAdId(CapiHash::normAndHashStr($unhashed_mobile_ad_id));
        return  $this;
    }

    public function setIdfv($unhashed_idfv) {
        $this->setHashedIdfv(CapiHash::normAndHashStr($unhashed_idfv));
        return $this;
    }

    public function setPhoneNumber($unhashed_phone_number) {
        $this->setHashedPhoneNumber(CapiHash::normAndHashPhoneNum($unhashed_phone_number));
        return $this;
    }

    public function setIpAddress($unhashed_ip_address) {
        $this->setHashedIpAddress(CapiHash::normAndHashStr($unhashed_ip_address));
        return $this;
    }

    public function setFirstName($unhashed_first_name) {
        $this->setHashedFirstNameSha(CapiHash::normAndHashStr($unhashed_first_name));
        $this->setHashedFirstNameSdx(CapiHash::normAndSoundex($unhashed_first_name));
        return $this;
    }

    public function setMiddleName($unhashed_middle_name) {
        $this->setHashedMiddleNameSha(CapiHash::normAndHashStr($unhashed_middle_name));
        $this->setHashedMiddleNameSdx(CapiHash::normAndSoundex($unhashed_middle_name));
        return $this;
    }

    public function setLastName($unhashed_last_name) {
        $this->setHashedLastNameSha(CapiHash::normAndHashStr($unhashed_last_name));
        $this->setHashedLastNameSdx(CapiHash::normAndSoundex($unhashed_last_name));
        return $this;
    }

    public function setCity($unhashed_city) {
        $this->setHashedCitySha(CapiHash::normAndHashStr($unhashed_city));
        $this->setHashedCitySdx(CapiHash::normAndSoundex($unhashed_city));
        return $this;
    }

    public function setState($unhashed_state) {
        $this->etHashedStateSha(CapiHash::normAndHashStr($unhashed_state));
        $this->setHashedStateSdx(CapiHash::normAndSoundex($unhashed_state));
        return $this;
    }

    public function setZip($unhashed_zip) {
        $this->setHashedZip(CapiHash::normAndHashStr($unhashed_zip));
        return $this;
    }

    public function setDob($unhashed_dob_str) {
        // TODO Parse and hash DD and MM after the format of $unhashed_dob_str is finalized
        return $this;
    }
}