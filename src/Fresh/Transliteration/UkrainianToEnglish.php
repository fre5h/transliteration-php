<?php
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Transliteration;

/**
 * Transliteration from Ukrainian to English
 *
 * According to the rules of transliteration, that are described in the resolution
 * of the Cabinet of Ministers of Ukraine №55 dated January 27, 2010
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @see    http://zakon1.rada.gov.ua/laws/show/55-2010-%D0%BF
 */
class UkrainianToEnglish
{
    /**
     * @var array Rules of transliteration from Ukrainian to English
     */
    public static $ukrainianToEnglishRules = [
        ['А', 'A'],
        ['Б', 'B'],
        ['В', 'V'],
        ['Г', 'H'],
        ['Ґ', 'G'],
        ['Д', 'D'],
        ['Е', 'E'],
        ['Є', 'Ye'],
        ['Ж', 'Zh'],
        ['З', 'Z'],
        ['И', 'Y'],
        ['І', 'I'],
        ['Ї', 'Yi'],
        ['Й', 'Y'],
        ['К', 'K'],
        ['Л', 'L'],
        ['М', 'M'],
        ['Н', 'N'],
        ['О', 'O'],
        ['П', 'P'],
        ['Р', 'R'],
        ['С', 'S'],
        ['Т', 'T'],
        ['У', 'U'],
        ['Ф', 'F'],
        ['Х', 'Kh'],
        ['Ц', 'Ts'],
        ['Ч', 'Ch'],
        ['Ш', 'Sh'],
        ['Щ', 'Shch'],
        ['Ю', 'Yu'],
        ['Я', 'Ya'],
        ['а', 'a'],
        ['б', 'b'],
        ['в', 'v'],
        ['г', 'h'],
        ['ґ', 'g'],
        ['д', 'd'],
        ['е', 'e'],
        ['є', 'ie'],
        ['ж', 'zh'],
        ['з', 'z'],
        ['и', 'y'],
        ['і', 'i'],
        ['ї', 'i'],
        ['й', 'i'],
        ['к', 'k'],
        ['л', 'l'],
        ['м', 'm'],
        ['н', 'n'],
        ['о', 'o'],
        ['п', 'p'],
        ['р', 'r'],
        ['с', 's'],
        ['т', 't'],
        ['у', 'u'],
        ['ф', 'f'],
        ['х', 'kh'],
        ['ц', 'ts'],
        ['ч', 'ch'],
        ['ш', 'sh'],
        ['щ', 'shch'],
        ['ь', ''],
        ['ю', 'iu'],
        ['я', 'ia'],
        ['\'', '']
    ];

    /**
     * Transliterate Ukrainian text to English
     *
     * @param string $ukrainianText Ukrainian text
     *
     * @return string
     */
    public static function transliterate($ukrainianText)
    {
        $transliteratedText = '';

        if (mb_strlen($ukrainianText) > 0) {
            // If found "Zgh|zgh" exception then replace it
            if (self::checkForZghException($ukrainianText)) {
                $ukrainianText = str_replace(['Зг', 'зг'], ['Zgh', 'zgh'], $ukrainianText);
            }
            // Transliteration is doing by rendering each letter
            $transliteratedText = str_replace(
                array_keys(self::$ukrainianToEnglishRules),
                array_values(self::$ukrainianToEnglishRules),
                $ukrainianText
            );
        }

        return $transliteratedText;
    }

    /**
     * Check Ukrainian text for "Zgh|zgh" exception
     *
     * @param string $ukrainianText Ukrainian text
     *
     * @return bool
     */
    private static function checkForZghException($ukrainianText)
    {
        return (bool) mb_substr_count($ukrainianText, 'Зг') || (bool) mb_substr_count($ukrainianText, 'зг');
    }
}
