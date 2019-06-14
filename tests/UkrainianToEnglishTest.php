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
    /** @var Transliterator */
    protected $transliterator;

    public function setUp()
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

    public function alphabetProvider(): array
    {
        return [
            ['А', 'A'],
            ['Б', 'B'],
            ['В', 'V'],
            ['Г', 'H'],
            ['Ґ', 'G'],
            ['Д', 'D'],
            ['Е', 'E'],
            ['Є', 'Ye'],
            ['Ж', 'Zh'],
            ['З', 'Z'],
            ['И', 'Y'],
            ['І', 'I'],
            ['Ї', 'Yi'],
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
            ['Х', 'Kh'],
            ['Ц', 'Ts'],
            ['Ч', 'Ch'],
            ['Ш', 'Sh'],
            ['Щ', 'Shch'],
            ['Ю', 'Yu'],
            ['Я', 'Ya'],
            ['а', 'a'],
            ['б', 'b'],
            ['в', 'v'],
            ['г', 'h'],
            ['ґ', 'g'],
            ['д', 'd'],
            ['е', 'e'],
            ['є', 'ie'],
            ['ж', 'zh'],
            ['з', 'z'],
            ['и', 'y'],
            ['і', 'i'],
            ['ї', 'i'],
            ['й', 'i'],
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
            ['х', 'kh'],
            ['ц', 'ts'],
            ['ч', 'ch'],
            ['ш', 'sh'],
            ['щ', 'shch'],
            ['ь', ''],
            ['ю', 'iu'],
            ['я', 'ia'],
            ['\'', ''],
        ];
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

    public function sentencesProvider(): array
    {
        return [
            ['Добрий день', 'Dobryi den'],
            ['Привіт світ!', 'Pryvit svit!'],
        ];
    }
}
