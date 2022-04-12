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
 * RussianToLatin Transliterator Test.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 * @author Mykhailo Vilshansky <mvilshansky@gmail.com>
 * @author Yevgeniy Zholkevskiy <zhenya.zholkevskiy@gmail.com>
 */
class RussianToLatinTest extends TestCase
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
    public function testTransliterationFromRussianToLatin(string $russianText, string $transliteratedText): void
    {
        self::assertEquals($transliteratedText, $this->transliterator->rusToLat($russianText));
    }

    public static function alphabetProvider(): iterable
    {
        yield 'А' => ['А', 'A'];
        yield 'Б' => ['Б', 'B'];
        yield 'В' => ['В', 'V'];
        yield 'Г' => ['Г', 'G'];
        yield 'Д' => ['Д', 'D'];
        yield 'Е' => ['Е', 'E'];
        yield 'Ё' => ['Ё', 'Yo'];
        yield 'Ж' => ['Ж', 'Zh'];
        yield 'З' => ['З', 'Z'];
        yield 'И' => ['И', 'I'];
        yield 'Й' => ['Й', 'Y'];
        yield 'К' => ['К', 'K'];
        yield 'Л' => ['Л', 'L'];
        yield 'М' => ['М', 'M'];
        yield 'Н' => ['Н', 'N'];
        yield 'О' => ['О', 'O'];
        yield 'П' => ['П', 'P'];
        yield 'Р' => ['Р', 'R'];
        yield 'С' => ['С', 'S'];
        yield 'Т' => ['Т', 'T'];
        yield 'У' => ['У', 'U'];
        yield 'Ф' => ['Ф', 'F'];
        yield 'Х' => ['Х', 'H'];
        yield 'Ц' => ['Ц', 'Ts'];
        yield 'Ч' => ['Ч', 'Ch'];
        yield 'Ш' => ['Ш', 'Sh'];
        yield 'Щ' => ['Щ', 'Sht'];
        yield 'Ь' => ['Ь', ''];
        yield 'Ы' => ['Ы', 'Y'];
        yield 'Ъ' => ['Ъ', ''];
        yield 'Э' => ['Э', 'E'];
        yield 'Ю' => ['Ю', 'Yu'];
        yield 'Я' => ['Я', 'Ya'];
        yield 'а' => ['а', 'a'];
        yield 'б' => ['б', 'b'];
        yield 'в' => ['в', 'v'];
        yield 'г' => ['г', 'g'];
        yield 'д' => ['д', 'd'];
        yield 'е' => ['е', 'e'];
        yield 'ё' => ['ё', 'yo'];
        yield 'ж' => ['ж', 'zh'];
        yield 'з' => ['з', 'z'];
        yield 'и' => ['и', 'i'];
        yield 'й' => ['й', 'y'];
        yield 'к' => ['к', 'k'];
        yield 'л' => ['л', 'l'];
        yield 'м' => ['м', 'm'];
        yield 'н' => ['н', 'n'];
        yield 'о' => ['о', 'o'];
        yield 'п' => ['п', 'p'];
        yield 'р' => ['р', 'r'];
        yield 'с' => ['с', 's'];
        yield 'т' => ['т', 't'];
        yield 'у' => ['у', 'u'];
        yield 'ф' => ['ф', 'f'];
        yield 'х' => ['х', 'h'];
        yield 'ц' => ['ц', 'ts'];
        yield 'ч' => ['ч', 'ch'];
        yield 'ш' => ['ш', 'sh'];
        yield 'щ' => ['щ', 'sht'];
        yield 'ь' => ['ь', ''];
        yield 'ы' => ['ы', 'y'];
        yield 'ъ' => ['ъ', ''];
        yield 'э' => ['э', 'e'];
        yield 'ю' => ['ю', 'yu'];
        yield 'я' => ['я', 'ya'];
    }
}
