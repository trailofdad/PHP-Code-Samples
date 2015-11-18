<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Customers</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <body>
        <?php
            if(!empty($lastOperationResults)):
        ?>
        <h2><?php echo $lastOperationResults; ?></h2>
        <?php
            endif;
        ?>
        <h1>Current Actors:</h1>
        <table class="table-condensed" style="border: 1px grey solid">
            <thead style="border: 1px grey solid">
                <tr style="border: 1px grey solid">
                    <th style="border: 1px grey solid">Actor ID</th>
                    <th style="border: 1px grey solid">First Name</th>
                    <th style="border: 1px grey solid">Last Name</th>
                    <th style="border: 1px grey solid">Update</th>
                    <th style="border: 1px grey solid">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr style="border: 1px grey solid">
                            <td style="border: 1px grey solid"><?php echo $actor->getID(); ?></td>
                            <td style="border: 1px grey solid"><?php echo $actor->getFirstName(); ?></td>
                            <td style="border: 1px grey solid"><?php echo $actor->getLastName(); ?></td>
                            <td style="border: 1px grey solid">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idUpdate=<?php echo $actor->getID(); ?>">
                                    <img src="images/edit_icon.png" height="25px" width="25px"/>
                                </a>
                            </td>
                            <td style="border: 1px grey solid">
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?deleteActor=<?php echo $actor->getID(); ?>"  onclick="return confirm('Really Delete?')">
                                <img src="images/delete_icon.png" height="25px" width="25px"/>
                            </a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
            <tfoot></tfoot>
        </table>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" name="AddBtn" id="AddBtn" value="Add"/>
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <input type="text" name="SearchTxt" id="SearchTxt"/>
            <input type="submit" name="SearchBtn" id="SearchBtn" value="Search"/>
        </form>
    </body>
</html>
