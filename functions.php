<?php

    function checkForClickBait() {

        $clickBait = strtolower( $_POST["clickbait_headline"] );

        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never belive",
            "hack",
            "epic",
            "unbelievable"

        );
        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "compleatly normal",
            "ineffective",
            "method",
            "is no difference then the others",
            "you won't really suprised by",
            "slightly improve",
            "boring",
            "normal"
        );
        $honestHeadline = str_replace($a, $b, $clickBait);

        return array($clickBait, $honestHeadline);
    }

    function displayHonestHeadline( $x, $y) {
        echo "<strong class='text-danger'> Original Headline</strong><h4>".ucwords($x)."</h4><hr>";
        echo "<strong class='text-success'>Honest Headline</strong><h4>" . ucwords($y) . "</h4>";
    }
?>  