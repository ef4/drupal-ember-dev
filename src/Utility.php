<?php

/**
 * @file
 * Contains \Drupal\ember\Utility.
 */

namespace Drupal\ember;

class Utility {
    // Implement's Javascript's standard encodeURIComponent function.
    public static function encodeURIComponent($str) {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        return strtr(rawurlencode($str), $revert);
    }
}
