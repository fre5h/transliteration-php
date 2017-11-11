<?php

declare(strict_types=1);
/*
 * This file is part of the Transliteration library
 *
 * (c) Artem Genvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Fresh\Transliteration;

use Fresh\Transliteration\Transliterator;
use PHPUnit\Framework\TestCase;

/**
 * RussianToEnglish Transliterator Test.
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 */
class RussianToEnglishTest extends TestCase
{
    protected $transliterator;

    public function setUp()
    {
        $this->transliterator = new Transliterator();
    }

    /**
     * @dataProvider alphabetProvider
     */
    public function testTransliterationFromRussianToEnglish(string $russianText, string $transliteratedText)
    {
        $this->assertEquals($transliteratedText, $this->transliterator->ruToEn($russianText));
    }

    public function alphabetProvider(): array
    {
        return [
            ['а', 'a'],
            ['б', 'b'],
            ['в', 'v'],
            ['г', 'g'],
            ['д', 'd'],
            ['е', 'e'],
            ['ё', 'e'],
            ['ж', 'zh'],
            ['з', 'z'],
            ['и', 'i'],
            ['й', 'y'],
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
            ['х', 'h'],
            ['ц', 'ts'],
            ['ч', 'ch'],
            ['ш', 'sh'],
            ['щ', 'sht'],
            ['ь', ''],
            ['ы', 'y'],
            ['ъ', ''],
            ['э', 'e'],
            ['ю', 'yu'],
            ['я', 'ya'],
            ['А', 'A'],
            ['Б', 'B'],
            ['В', 'V'],
            ['Г', 'G'],
            ['Д', 'D'],
            ['Е', 'E'],
            ['Ж', 'Zh'],
            ['З', 'Z'],
            ['И', 'I'],
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
            ['Х', 'H'],
            ['Ц', 'Ts'],
            ['Ч', 'Ch'],
            ['Ш', 'Sh'],
            ['Щ', 'Sht'],
            ['Ь', ''],
            ['Ы', 'Y'],
            ['Ъ', ''],
            ['Э', 'E'],
            ['Ю', 'Yu'],
            ['Я', 'Ya'],
        ];
    }
}
