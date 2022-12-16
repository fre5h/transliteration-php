# Transliteration

PHP library for transliteration. 🇺🇦 🇬🇧 🔡 🐘

[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/fre5h/transliteration-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/fre5h/transliteration-php/)
[![Build Status](https://img.shields.io/github/actions/workflow/status/fre5h/transliteration-php/ci.yaml?branch=main&style=flat-square)](https://github.com/fre5h/transliteration-php/actions?query=workflow%3ACI+branch%3Amain+)
[![CodeCov](https://img.shields.io/codecov/c/github/fre5h/transliteration-php.svg?style=flat-square)](https://codecov.io/github/fre5h/transliteration-php)
[![License](https://img.shields.io/packagist/l/fresh/transliteration.svg?style=flat-square)](https://packagist.org/packages/fresh/transliteration)
[![Latest Stable Version](https://img.shields.io/packagist/v/fresh/transliteration.svg?style=flat-square)](https://packagist.org/packages/fresh/transliteration)
[![Total Downloads](https://img.shields.io/packagist/dt/fresh/transliteration.svg?style=flat-square)](https://packagist.org/packages/fresh/transliteration)
[![StyleCI](https://styleci.io/repos/15205247/shield?style=flat-square)](https://styleci.io/repos/15205247)
[![Gitter](https://img.shields.io/badge/gitter-join%20chat-brightgreen.svg?style=flat-square)](https://gitter.im/fre5h/transliteration-php)

## Requirements 🧐

* PHP >= 8.1

## Installation 🌱

```composer req fresh/transliteration='~4.0'```

## Available transliteration methods 🎁

<table>
    <thead>
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Rules</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ukrainian</td>
            <td>Latin</td>
            <td>
                Resolution of the Cabinet of Ministers of Ukraine №55 dated January 27, 2010
                <br />
                https://zakon.rada.gov.ua/laws/show/55-2010-%D0%BF#Text
            </td>
        </tr>
    </tbody>
</table>

## Using 👨‍🎓

```php
<?php

namespace Acme;

use Fresh\Transliteration\Transliterator;
use Fresh\Transliteration\UkrainianToLatin;

class Foo
{
    public function bar(string $text): void
    {
        // You can use in this way
        $transliterator = new Transliterator();
        $transliteratedText = $transliterator->ukrToLat($text);

        // Or like this
        $transliteratedText = UkrainianToLatin::transliterate($ukrainianText);
    }
}
```

### Some examples of *Ukrainian-to-Latin* transliteration ℹ️

<table>
    <thead>
        <tr>
            <th>Ukrainian text</th>
            <th>Transliterated text</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Володимир</td>
            <td>Volodymyr</td>
        </tr>
        <tr>
            <td>Богдан</td>
            <td>Bohdan</td>
        </tr>
        <tr>
            <td>Жанна</td>
            <td>Zhanna</td>
        </tr>
        <tr>
            <td>Наталія</td>
            <td>Nataliia</td>
        </tr>
        <tr>
            <td>Олексій</td>
            <td>Oleksii</td>
        </tr>
        <tr>
            <td>Уляна</td>
            <td>Uliana</td>
        </tr>
        <tr>
            <td>Юрій</td>
            <td>Yurii</td>
        </tr>
    </tbody>
</table>

## Contributing 🤝

See [CONTRIBUTING](https://github.com/fre5h/transliteration/blob/master/.github/CONTRIBUTING.md) file.
