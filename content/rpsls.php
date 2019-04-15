<?php
    $moves = array("Rock", "Paper", "Scissors", "Lizard", "Spock");
    $output = "<h4>Results</h4>";
    $winner = array("Rock"=> array("Paper", "Spock"),
                    "Paper"=> array("Scissors", "Lizard"),
                    "Scissors"=> array("Spock", "Rock"),
                    "Lizard"=> array("Rock", "Scissors"),
                    "Spock"=> array("Lizard", "Paper"),
                );
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $player = $_POST['move'];
        $machine = $moves[array_rand($moves)];
        $output .= "<p>Your board<br><kbd>$player</kbd></p>";
        $output .= "<p>Computer's board<br><kbd>$machine</kbd></p>";
        if ($player == $machine) {
            $output .= "<p>Tie Game!</p>";
        } else {
            $output .= ($winner[$machine][0] == $machine || $winner[$machine][1] == $player)
                            ?  "<p>You Win!</p>"
                            :  "<p>You Lose!</p>";
        }
    }
?>

<form method="POST">

    <h4>Your Move</h4>
    <select size="3" name="move" required>
        <option value="Rock">Rock</option>
        <option value="Paper">Paper</option>
        <option value="Scissors">Scissors</option>
        <option value="Lizard">Lizard</option>
        <option value="Spock">Spock</option>
    </select>
    <input type="submit" value="Select and Play"/>
</form>
<aside><?= $output ?></aside>