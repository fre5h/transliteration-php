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

    public function officialExamplesProvider(): iterable
    {
        // Examples of transliteration form the resolution of the Cabinet of Ministers of Ukraine №55 (27.01.2010)
        // Аа
        yield ['Алушта', 'Alushta'];
        yield ['Андрій', 'Andrii'];
        // Бб
        yield ['Борщагівка', 'Borshchahivka'];
        yield ['Борисенко',  'Borysenko'];
        // Вв
        yield ['Вінниця',   'Vinnytsia'];
        yield ['Володимир', 'Volodymyr'];
        // Гг
        yield ['Гадяч',     'Hadiach'];
        yield ['Богдан',    'Bohdan'];
        yield ['Згурський', 'Zghurskyi'];
        // Ґґ
        yield ['Ґалаґан', 'Galagan'];
        yield ['Ґорґани', 'Gorgany'];
        // Дд
        yield ['Донецьк', 'Donetsk'];
        yield ['Дмитро',  'Dmytro'];
        // Ее
        yield ['Рівне',  'Rivne'];
        yield ['Олег',   'Oleh'];
        yield ['Есмань', 'Esman'];
        // Єє
        yield ['Єнакієве', 'Yenakiieve'];
        yield ['Гаєвич',   'Haievych'];
        yield ['Короп\'є', 'Koropie'];
        // Жж
        yield ['Житомир', 'Zhytomyr'];
        yield ['Жанна',   'Zhanna'];
        yield ['Жежелів', 'Zhezheliv'];
        // Зз
        yield ['Закарпаття', 'Zakarpattia'];
        yield ['Казимирчук', 'Kazymyrchuk'];
        // Ии
        yield ['Медвин',     'Medvyn'];
        yield ['Михайленко', 'Mykhailenko'];
        // Іі
        yield ['Іванків',  'Ivankiv'];
        yield ['Іващенко', 'Ivashchenko'];
        // Її
        yield ['Їжакевич', 'Yizhakevych'];
        yield ['Кадиївка', 'Kadyivka'];
        yield ['Мар\'їне', 'Marine'];
        // Йй
        yield ['Йосипівка', 'Yosypivka'];
        yield ['Стрий',     'Stryi'];
        yield ['Олексій',   'Oleksii'];
        // Кк
        yield ['Київ',      'Kyiv'];
        yield ['Коваленко', 'Kovalenko'];
        // Лл
        yield ['Лебедин', 'Lebedyn'];
        yield ['Леонід',  'Leonid'];
        // Мм
        yield ['Миколаїв', 'Mykolaiv'];
        yield ['Маринич',  'Marynych'];
        // Нн
        yield ['Ніжин',   'Nizhyn'];
        yield ['Наталія', 'Nataliia'];
        // Оо
        yield ['Одеса',    'Odesa'];
        yield ['Онищенко', 'Onyshchenko'];
        // Пп
        yield ['Полтава', 'Poltava'];
        yield ['Петро',   'Petro'];
        // Рр
        yield ['Решетилівка', 'Reshetylivka'];
        yield ['Рибчинський', 'Rybchynskyi'];
        // Сс
        yield ['Суми',    'Sumy'];
        yield ['Соломія', 'Solomiia'];
        // Тт
        yield ['Тернопіль', 'Ternopil'];
        yield ['Троць',     'Trots'];
        // Уу
        yield ['Ужгород', 'Uzhhorod'];
        yield ['Уляна',   'Uliana'];
        // Фф
        yield ['Фастів',   'Fastiv'];
        yield ['Філіпчук', 'Filipchuk'];
        // Хх
        yield ['Харків',   'Kharkiv'];
        yield ['Христина', 'Khrystyna'];
        // Цц
        yield ['Біла Церква', 'Bila Tserkva'];
        yield ['Стеценко',    'Stetsenko'];
        // Чч
        yield ['Чернівці', 'Chernivtsi'];
        yield ['Шевченко', 'Shevchenko'];
        // Шш
        yield ['Шостка',   'Shostka'];
        yield ['Кишеньки', 'Kyshenky'];
        // Щщ
        yield ['Щербухи',   'Shcherbukhy'];
        yield ['Гоща',      'Hoshcha'];
        yield ['Гаращенко', 'Harashchenko'];
        // Юю
        yield ['Юрій',      'Yurii'],
        yield ['Корюківка', 'Koriukivka'];
        // Яя
        yield ['Яготин',     'Yahotyn'];
        yield ['Ярошенко',   'Yaroshenko'];
        yield ['Костянтин',  'Kostiantyn'];
        yield ['Знам\'янка', 'Znamianka'];
        yield ['Феодосія',   'Feodosiia'];
        // Some text
        yield ['Добрий день', 'Dobryi den'];
        yield ['Привіт світ!', 'Pryvit svit!'];
    }

    public function sentencesProvider(): iterable
    {
        yield ['Добрий день', 'Dobryi den'];
        yield ['Привіт світ!', 'Pryvit svit!'];
    }
}
