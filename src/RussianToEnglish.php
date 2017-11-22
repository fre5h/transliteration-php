<?php

declare(strict_types=1);
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fresh\Transliteration;

/**
 * Transliteration from Russian to English.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 *
 * @see http://www.ufms.spb.ru/desc/pravila-transliteracii-dind-1009.html
 */
class RussianToEnglish implements TransliteratorInterface
{
    /** @const array */
    private const RUSSIAN_TO_ENGLISH_RULES = [
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
        'ь' => '',
        'ы' => 'y',
        'ъ' => '',
        'э' => 'e',
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
        'Ь' => '',
        'Ы' => 'Y',
        'Ъ' => '',
        'Э' => 'E',
        'Ю' => 'Yu',
        'Я' => 'Ya',
        "'" => '',
    ];

    /**
     * @param string $russianText
     *
     * @return string
     */
    public static function transliterate(string $russianText): string
    {
        $transliteratedText = '';

        if (\mb_strlen($russianText) > 0) {
            $transliteratedText = \str_replace(
                \array_keys(self::RUSSIAN_TO_ENGLISH_RULES),
                \array_values(self::RUSSIAN_TO_ENGLISH_RULES),
                $russianText
            );
        }

        return $transliteratedText;
    }
}
