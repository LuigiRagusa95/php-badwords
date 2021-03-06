<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>php-badwords</title>
    <link rel="stylesheet" href="./css/main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="title">Hide bad words</h1>
        <p class="paragraph">
            <?php
            $bad_word = "";
            $paragraph = "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.";

            $paragraph_len = strlen($paragraph);

            if (isset($_GET['badword'])) {
                $bad_word = $_GET['badword'];
                echo preg_replace('/\b' . $bad_word . '\b/', "<span class='marker'>***</span>", $paragraph);
            } else {
                echo $paragraph;
            }
            ?>
        </p>

        <span class="count"><strong>Chars Count: </strong>&nbsp; <?php echo $paragraph_len; ?></span>

        <form action="#" method="GET" class="form">
            <label class="label" for="input">You can hide a bad word</label>
            <input type="text" placeholder="Hide a bad word" id="input" name="badword" autocomplete="off">
            <button type="submit">Hide</button>
        </form>
    </div>

</body>

</html>