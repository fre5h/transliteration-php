<?php
/*
 * This file is part of the Transliteration library
 *
 * (c) Mykhailo Vilshansky <mvilshansky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Fresh\Transliteration;

use Fresh\Transliteration\Transliterator;

/**
 * RussianToEnglish Transliterator Test.
 *
 * @author Artem Genvald <mvilshansky@gmail.com>
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 */
class RussianToEnglishTest extends \PHPUnit_Framework_TestCase
{
    protected $transliterator;

    public function setUp()
    {
        $this->transliterator = new Transliterator();
    }

    /**
     * @dataProvider dataProvider
     */
    public function testTransliterationFromRussianToEnglish($russianText, $transliteratedText)
    {
        $this->assertEquals($transliteratedText, $this->transliterator->ruToEn($russianText));
    }

    public function dataProvider()
    {
        return [
            // Russian alphabet
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
            ['Ю', 'Yu'],
            ['Я', 'Ya'],
        ];
    }
}
