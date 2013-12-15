<?php
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
use Fresh\Transliteration\UkrainianToEnglish;

/**
 * Transliterator Test
 *
 * @author Artem Genvald <genvaldartem@gmail.com>
 * @see    http://zakon1.rada.gov.ua/laws/show/55-2010-%D0%BF
 */
class TransliteratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Transliterator
     */
    protected $transliterator;

    /**
     * Set up environment
     */
    public function setUp()
    {
        $this->transliterator = new Transliterator();
    }

    /**
     * Test transliteration from ukrainian to english
     *
     * @param array $ukrainianText      Ukrainian text
     * @param array $transliteratedText Expected transliterated text
     *
     * @test
     * @dataProvider transliterationFromUkrainianToEnglishDataProvider
     */
    public function transliterationFromUkrainianToEnglish($ukrainianText, $transliteratedText)
    {
        $this->assertEquals($transliteratedText, $this->transliterator->fromUkrainianToEnglish($ukrainianText));
    }

    /**
     * Data provider for transliteration from ukrainian to english test
     *
     * @static
     * @return array
     */
    public function transliterationFromUkrainianToEnglishDataProvider()
    {
        return array_merge(
            UkrainianToEnglish::$ukrainianToEnglishRules,
            [
                // Приклади транслітерації взяті з постанови №55 Кабінету Міністрів України від 27 січня 2010 року
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
                ['Феодосія',   'Feodosiia']
            ]
        );
    }
}
