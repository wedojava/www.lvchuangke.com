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
// $faker = Faker\Factory::create();

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@yourdomain.com',
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 10)),
        'content_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6)))
    ];
});

$factory->define(App\LawCase::class, function (Faker\Generator $faker) {
    return [
        'nickname' => $faker->userName,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'QQ' => $faker->randomNumber,
        'weixin' => $faker->randomNumber,
        'weibo' => $faker->userName,
        'detail_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});


$factory->define(App\Lawyer::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'professional_field' => $faker->firstName,
        'certified_no' => $faker->numerify('##########'),
        'certified_ages' => $faker->numerify('##'),
        'telephone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'QQ' => $faker->randomNumber,
        'description_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});

$factory->define(App\LawOffice::class, function (Faker\Generator $faker) {
    return [
        'officeName' => $faker->sentence(3),
        'telephone' => $faker->phoneNumber,
        'description_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});

$factory->define(App\SuccessfulCase::class, function (Faker\Generator $faker) {
    return [
        'caseTitle' => $faker->sentence(3),
        'caseDetail_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'lawyer' => $faker->name,
        'lawOffice' => $faker->sentence(2),
    ];
});

$factory->define(App\About::class, function (Faker\Generator $faker) {
    return [
        'detail_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
    ];
});
