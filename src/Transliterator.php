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
 * Transliterator.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
class Transliterator
{
    /**
     * @param string $ukrainianText
     *
     * @return string
     */
    public function ukToEn(string $ukrainianText): string
    {
        return UkrainianToEnglish::transliterate($ukrainianText);
    }

    /**
     * @param string $russianText
     *
     * @return string
     */
    public function ruToEn(string $russianText): string
    {
        return RussianToEnglish::transliterate($russianText);
    }
}
