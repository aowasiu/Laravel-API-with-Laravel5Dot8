<?php

use Faker\Generator as Faker;

$factory->define(App\Newsheadlines::class, function (Faker $faker) {

    $url = $faker->url();

    $fileName_array = array(
    'a877a4ea-5da7-3197-b627-bfa9a1f82b41.jpg', '40c4c620-3c26-3429-bb09-a94611ad622e.jpg', 'b08952ec-e954-3263-b09d-d3408b571953.png', '8021b1e8-d6b7-39ee-9e74-f5f8f64e5347.jpg', 'a1a27bdd-6de4-36cb-ba22-ffbf8d70b5dc.jpg', 'ce7297e4-aa0e-355c-b7c0-a193f038881b.jpg',
    'd22728f2-1e8c-399d-b50c-ccbe52f0f40b.jpg', '13f0e357-f587-3076-9888-4080ae574f69.jpg',
    'b58a6cf4-4742-3083-acd5-8667aaa06535.png', '87d49eb6-6245-3b96-86f0-0897975f9b68.png',
    'd5418725-caf4-3d97-93bc-3ed92385d7a0.jpg', '96e82859-8870-37fe-9daa-5ee986c82e6a.jpg',
    'b7d34971-603d-3939-91ce-e26ed5c86a2f.jpg', '5632c468-cf56-3f87-b465-e093980b1428.png',
    '43699c88-18a3-3a8d-9343-f5f51de78c45.jpg', '89fb1b44-e782-3bfb-b97e-1fdb39d728c8.jpg',
    '4ecabd37-7bec-36d2-b391-522c5525f593.jpg', '527149d4-a928-3431-8373-0ec4d77ef788.jpg',
    '080e9a4b-9b04-3e09-80dc-3d067d0b6043.jpg', '0c78e8ca-0d05-390e-b0d7-6e0c74f37dcf.jpg',
    'cb65f6a7-a3ce-32dd-96dc-805819972774.jpg', 'b5c42e9b-6807-3eb0-a45c-7ac9c3eda999.jpg',
    '4938befb-c30a-305e-921d-94081c67a3e5.jpg', 'f7e97914-ff24-3ecc-afda-dcd089059ef3.jpg',
    '1cba03f4-58da-3cf0-8929-85063d84c532.jpg', 'd59b1beb-0494-3044-b62d-1d44d47607cd.jpg',
    '797a7172-9fbc-3011-a51c-a042a2c6977a.jpg', '0303549b-06fe-3528-a645-2251077d5a22.jpg',
    '76da209d-09d9-3f56-add4-341581593061.jpg', '30027b29-30d3-3053-8d51-e041e3c6acf3.jpg',
    'eb7186bb-be99-3a3f-8240-1bec4831e048.jpg', '3c39d32a-4577-3cd0-ab3a-3b99d83a1b33.jpg',
    'ae5733e0-73f5-3851-9821-eff34c4a50cc.jpg', 'fbc71280-85f3-366f-9e47-2b39440b8ad8.jpg',
    '5359eed2-70c6-350f-a341-0dfd3a53200e.jpg', '35e3661e-c2ec-3d8e-9526-252136350b9d.jpg',
    'b0beaa2d-071d-30a4-96b8-1e58697190ef.jpg', '2b2ebcd7-7e82-3f4d-98d1-eac37fe818fb.jpg',
    '8bc32d48-8a73-32fd-baef-8539ebe461a2.jpg', '873cd1a7-e77e-39b2-8e94-be779fbecde7.png',
    '15d7d2f7-c60e-30be-b20f-0b3504f613c3.jpg', 'c7838ab8-7280-3578-b635-e8078f126688.png',
    'd1fc72cb-aff2-3943-99e4-51894507023f.jpg', '8d7c3bc2-027d-3424-9c03-080748dcb384.jpg',
    'c9634996-4ad9-3599-b2d9-31b26494fd9a.gif', '763e1be4-1c94-3583-b66b-ef9a399b9367.jpg',
    '94a9af6b-b4dc-3e10-872c-68073320d4fa.jpg', '0dbc3471-b465-32f7-a9f8-4a63546107e5.jpg',
    'a9f9eec5-c1f1-338e-ad3f-1cd36a2d7092.jpg', '5ecbdd2c-acf1-3883-8e3a-6b488fe79bc8.jpg',
    '2dbbeec0-7258-3ff8-b22e-1d895778061d.jpg', '27e3515e-e2bb-31ae-a321-10d613e7d079.jpg',
    '1feed1b7-dd01-3792-8cc1-ce0374cb4d5c.jpg', '829c5582-8917-38be-9586-29744c869268.jpg',
    'f7bf3283-946d-3aa2-9f26-a9b368da6ae6.jpg', 'efa37023-4ca6-3d72-aa9b-4d7a669e7894.jpg',
    '307a4670-0315-3f84-a3ef-01dddfbb904e.jpg', '71e48b1c-46e7-3d3e-ab3e-a0c40fafbd8a.jpg',
    'ee47d83b-9376-343e-8c61-200fc9f0c232.jpg', 'c9805ff3-798c-30f9-af53-a7f1625a1bb5.jpg',
    '5a9a8b9e-c4ba-3a94-ab4f-753c3c3bc828.jpg', 'ac50de2d-7382-3745-b3fb-00dc6d87edc0.jpg',
    '85d1b986-bd35-354e-b9c1-95261b657d7e.jpg', '70faee66-12f7-3fbf-b70d-3deed35b0156.jpg',
    'a336915f-1cc1-37e7-b5f0-32af9a9af42a.jpg', '402e0cb9-393a-36bb-aa29-5165d9c47763.jpg',
    'd1e06950-e899-3799-b910-b04ec9d1e601.jpg', 'b56ce5aa-8e3a-32e0-9269-073ed585789b.jpg',
    '390467d0-d8c6-31ef-9ce4-676478e10936.png', '84e705aa-e0be-3431-9458-06bb1724e8b3.jpg',
    '76fbdff8-7af7-362c-9ad5-c055ed2e34b8.png', 'dd5bfd62-7e4d-307f-8e7b-2694153b7402.jpg',
    '66e46eaf-23a3-3e6c-ad22-bc9ae8298560.jpg', '8929a6ed-83d6-3c4e-87f2-0061a33b5d79.jpg',
    '4f5a2af2-5afa-3c96-ab2b-15d739d702be.jpg', 'e09ec02b-a052-35f0-8c30-1c0b1089d38b.jpg',
    '55303241-978e-3672-a12d-b8fbb85f5dcc.jpg', 'de98d901-03b6-3cca-84ba-9a790efe0bfa.jpg',
    '492bce47-2d35-3b08-a9e1-c0befca035d9.jpg', '03e705d7-d41c-3366-93a7-7b649c2be7b5.jpg',
    '765b1c3f-419b-3a20-af72-f8213191de9b.jpg', 'f8dc19e3-c436-31df-8114-9872b671ed5d.jpg',
    '04e856b0-eebb-3d33-8ba7-f35676bd7a96.jpg', '98f5b906-7092-37d0-9091-576426d42f53.jpg',
    'de0c6c01-d61f-384f-8845-7fd9bfe0eb30.jpg', '02d63ea7-3d79-3f07-99c5-1560ee2e8d02.jpg',
    '33e12c0e-01df-3ad2-8e57-9d09e36577f8.jpg', '7282ccdd-9a5a-3b81-9c92-c61848567b01.jpg',
    'c5ec8b60-ec05-3496-b3b8-d8115c3e5c10.png', '3e8488f4-5ae8-3881-9681-b26383e795db.jpg',
    '1d4192fb-0cec-33a1-9780-a5d4711086b4.jpg', '5c5681ea-f35f-328d-bb94-8514cdad9591.jpg',
    '7a26228f-9828-30f0-9ddf-4ee33ab25fac.jpg', 'df436637-7298-32a8-a3f0-b29ccebf93b9.jpg',
    'cd9a4cee-30b6-38e8-8518-68ef124f6152.jpg', '9113cf38-c266-383f-a3a1-77aa74258567.jpg',
    '3c451355-1ea6-3c82-9a60-d19600d13f6f.jpg', '1ebbfbd6-0279-3e72-95f4-fa072653de6f.jpg',
    'b188dfa8-2f2f-34aa-b525-c4b905e48a14.jpg', '7e6f82e2-0c74-3b04-a883-a158578571db.png'
    );
    $randomfileName = array_rand($fileName_array);
    $fileName = $fileName_array[$randomfileName];

    $CategoryValues = array("entertainment", "general", "health", "science", "sports", "technology");
    $randomCategoryValues = array_rand($CategoryValues);
    $randomCategory = $CategoryValues[$randomCategoryValues];

    $LanguageValues = array("es", "fr", "he", "it", "nl", "no", "pt", "ru", "se", "ud", "zh");
    $randomLanguageValues = array_rand($LanguageValues);
    $randomLanguage = $LanguageValues[$randomLanguageValues];

    $CountryValues = array("ae", "ar", "at", "au", "be", "bg", "br", "ca", "ch", "cn", "co", "cu", "cz", "de", "eg", "fr", "gb", "gr", "hk", "hu", "id", "ie", "il", "in", "it", "jp", "kr", "lt", "lv", "ma", "mx", "my", "ng", "nl", "no", "nz", "ph", "pl", "pt", "ro", "rs", "ru", "sa", "se", "sg", "si", "sk", "th", "tr", "tw", "ua", "us", "ve", "za");
    $randomCountryValues = array_rand($CountryValues);
    $randomCountry = $CountryValues[$randomCountryValues];

    return [
        'identity' => str_slug($faker->company(10)),
        'name' => title_case($faker->company(10)),
        'title' => $faker->realText(100),
        'description' => $faker->realText(),
        'url' => $url,
        'urlToImage' => '/images/articles/',
        'publishedAt' => $faker->dateTime($max = 'now', $timezone = null),
        'content' => $faker->realText(),
        'category' => $randomCategory,
        'language' => $randomLanguage,
        'country' => $randomCountry,
        'diskImageFileName' => $fileName,
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTimeBetween($faker->dateTime($max = 'now', $timezone = null), '+10 years')
    ];
});
