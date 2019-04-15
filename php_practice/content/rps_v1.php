<?php
    $moves = array("Rock", "Paper", "Scissors");
    $output = "<h4>Results</h4>";
    $winner = array("Rock"=>"Scissors",
                    "Scissors"=>"Paper",
                    "Paper"=>"Rock");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $player = $_POST['move'];
        $machine = $moves[array_rand($moves)];
        $output .= "<p>Your board<br><kbd>$player</kbd></p>";
        $output .= "<p>Computer's board<br><kbd>$machine</kbd></p>";
        if ($player == $machine) {
            $output .= "<p>Tie Game!</p>";
        } else {
            $output .= ($winner[$player] == $machine)
                            ?  "<p>You Win!</p>"
                            :  "<p>You Lose!</p>";
        }
    }
?>

<form method="POST">

    <h4>Your Move</h>
    <select size="3" name="move" required>
        <option value="Rock">Rock</option>
        <option value="Paper">Paper</option>
        <option value="Scissors">Scissors</option>
    </select>
    <input type="submit" value="Select and Play"/>
</form>
<aside><?= $output ?></aside>


