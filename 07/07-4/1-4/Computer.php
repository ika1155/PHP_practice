<?php

class Computer implements IComputer
{
    public function playGame()
    {
        echo '<p>ゲームをする</p>';
    }

    public function browseWeb()
    {
        echo '<p>ウェブを閲覧する</p>';
    }

}
?>