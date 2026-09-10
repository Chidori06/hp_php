<?php

$data = file_get_contents("https://hp-api.onrender.com/api/characters");
$dataDecode = json_decode($data, true);

$nbPersonnages = 0;

foreach ($dataDecode as $chara) {
    if (!empty($chara['image'])) {
        $nbPersonnages++;
    }
}


function getBorder($gender)
{
    if ($gender === 'male') {
        return 'border-primary';
    } elseif ($gender === 'female') {
        return 'border-danger';
    }

    return 'border-dark';
}

function getHouse($house)
{
    switch ($house) {
        case "Gryffindor":
            return 'https://cdn.discordapp.com/attachments/1546429605630709780/1547251492883406958/Gryffindor.jpeg?ex=6aa2bdbe&is=6aa16c3e&hm=52e406254586702d1fd987b814ea3e4ab38bf1e6a3c63865ad17385147e1bf52&';

        case "Slytherin":
            return 'https://cdn.discordapp.com/attachments/1546429605630709780/1547251492417708123/Slytherin.jpeg?ex=6aa2bdbe&is=6aa16c3e&hm=4c562c942da806934557c00cc4323dfadedfc4579a2a4d56ce7d4db5e9675471&';

        case "Hufflepuff":
            return 'https://cdn.discordapp.com/attachments/1546429605630709780/1547251493558812762/Hufflepuff.jpeg?ex=6aa2bdbe&is=6aa16c3e&hm=c3a3a76137fc193e99cc2284ff312c40be30698f79eff1143f1fc0d6b3e454d2&';

        case "Ravenclaw":
            return 'https://cdn.discordapp.com/attachments/1546429605630709780/1547251494011666542/Ravenclaw.jpeg?ex=6aa2bdbe&is=6aa16c3e&hm=5fc8425ba578fa0044dc3e6b27c8952e1a8b78f751a63fa7c1ab7cd32552fafb&';

        default:
            return '';
    }
}

function getAge($yearOfBirth)
{
    if (empty($yearOfBirth)) {
        return null;
    }

    $currentYear = date('Y');

    return $currentYear - $yearOfBirth;
}

?>