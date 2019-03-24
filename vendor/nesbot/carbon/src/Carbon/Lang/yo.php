<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
\Symfony\Component\Translation\PluralizationRules::set(function ($number) {
    return $number === 1 ? 0 : 1;
}, 'yo');

return [
    'year' => 'ọdún kan|ọdún :count',
    'month' => 'osù kan|osù :count',
    'week' => 'ọsẹ kan|ọsẹ :count',
    'day' => 'ọjọ́ kan|ọjọ́ :count',
    'hour' => 'wákati kan|wákati :count',
    'minute' => 'ìsẹjú kan|ìsẹjú :count',
    'second' => 'ìsẹjú aayá die|aayá :count',
    'ago' => ':time kọjá',
    'from_now' => 'ní :time',
    'diff_yesterday' => 'Àna',
    'diff_tomorrow' => 'Ọ̀la',
    'formats' => [
        'LT' => 'h:mm A',
        'LTS' => 'h:mm:ss A',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY h:mm A',
        'LLLL' => 'dddd, D MMMM YYYY h:mm A',
    ],
    'calendar' => [
        'sameDay' => '[Ònì ni] LT',
        'nextDay' => '[Ọ̀la ni] LT',
        'nextWeek' => 'dddd [Ọsẹ̀ tón\'bọ] [ni] LT',
        'lastDay' => '[Àna ni] LT',
        'lastWeek' => 'dddd [Ọsẹ̀ tólọ́] [ni] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => 'ọjọ́ :number',
    'months' => ['Sẹ́rẹ́', 'Èrèlè', 'Ẹrẹ̀nà', 'Ìgbé', 'Èbibi', 'Òkùdu', 'Agẹmo', 'Ògún', 'Owewe', 'Ọ̀wàrà', 'Bélú', 'Ọ̀pẹ̀̀'],
    'months_short' => ['Sẹ́r', 'Èrl', 'Ẹrn', 'Ìgb', 'Èbi', 'Òkù', 'Agẹ', 'Ògú', 'Owe', 'Ọ̀wà', 'Bél', 'Ọ̀pẹ̀̀'],
    'weekdays' => ['Àìkú', 'Ajé', 'Ìsẹ́gun', 'Ọjọ́rú', 'Ọjọ́bọ', 'Ẹtì', 'Àbámẹ́ta'],
    'weekdays_short' => ['Àìk', 'Ajé', 'Ìsẹ́', 'Ọjr', 'Ọjb', 'Ẹtì', 'Àbá'],
    'weekdays_min' => ['Àì', 'Aj', 'Ìs', 'Ọr', 'Ọb', 'Ẹt', 'Àb'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
];
