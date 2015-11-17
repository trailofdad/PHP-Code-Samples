<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Actor Add</title>
    </head>
    <body>
        <h1>Add Actor:</h1>
        <form id="formAdd" name="formAdd" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
		<label>First Name:
                    <input type="text" name="firstName" id="firstName"/>
                </label>
            </p>
            <p>
		<label>Last Name:
                    <input type="text" name="lastName" id="lastName"/>
                </label>
            </p>
            <p>
                <input type="submit" name="CommitAddBtn" id="CommitAddBtn" value="Add" onclick="return confirm('Really Add?')"/>
            </p>
        </form>
    </body>
</html>