<?php
global $CONFIG, $arStudents;
$CONFIG = [
    "SEMESTR_NAMES" => ["Первый", "Второй", "Третий", "Четвертый", "Пятый", "Шестой", "Седьмой", "Восьмой"],
    "LESSONS_TIME" => [
        ["hours" => 8, "minutes" => 30],
        ["hours" => 10, "minutes" => 10],
        ["hours" => 12, "minutes" => "00"],
        ["hours" => 13, "minutes" => 40],
        ["hours" => 15, "minutes" => 20],
    ],
    "CURRENT_SEMESTR" => 5,
    "GROUP_NAME" => "ИВТ-161",
    "SUBJECT_TYPE_CLASSES" => [
        "Экзамен" => "danger",
        "Зачет с оценкой" => "warning",
        "Курсовая работа" => "info",
        "Зачет" => "default",
    ]
];
$students = array(
    array("Байша Юлия Геннадьевна", 579549),
    array("<div class='warete'></div> Борисовский Егор Иванович aka Мистор Варете", 283732),
    array("Бритвин Егор Валерьевич aka Мистор Брутвен", 872975),
    array("Голубев Евгений Александрович", 187236),
    array("Иванюк Владислав Алексеевич aka Дядя Шнюк", 584397),
    /*array("Козак Ростислав Рустамович", 395729),*/
    array("Коноваленко Оксана Вячеславовна", 543853),
    array("Крюков Алексей Олегович", 881847),
    array("Кузнецова Виктория Алексеевна", 359879),
    array("Мельникова Анна Андреевна aka Melnyassh", 626267),
    array("Минаев Дмитрий Владимирович", 298435),
    array("Митина Юлия Игоревна aka Михайловский зашквар)0)0)", 763864),
    array("Мухаметшин Антон Эдуардович aka Мистор Тутурен", 136357),
    /*array("Набиев Маруф Олимхонович", 899591),
    array("Оганян Генрик Акопович", 612571),*/
    array("Онопко Максим Николаевич", 861896),
    /*array("Орлов Илья Валентинович aka Мистер Валюша", 576352),*/
    array("Плиско Максим Игоревич", 969672),
    /*array("Попов Максим Евгеньевич", 725929),*/
    array("Примаченко Светлана Владимировна", 933751),
    array("Смолякова Анна Дмитриевна", 326678),
    // array("Солтагираев Мехди Умарович", 295988),
    array("Титовский Даниил Викторович", 498437),
    // array("Фролов Глеб Романович", 631725),
    array("Чекунов Владлен Станиславович", 939342),
    array("Шатрова Алёна Андреевна", 168174),
    /*array("Яровой Евгений Александрович", 975223)*/
);

$arStudents = [
    "579549" => "Байша Юлия Геннадьевна",
    "283732" => "<div class='warete'></div> Борисовский Егор Иванович",
    "872975" => "Бритвин Егор Валерьевич",
    "187236" => "Голубев Евгений Александрович",
    "584397" => "Иванюк Владислав Алексеевич",
    "543853" => "Коноваленко Оксана Вячеславовна",
    "881847" => "Крюков Алексей Олегович",
    "359879" => "Кузнецова Виктория Алексеевна",
    "626267" => "Мельникова Анна Андреевна",
    "298435" => "Минаев Дмитрий Владимирович",
    "763864" => "Митина Юлия Игоревна",
    "136357" => "Мухаметшин Антон Эдуардович",
    "861896" => "Онопко Максим Николаевич",
    "969672" => "Плиско Максим Игоревич",
    "933751" => "Примаченко Светлана Владимировна",
    "326678" => "Смолякова Анна Дмитриевна",
    "498437" => "Титовский Даниил Викторович",
    "939342" => "Чекунов Владлен Станиславович",
    "168174" => "Шатрова Алёна Андреевна",
    "_079022" => "Неизвестный студент",
    "_080279" => "Неизвестный студент",
];