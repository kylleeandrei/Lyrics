<?php
$title = "Don't Dream It's Over";
$artist = "Crowded House";
$mood = "hopeful";

$nouns = ["road", "freedom", "war", "hole", "roof", "paper", "sky", "attack", "battle"];
$verbs = ["dream", "build", "towing", "walking", "know", "toss", "lose", "win", "turn", "see", "stop"];
$adjectives = ["wide", "cruel", "strong", "warm", "free"];

$verse1 = [
    "There is freedom within, there is freedom without,",
    "Try to catch the deluge in a paper cup."
];

$verse2 = [
    "Now I'm towing my car, there's a hole in the roof,",
    "My possessions are causing me suspicion, but there's no proof."
];

$verse3 = [
    "Now I'm walking again to the beat of a drum,",
    "And I'm counting the steps to the door of your heart."
];

$chorus = [
    "Hey now, hey now, Don't dream it's over,",
    "Hey now, hey now, When the world comes in,",
    "They come, they come, To build a wall between us,",
    "You know, they won't win."
];

$verseCount = 3;
$chorusCount = 2;
$totalSongSelection = $verseCount + $chorusCount;
$sectionMessage = "Number of selections: " . $totalSongSelection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    text-align: center;
    margin: 0;
    padding: 20px;
    background: #111;
    color: #fff;
    font-family: Arial, sans-serif;
}

h1 {
    font-size: 40px;
    font-weight: bold;
}

h2 {
    font-size: 22px;
    color: #c9c9c9;
    margin-top: -5px;
}

h3 {
    margin-top: 25px;
    font-size: 18px;
    color: #1db954;
}

p {
    line-height: 1.6;
    font-size: 15px;
    
}

strong {
   color: #808080;

}

    </style>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title; ?></title>
</head>
<body>



<h1><?php echo $title; ?></h1>
<h2>by <?php echo $artist; ?></h2>
<p><em>Mood: <?php echo $mood; ?></em></p>

<h3>Verse 1</h3>
<p><?= $verse1[0]; ?></p>
<p><?= $verse1[1]; ?></p>

<h3>Verse 2</h3>
<p><?= $verse2[0]; ?></p>
<p><?= $verse2[1]; ?></p>

<h3>Verse 3</h3>
<p><?= $verse3[0]; ?></p>
<p><?= $verse3[1]; ?></p>

<h3>Chorus</h3>
<p><?= $chorus[0]; ?></p>
<p><?= $chorus[1]; ?></p>
<p><?= $chorus[2]; ?></p>
<p><?= $chorus[3]; ?></p>

<h3>Chorus</h3>
<p><?= $chorus[0]; ?></p>
<p><?= $chorus[1]; ?></p>
<p><?= $chorus[2]; ?></p>
<p><?= $chorus[3]; ?></p>

<h2>Song Description</h2>
<p><?= $sectionMessage; ?></p>

</body>
</html>

