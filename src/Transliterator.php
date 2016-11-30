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
 * Transliterator.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 */
class Transliterator
{
    /**
     * @param string $ukrainianText
     *
     * @return string
     */
    public function ukToEn($ukrainianText)
    {
        return UkrainianToEnglish::transliterate($ukrainianText);
    }

    /**
     * @param string $russianText
     *
     * @return string
     */
    public function ruToEn($russianText)
    {
        return RussianToEnglish::transliterate($russianText);
    }
}
