<?php 
// view.php
class UserView {
    public function output($username) {
        echo "Username: $username";
    }

    public function renderForm() {
        // Display a form for user input
        echo '<form method="post" action="index.php">';
        echo '<input type="text" name="username" placeholder="Enter username">';
        echo '<input type="submit" value="Submit">';
        echo '</form>';
    }
}
