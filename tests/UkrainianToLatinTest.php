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
 * UkrainianToLatin Transliterator Test.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
class UkrainianToLatinTest extends TestCase
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
     * @dataProvider officialExamplesProvider
     * @dataProvider otherExamplesProvider
     */
    public function testTransliterationFromUkrainianToLatin(string $ukrainianText, string $transliteratedText): void
    {
        $this->assertEquals($transliteratedText, $this->transliterator->ukrToLat($ukrainianText));
    }

    public static function alphabetProvider(): iterable
    {
        yield 'А' => ['А', 'A'];
        yield 'Б' => ['Б', 'B'];
        yield 'В' => ['В', 'V'];
        yield 'Г' => ['Г', 'H'];
        yield 'Ґ' => ['Ґ', 'G'];
        yield 'Д' => ['Д', 'D'];
        yield 'Е' => ['Е', 'E'];
        yield 'Є' => ['Є', 'Ye'];
        yield 'Ж' => ['Ж', 'Zh'];
        yield 'З' => ['З', 'Z'];
        yield 'И' => ['И', 'Y'];
        yield 'І' => ['І', 'I'];
        yield 'Ї' => ['Ї', 'Yi'];
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
        yield 'Х' => ['Х', 'Kh'];
        yield 'Ц' => ['Ц', 'Ts'];
        yield 'Ч' => ['Ч', 'Ch'];
        yield 'Ш' => ['Ш', 'Sh'];
        yield 'Щ' => ['Щ', 'Shch'];
        yield 'Ю' => ['Ю', 'Yu'];
        yield 'Я' => ['Я', 'Ya'];
        yield 'а' => ['а', 'a'];
        yield 'б' => ['б', 'b'];
        yield 'в' => ['в', 'v'];
        yield 'г' => ['г', 'h'];
        yield 'ґ' => ['ґ', 'g'];
        yield 'д' => ['д', 'd'];
        yield 'е' => ['е', 'e'];
        yield 'є' => ['є', 'ye'];
        yield 'ж' => ['ж', 'zh'];
        yield 'з' => ['з', 'z'];
        yield 'и' => ['и', 'y'];
        yield 'і' => ['і', 'i'];
        yield 'ї' => ['ї', 'yi'];
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
        yield 'х' => ['х', 'kh'];
        yield 'ц' => ['ц', 'ts'];
        yield 'ч' => ['ч', 'ch'];
        yield 'ш' => ['ш', 'sh'];
        yield 'щ' => ['щ', 'shch'];
        yield 'ь' => ['ь', ''];
        yield 'ю' => ['ю', 'yu'];
        yield 'я' => ['я', 'ya'];
        yield '\'' => ['\'', ''];
    }

    public static function officialExamplesProvider(): iterable
    {
        // Examples of transliteration form the resolution of the Cabinet of Ministers of Ukraine №55 (27.01.2010)
        // Аа
        yield 'Алушта' => ['Алушта', 'Alushta'];
        yield 'Андрій' => ['Андрій', 'Andrii'];
        // Бб
        yield 'Борщагівка' => ['Борщагівка', 'Borshchahivka'];
        yield 'Борисенко' => ['Борисенко', 'Borysenko'];
        // Вв
        yield 'Вінниця' => ['Вінниця', 'Vinnytsia'];
        yield 'Володимир' => ['Володимир', 'Volodymyr'];
        // Гг
        yield 'Гадяч' => ['Гадяч', 'Hadiach'];
        yield 'Богдан' => ['Богдан', 'Bohdan'];
        yield 'Згурський' => ['Згурський', 'Zghurskyi'];
        // Ґґ
        yield 'Ґалаґан' => ['Ґалаґан', 'Galagan'];
        yield 'Ґорґани' => ['Ґорґани', 'Gorgany'];
        // Дд
        yield 'Донецьк' => ['Донецьк', 'Donetsk'];
        yield 'Дмитро' => ['Дмитро', 'Dmytro'];
        // Ее
        yield 'Рівне' => ['Рівне', 'Rivne'];
        yield 'Олег' => ['Олег', 'Oleh'];
        yield 'Есмань' => ['Есмань', 'Esman'];
        // Єє
        yield 'Єнакієве' => ['Єнакієве', 'Yenakiieve'];
        yield 'Гаєвич' => ['Гаєвич', 'Haievych'];
        yield 'Короп\'є' => ['Короп\'є', 'Koropie'];
        // Жж
        yield 'Житомир' => ['Житомир', 'Zhytomyr'];
        yield 'Жанна' => ['Жанна', 'Zhanna'];
        yield 'Жежелів' => ['Жежелів', 'Zhezheliv'];
        // Зз
        yield 'Закарпаття' => ['Закарпаття', 'Zakarpattia'];
        yield 'Казимирчук' => ['Казимирчук', 'Kazymyrchuk'];
        // Ии
        yield 'Медвин' => ['Медвин', 'Medvyn'];
        yield 'Михайленко' => ['Михайленко', 'Mykhailenko'];
        // Іі
        yield 'Іванків' => ['Іванків', 'Ivankiv'];
        yield 'Іващенко' => ['Іващенко', 'Ivashchenko'];
        // Її
        yield 'Їжакевич' => ['Їжакевич', 'Yizhakevych'];
        yield 'Кадиївка' => ['Кадиївка', 'Kadyivka'];
        yield 'Мар\'їне' => ['Мар\'їне', 'Marine'];
        // Йй
        yield 'Йосипівка' => ['Йосипівка', 'Yosypivka'];
        yield 'Стрий' => ['Стрий', 'Stryi'];
        yield 'Олексій' => ['Олексій', 'Oleksii'];
        // Кк
        yield 'Київ' => ['Київ', 'Kyiv'];
        yield 'Коваленко' => ['Коваленко', 'Kovalenko'];
        // Лл
        yield 'Лебедин' => ['Лебедин', 'Lebedyn'];
        yield 'Леонід' => ['Леонід', 'Leonid'];
        // Мм
        yield 'Миколаїв' => ['Миколаїв', 'Mykolaiv'];
        yield 'Маринич' => ['Маринич', 'Marynych'];
        // Нн
        yield 'Ніжин' => ['Ніжин', 'Nizhyn'];
        yield 'Наталія' => ['Наталія', 'Nataliia'];
        // Оо
        yield 'Одеса' => ['Одеса', 'Odesa'];
        yield 'Онищенко' => ['Онищенко', 'Onyshchenko'];
        // Пп
        yield 'Полтава' => ['Полтава', 'Poltava'];
        yield 'Петро' => ['Петро', 'Petro'];
        // Рр
        yield 'Решетилівка' => ['Решетилівка', 'Reshetylivka'];
        yield 'Рибчинський' => ['Рибчинський', 'Rybchynskyi'];
        // Сс
        yield 'Суми' => ['Суми', 'Sumy'];
        yield 'Соломія' => ['Соломія', 'Solomiia'];
        // Тт
        yield 'Тернопіль' => ['Тернопіль', 'Ternopil'];
        yield 'Троць' => ['Троць', 'Trots'];
        // Уу
        yield 'Ужгород' => ['Ужгород', 'Uzhhorod'];
        yield 'Уляна' => ['Уляна', 'Uliana'];
        // Фф
        yield 'Фастів' => ['Фастів', 'Fastiv'];
        yield 'Філіпчук' => ['Філіпчук', 'Filipchuk'];
        // Хх
        yield 'Харків' => ['Харків', 'Kharkiv'];
        yield 'Христина' => ['Христина', 'Khrystyna'];
        // Цц
        yield 'Біла Церква' => ['Біла Церква', 'Bila Tserkva'];
        yield 'Стеценко' => ['Стеценко', 'Stetsenko'];
        // Чч
        yield 'Чернівці' => ['Чернівці', 'Chernivtsi'];
        yield 'Шевченко' => ['Шевченко', 'Shevchenko'];
        // Шш
        yield 'Шостка' => ['Шостка', 'Shostka'];
        yield 'Кишеньки' => ['Кишеньки', 'Kyshenky'];
        // Щщ
        yield 'Щербухи' => ['Щербухи', 'Shcherbukhy'];
        yield 'Гоща' => ['Гоща', 'Hoshcha'];
        yield 'Гаращенко' => ['Гаращенко', 'Harashchenko'];
        // Юю
        yield 'Юрій' => ['Юрій', 'Yurii'];
        yield 'Корюківка' => ['Корюківка', 'Koriukivka'];
        // Яя
        yield 'Яготин' => ['Яготин', 'Yahotyn'];
        yield 'Ярошенко' => ['Ярошенко', 'Yaroshenko'];
        yield 'Костянтин' => ['Костянтин', 'Kostiantyn'];
        yield 'Знам\'янка' => ['Знам\'янка', 'Znamianka'];
        yield 'Феодосія' => ['Феодосія', 'Feodosiia'];
    }

    public static function otherExamplesProvider(): iterable
    {
        yield 'empty string' => ['', ''];

        yield 'єнот' => ['єнот', 'yenot'];
        yield 'їжак' => ['їжак', 'yizhak'];
        yield 'йорж' => ['йорж', 'yorzh'];
        yield 'юшка' => ['юшка', 'yushka'];
        yield 'яблуко' => ['яблуко', 'yabluko'];

        yield 'Добрий день' => ['Добрий день', 'Dobryi den'];
        yield 'Привіт світ!' => ['Привіт світ!', 'Pryvit svit!'];
        yield 'Вредний єнот' => ['Вредний єнот', 'Vrednyi yenot'];
        yield 'Сміливий їжак' => ['Сміливий їжак', 'Smilyvyi yizhak'];
        yield 'Риба йорж' => ['Риба йорж', 'Ryba yorzh'];
        yield 'Грибна юшка' => ['Грибна юшка', 'Hrybna yushka'];
        yield 'Смачне яблуко' => ['Смачне яблуко', 'Smachne yabluko'];

        yield 'Слава Україні! Glory to Ukraine!' => ['Слава Україні! Glory to Ukraine!', 'Slava Ukraini! Glory to Ukraine!'];
        yield 'test тест test' => ['test тест test', 'test test test'];
        yield '1234567890' => ['1234567890', '1234567890'];
        yield 'test TEST 123' => ['test TEST 123', 'test TEST 123'];
    }
}
