<?php


namespace SajjadBoodaghi\StringUtils;

class Str
{

    /**
     * Determines if a given string contains a given substring
     *
     * @param   string  $haystack
     * @param   string|string[] $needles
     * @return  bool
     */
    public static function contains(string $haystack, $needles): bool {
        foreach((array) $needles as $needle) {
            if($needle != '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }


    /**
     * Determines if a given string contains all array values
     *
     * @param   string $haystack
     * @param   string[] $needles
     * @return  bool
     */
    public static function containsAll(String $haystack, array $needles): Bool {
        foreach($needles as $needle) {
            if(!static::contains($haystack, $needle)) {
                return false;
            }
        }
        return true;
    }
}