<?php
/*
 * This file is part of the Transliteration library
 *
 * (c) Mykhailo Vilshansky <mvilshansky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Transliteration;

/**
 * Transliteration from Russian to English
 *
 * According to the rules of transliteration
 *
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 * @see    http://www.ufms.spb.ru/desc/pravila-transliteracii-dind-1009.html
 */
class RussianToEnglish implements TransliteratorInterface
{
    /**
     * @var array Rules of transliteration from Russian to English
     */
    private static $russianToEnglishRules = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sht',
        'ь' => '\'',
        'ы' => 'y',
        'ъ' => '\'',
        'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'Y',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'H',
        'Ц' => 'Ts',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Sht',
        'Ь' => '\'',
        'Ы' => 'Y',
        'Ъ' => '\'',
        'Ю' => 'Yu',
        'Я' => 'Ya',
        '\'' => ''
    ];

    /**
     * Transliterate Russian text to English
     *
     * @param string $russianText Russian text
     *
     * @return string
     */
    public static function transliterate($russianText)
    {
        $transliteratedText = '';

        if (mb_strlen($russianText) > 0) {
            // Transliteration is doing by rendering each letter
            $transliteratedText = str_replace(
                array_keys(self::$russianToEnglishRules),
                array_values(self::$russianToEnglishRules),
                $russianText
            );
        }

        return $transliteratedText;
    }
}
