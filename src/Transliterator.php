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
    public function ukrToLat(string $ukrainianText): string
    {
        return UkrainianToLatin::transliterate($ukrainianText);
    }

    /**
     * @param string $russianText
     *
     * @return string
     */
    public function rusToLat(string $russianText): string
    {
        return RussianToLatin::transliterate($russianText);
    }
}
