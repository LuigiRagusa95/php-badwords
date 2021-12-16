<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            font-family: "Inter UI", sans-serif;
        }

        .container {
            margin: 0 auto;
            max-width: 1200px;
        }

        .title {
            padding: 2rem;
            color: #222222;
            font-size: 2rem;
            line-height: 2.5rem;
        }

        .paragraph {
            color: #333333;
            padding: 0 2rem;
            font-size: 1rem;
            line-height: 1.5rem;
            letter-spacing: .02rem;
        }

        .count {
            width: 100%;
            display: flex;
            color: #757575;
            padding: 2rem 2rem;
            font-size: 0.875rem;
            justify-content: flex-end;
        }

        .marker {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Hide bad words</h1>
        <p class="paragraph">
            <?php
            $bad_word = htmlspecialchars($_GET["word"]);
            $paragraph = "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.";

            $paragraph_len = strlen($paragraph);
            echo str_replace($bad_word, "<span class='marker'>****</span>", $paragraph);

            ?>
        </p>

        <span class="count"><strong>Chars Count: </strong>&nbsp; <?php echo $paragraph_len; ?></span>
    </div>

</body>

</html>