<?php
/**
 * Main
 * 
 * This is the main page, where the player's
 * stats are located.
 * 
 **/
 
/* Require the Header file */
require_once("./header.php");

/* Protect this page from users not logged in */
login_protect();

/* Tabular display of player statistics */
?>
<table>
    <tr>
        <td><strong>Username:</strong></td>
        <td colspan="2"><?php echo $user['username']; ?></td>
    </tr>
    <tr>
        <td><strong>E-mail:</strong></td>
        <td colspan="2"><?php echo $user['email']; ?></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td><strong>Overall Rank:</strong></td>
        <td colspan="2">#<?php echo number_format($rank['overall']); ?></td>
    </tr>
    <tr>
        <td style="width: 20%;"><strong>Attack:</strong></td>
        <td style="width: 20%;"><?php echo number_format($stats['attack']); ?></td>
        <td style="width: 20%;">Rank #<?php echo number_format($rank['attack']); ?></td>
    </tr>
    <tr>
        <td><strong>Defense:</strong></td>
        <td><?php echo number_format($stats['defense']); ?></td>
        <td>Rank #<?php echo number_format($rank['defense']); ?></td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td><strong>Gold:</strong></td>
        <td colspan="2"><?php echo number_format($stats['gold']); ?></td>
    </tr>
    <tr>
        <td><strong>Income:</strong></td>
        <td colspan="2"><?php echo number_format($stats['income']); ?></td>
    </tr>
    <tr>
        <td><strong>Food:</strong></td>
        <td colspan="2"><?php echo number_format($stats['food']); ?></td>
    </tr>
    <tr>
        <td><strong>Farming:</strong></td>
        <td colspan="2"><?php echo number_format($stats['farming']); ?></td>
    </tr>
    <tr>
        <td><strong>Battle Turns:</strong></td>
        <td colspan="2"><?php echo number_format($stats['turns']); ?></td>
    </tr>
</table>
<?php
/* Require the Footer file */
require_once("./footer.php");
?>