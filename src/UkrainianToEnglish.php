<?php
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fresh\Transliteration;

/**
 * Transliteration from Ukrainian to English.
 *
 * According to the rules of transliteration, that are described in the resolution
 * of the Cabinet of Ministers of Ukraine №55 dated January 27, 2010.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 *
 * @see http://zakon1.rada.gov.ua/laws/show/55-2010-%D0%BF
 */
class UkrainianToEnglish implements TransliteratorInterface
{
    /** @const array<string, string> */
    private const UKRAINIAN_TO_ENGLISH_RULES = [
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'H',
        'Ґ' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Є' => 'Ye',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'Y',
        'І' => 'I',
        'Ї' => 'Yi',
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
        'Х' => 'Kh',
        'Ц' => 'Ts',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Shch',
        'Ь' => '',
        'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'h',
        'ґ' => 'g',
        'д' => 'd',
        'е' => 'e',
        'є' => 'ye',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'y',
        'і' => 'i',
        'ї' => 'yi',
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
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ь' => '',
        'ю' => 'yu',
        'я' => 'ya',
        '\'' => '',
    ];

    // only inside words
    private const VOWEL_EXCEPTIONS = [
        'є' => 'ie',
        'ї' => 'i',
        'й' => 'i',
        'ю' => 'iu',
        'я' => 'ia',
    ];

    /**
     * @param string $textToTransliterate
     *
     * @return string
     */
    public static function transliterate(string $textToTransliterate): string
    {
        $transliteratedText = '';

        if ('' !== $textToTransliterate) {
            if (self::checkForZghException($textToTransliterate)) {
                $textToTransliterate = \str_replace(['Зг', 'зг'], ['Zgh', 'zgh'], $textToTransliterate);
            }

            if (1 === \preg_match('/[єюїйя]/u', $textToTransliterate)) {
                $textToTransliterate = self::processExceptionsForVowelsInsideWords($textToTransliterate);
            }

            $transliteratedText = \str_replace(
                \array_keys(self::UKRAINIAN_TO_ENGLISH_RULES),
                \array_values(self::UKRAINIAN_TO_ENGLISH_RULES),
                $textToTransliterate
            );
        }

        return $transliteratedText;
    }

    /**
     * @param string $textToTransliterate
     *
     * @return string
     */
    private static function processExceptionsForVowelsInsideWords(string $textToTransliterate): string
    {
        $characters = mb_str_split($textToTransliterate);
        $vowelsWithExceptions = \array_keys(self::VOWEL_EXCEPTIONS);
        $ukrainianLetters = \array_keys(self::UKRAINIAN_TO_ENGLISH_RULES);

        foreach ($characters as $i => $character) {
            // Check that vowel inside word
            if (0 !== $i && \in_array($character, $vowelsWithExceptions, true) && \in_array($characters[$i - 1], $ukrainianLetters, true)) {
                $characters[$i] = self::VOWEL_EXCEPTIONS[$character];
            }
        }

        return \implode('', $characters);
    }

    /**
     * @param string $textToTransliterate
     *
     * @return bool
     */
    private static function checkForZghException(string $textToTransliterate): bool
    {
        return (bool) \mb_substr_count($textToTransliterate, 'Зг') || (bool) \mb_substr_count($textToTransliterate, 'зг');
    }
}
