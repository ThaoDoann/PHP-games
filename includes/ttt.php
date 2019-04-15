<?php
session_start();
//TODO: don't forget to validate html after page rendered (View page source)
// code beautifier https://www.10bestdesign.com/dirtymarkup/
// color pallette https://www.10bestdesign.com/color-palette-generator/
echo '<!DOCTYPE html>
      <html lang="en">
      <head>
        <title>TicTacToe</title>
        <meta charset="utf-8">
      <style>
      body {
        text-align: center;
        width: 300px;
        margin: auto;
      }
      table {
          width:100px;
          margin: 10px auto 0;
      }
      td {
          width: 33px;
          height: 33px;
          text-align: center;
          background: lightblue;
      }
      input {
          display: block;
          width: 100%;
          height: 100%;
          margin: 0;
          padding: 0;
          border: none;
      }
      input[name=reset] {
          width: 100px;
          padding: 5px;
          margin: auto;
      }
      pre {
          text-align: initial;
      }
      </style>
      </head>
      <body>
        <h1>Play Tic Tac Toe!</h1>
   
';
// phpfiddle disables session_destroy function
// to reset, uncomment the next four lines and run; then reload tutorial set page
//unset($_SESSION['who']);
//unset($_SESSION['board']);
//unset($_SESSION['win']);
//unset($_SESSION['numOfMoves']);
 
play();
   
function play() {
 
    $win = -1;
    $numOfMoves = 0;
    $playToken = "XOT"; // 0 means player X, 1 means  player O, 2 means Tie
    if(isset($_SESSION['who']))
        $who = $_SESSION['who'];
    if(!isset($who)) {
        $who="0"; // X start the game
        $_SESSION['board'] = "222222222"; // current cell values on the board
        $_SESSION['win'] = -1; // no winner yet
        $_SESSION['numOfMoves'] = $numOfMoves;
    }
    $endGame = $_SESSION['win'];
    $numOfMoves = $_SESSION['numOfMoves'];
    if($endGame == -1) {
        $board= $_SESSION['board'];
        if(isset($_GET['curCell']))
            $data = $_GET['curCell']; //identify which button was submitted    
        if(isset($data)) {
            //EXAMINE: print_r ($data);
            $curPos = $data[0]; // get the actual button clicked. 0 to 8 correspond to respective cell
            $board[$curPos] = $who; // set our game's data with player mark
            $who = ($who+1)%2; // switch the player turn
        }
        $outwho = substr($playToken,$who,1);
       
        echo '<form method="GET"><table>';
           
        $output = "";
        for( $i = 0; $i < 9; $i++ ) {
            $curCell = $i;
            if ($i%3 == 0) $output .= "<tr>";          
            switch ($board[$i]) {
                case 2:
                    $output .= '<td><input type="submit" name="curCell" value="' . $i . '"></td>';
                    break;
                case 0:
                    $output .= "<td>X</td>";   
                    break;
                case 1:
                    $output .= "<td>O</td>";   
                    break;
                default:
                    $output .= "<td>?</td>";
            }  
            if ($i%3 == 3) $output .= "$i</tr>";
        }
        $output .= "</table></form><br>";
        echo $output;
 
        //TODO: identify a tie
        //check rows
        for( $j = 0; $j < 3; $j++ ) {
            if(substr($board,3*$j,3) == "000")
                $win=0;
            if(substr($board,3*$j,3) == "111")
                $win=1;
        }
        //check columns
        for( $j = 0; $j < 3; $j++ ) {
            if ( $board[$j] == $board[$j+3] && $board[$j+3] == $board[$j+6] ) {
                if( $board[$j+6] == '0')
                    $win=0;
                elseif ( $board[$j+6] == '1')
                    $win=1;
            }  
        }  
        // check first diagonal
        if ( $board[0]==$board[4] && $board[4]==$board[8] ) {
            if( $board[8]=='0' )
                $win=0;
            elseif ( $board[8]=='1' )
                $win=1;
        }  
        //check second diagonal
        if ( $board[2] == $board[4] && $board[4] == $board[6] ) {
            if( $board[6]=='0' )
                $win=0;
            elseif ( $board[6]=='1' )
                $win=1;
        }
 
        if ($win == 0 || $win == 1) {
            echo "<p>" . substr($playToken,$win,1) . " wins</p>";
            // destroy session here
        } else if ($numOfMoves > 8) {
                echo "<p>It is a draw!</p>";
                // destroy session here
        } else {   
            echo "<p>" . $outwho . " is playing</p>";
            $numOfMoves++;         
            //update session variables so we can access it next time with current game info...
            $_SESSION['board'] = $board;
            $_SESSION['who'] = $who;
            $_SESSION['win'] = $win;
            $_SESSION['numOfMoves'] = $numOfMoves;
            echo "<pre>";
            var_dump($_SESSION);
            echo "</pre>";
        }
    }
} // end of function play()
echo '</body></html>';
?>