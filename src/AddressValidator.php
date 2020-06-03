<?php

namespace LinusU\Bitcoin;

class AddressValidator {
    static public function isValid($addr, $version = null) {
        if (empty($addr) ) {
            return false;
        }

        $validator = \Merkeleon\PhpCryptocurrencyAddressValidation\Validation::make('BTC');

        return $validator->validate($addr);
    }
}
