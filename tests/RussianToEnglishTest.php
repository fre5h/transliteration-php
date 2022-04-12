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

namespace Tests\Fresh\Transliteration;

use Fresh\Transliteration\Transliterator;
use PHPUnit\Framework\TestCase;

/**
 * RussianToEnglish Transliterator Test.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 */
class RussianToEnglishTest extends TestCase
{
    protected Transliterator $transliterator;

    protected function setUp(): void
    {
        $this->transliterator = new Transliterator();
    }

    protected function tearDown(): void
    {
        unset($this->transliterator);
    }

    /**
     * @dataProvider alphabetProvider
     */
    public function testTransliterationFromRussianToEnglish(string $russianText, string $transliteratedText): void
    {
        self::assertEquals($transliteratedText, $this->transliterator->ruToEn($russianText));
    }

    public static function alphabetProvider(): iterable
    {
        yield ['А', 'A'];
        yield ['Б', 'B'];
        yield ['В', 'V'];
        yield ['Г', 'G'];
        yield ['Д', 'D'];
        yield ['Е', 'E'];
        yield ['Ж', 'Zh'];
        yield ['З', 'Z'];
        yield ['И', 'I'];
        yield ['Й', 'Y'];
        yield ['К', 'K'];
        yield ['Л', 'L'];
        yield ['М', 'M'];
        yield ['Н', 'N'];
        yield ['О', 'O'];
        yield ['П', 'P'];
        yield ['Р', 'R'];
        yield ['С', 'S'];
        yield ['Т', 'T'];
        yield ['У', 'U'];
        yield ['Ф', 'F'];
        yield ['Х', 'H'];
        yield ['Ц', 'Ts'];
        yield ['Ч', 'Ch'];
        yield ['Ш', 'Sh'];
        yield ['Щ', 'Sht'];
        yield ['Ь', ''];
        yield ['Ы', 'Y'];
        yield ['Ъ', ''];
        yield ['Э', 'E'];
        yield ['Ю', 'Yu'];
        yield ['Я', 'Ya'];
        yield ['а', 'a'];
        yield ['б', 'b'];
        yield ['в', 'v'];
        yield ['г', 'g'];
        yield ['д', 'd'];
        yield ['е', 'e'];
        yield ['ё', 'e'];
        yield ['ж', 'zh'];
        yield ['з', 'z'];
        yield ['и', 'i'];
        yield ['й', 'y'];
        yield ['к', 'k'];
        yield ['л', 'l'];
        yield ['м', 'm'];
        yield ['н', 'n'];
        yield ['о', 'o'];
        yield ['п', 'p'];
        yield ['р', 'r'];
        yield ['с', 's'];
        yield ['т', 't'];
        yield ['у', 'u'];
        yield ['ф', 'f'];
        yield ['х', 'h'];
        yield ['ц', 'ts'];
        yield ['ч', 'ch'];
        yield ['ш', 'sh'];
        yield ['щ', 'sht'];
        yield ['ь', ''];
        yield ['ы', 'y'];
        yield ['ъ', ''];
        yield ['э', 'e'];
        yield ['ю', 'yu'];
        yield ['я', 'ya'];
    }
}
