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
 * UkrainianToEnglish Transliterator Test.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
class UkrainianToEnglishTest extends TestCase
{
    protected Transliterator $transliterator;

    protected function setUp(): void
    {
        $this->transliterator = new Transliterator();
    }

    /**
     * @dataProvider alphabetProvider
     * @dataProvider officialExamplesProvider
     * @dataProvider sentencesProvider
     */
    public function testTransliterationFromUkrainianToEnglish(string $ukrainianText, string $transliteratedText): void
    {
        $this->assertEquals($transliteratedText, $this->transliterator->ukToEn($ukrainianText));
    }

    public function alphabetProvider(): iterable
    {
        yield ['А', 'A'];
        yield ['Б', 'B'];
        yield ['В', 'V'];
        yield ['Г', 'H'];
        yield ['Ґ', 'G'];
        yield ['Д', 'D'];
        yield ['Е', 'E'];
        yield ['Є', 'Ye'];
        yield ['Ж', 'Zh'];
        yield ['З', 'Z'];
        yield ['И', 'Y'];
        yield ['І', 'I'];
        yield ['Ї', 'Yi'];
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
        yield ['Х', 'Kh'];
        yield ['Ц', 'Ts'];
        yield ['Ч', 'Ch'];
        yield ['Ш', 'Sh'];
        yield ['Щ', 'Shch'];
        yield ['Ю', 'Yu'];
        yield ['Я', 'Ya'];
        yield ['а', 'a'];
        yield ['б', 'b'];
        yield ['в', 'v'];
        yield ['г', 'h'];
        yield ['ґ', 'g'];
        yield ['д', 'd'];
        yield ['е', 'e'];
        yield ['є', 'ie'];
        yield ['ж', 'zh'];
        yield ['з', 'z'];
        yield ['и', 'y'];
        yield ['і', 'i'];
        yield ['ї', 'i'];
        yield ['й', 'i'];
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
        yield ['х', 'kh'];
        yield ['ц', 'ts'];
        yield ['ч', 'ch'];
        yield ['ш', 'sh'];
        yield ['щ', 'shch'];
        yield ['ь', ''];
        yield ['ю', 'iu'];
        yield ['я', 'ia'];
        yield ['\'', ''];
    }

    public function officialExamplesProvider(): array
    {
        // Examples of transliteration form the resolution of the Cabinet of Ministers of Ukraine №55 (27.01.2010)
        return [
            // Аа
            ['Алушта', 'Alushta'],
            ['Андрій', 'Andrii'],
            // Бб
            ['Борщагівка', 'Borshchahivka'],
            ['Борисенко',  'Borysenko'],
            // Вв
            ['Вінниця',   'Vinnytsia'],
            ['Володимир', 'Volodymyr'],
            // Гг
            ['Гадяч',     'Hadiach'],
            ['Богдан',    'Bohdan'],
            ['Згурський', 'Zghurskyi'],
            // Ґґ
            ['Ґалаґан', 'Galagan'],
            ['Ґорґани', 'Gorgany'],
            // Дд
            ['Донецьк', 'Donetsk'],
            ['Дмитро',  'Dmytro'],
            // Ее
            ['Рівне',  'Rivne'],
            ['Олег',   'Oleh'],
            ['Есмань', 'Esman'],
            // Єє
            ['Єнакієве', 'Yenakiieve'],
            ['Гаєвич',   'Haievych'],
            ['Короп\'є', 'Koropie'],
            // Жж
            ['Житомир', 'Zhytomyr'],
            ['Жанна',   'Zhanna'],
            ['Жежелів', 'Zhezheliv'],
            // Зз
            ['Закарпаття', 'Zakarpattia'],
            ['Казимирчук', 'Kazymyrchuk'],
            // Ии
            ['Медвин',     'Medvyn'],
            ['Михайленко', 'Mykhailenko'],
            // Іі
            ['Іванків',  'Ivankiv'],
            ['Іващенко', 'Ivashchenko'],
            // Її
            ['Їжакевич', 'Yizhakevych'],
            ['Кадиївка', 'Kadyivka'],
            ['Мар\'їне', 'Marine'],
            // Йй
            ['Йосипівка', 'Yosypivka'],
            ['Стрий',     'Stryi'],
            ['Олексій',   'Oleksii'],
            // Кк
            ['Київ',      'Kyiv'],
            ['Коваленко', 'Kovalenko'],
            // Лл
            ['Лебедин', 'Lebedyn'],
            ['Леонід',  'Leonid'],
            // Мм
            ['Миколаїв', 'Mykolaiv'],
            ['Маринич',  'Marynych'],
            // Нн
            ['Ніжин',   'Nizhyn'],
            ['Наталія', 'Nataliia'],
            // Оо
            ['Одеса',    'Odesa'],
            ['Онищенко', 'Onyshchenko'],
            // Пп
            ['Полтава', 'Poltava'],
            ['Петро',   'Petro'],
            // Рр
            ['Решетилівка', 'Reshetylivka'],
            ['Рибчинський', 'Rybchynskyi'],
            // Сс
            ['Суми',    'Sumy'],
            ['Соломія', 'Solomiia'],
            // Тт
            ['Тернопіль', 'Ternopil'],
            ['Троць',     'Trots'],
            // Уу
            ['Ужгород', 'Uzhhorod'],
            ['Уляна',   'Uliana'],
            // Фф
            ['Фастів',   'Fastiv'],
            ['Філіпчук', 'Filipchuk'],
            // Хх
            ['Харків',   'Kharkiv'],
            ['Христина', 'Khrystyna'],
            // Цц
            ['Біла Церква', 'Bila Tserkva'],
            ['Стеценко',    'Stetsenko'],
            // Чч
            ['Чернівці', 'Chernivtsi'],
            ['Шевченко', 'Shevchenko'],
            // Шш
            ['Шостка',   'Shostka'],
            ['Кишеньки', 'Kyshenky'],
            // Щщ
            ['Щербухи',   'Shcherbukhy'],
            ['Гоща',      'Hoshcha'],
            ['Гаращенко', 'Harashchenko'],
            // Юю
            ['Юрій',      'Yurii'],
            ['Корюківка', 'Koriukivka'],
            // Яя
            ['Яготин',     'Yahotyn'],
            ['Ярошенко',   'Yaroshenko'],
            ['Костянтин',  'Kostiantyn'],
            ['Знам\'янка', 'Znamianka'],
            ['Феодосія',   'Feodosiia'],
            // Some text
            ['Добрий день', 'Dobryi den'],
            ['Привіт світ!', 'Pryvit svit!'],
        ];
    }

    public function sentencesProvider(): iterable
    {
        yield ['Добрий день', 'Dobryi den'];
        yield ['Привіт світ!', 'Pryvit svit!'];
    }
}
