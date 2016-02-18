<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$faker = Faker\Factory::create();

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//         'password' => bcrypt(str_random(10)),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Case::class, function () {
    return [
        'nickname' => $faker->userName,
        'telephone' => $faker->cellNumber,
        'email' => $faker->safeEmail,
        'QQ' => $faker->randomNumber,
        'weixin' => $faker->randomNumber,
        'weibo' => $faker->userName,
        'detail_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});

$factory->define(App\LawOffice::class, function () {
    return [
        'username' => $faker->name,
        'telephone' => $faker->cellNumber,
        'email' => $faker->safeEmail,
        'QQ' => $faker->randomNumber,
        'weixin' => $faker->randomNumber,
        'weibo' => $faker->userName,
        'description_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});

$factory->define(App\LawOffice::class, function () {
    return [
        'officeName' => $faker->sentence(2),
        'telephone' => $faker->cellNumber,
        'description_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});

$factory->define(App\SuccessfulCase::class, function () {
    return [
        'caseTitle' => $faker->sentence(mt_rand(3, 10)),
        'caseDetail_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'lawyer' => $faker->name,
        'lawOffice' => $faker->sentence(2),
        'telephone' => $faker->cellNumber,
    ];
});
