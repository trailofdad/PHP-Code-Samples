<?php

require_once '../controller/ActorController.php';

$actorController = new ActorController();

if(isset($_GET['idUpdate']))
{
    $actorController->updateAction($_GET['idUpdate']);
}
elseif (isset($_POST['UpdateBtn']))
{
    $actorController->commitUpdateAction($_POST['editActorId'],$_POST['firstName'],$_POST['lastName']);
}
elseif (isset($_POST['AddBtn']))
{
    $actorController->addAction();
}
elseif (isset($_POST['CommitAddBtn']))
{
    $actorController->commitAddAction($_POST['firstName'], $_POST['lastName']);
}
elseif (isset($_GET['deleteActor']))
{
    $actorController->deleteAction($_GET['deleteActor']);
}
elseif (isset($_POST['SearchBtn']))
{
    $actorController->searchAction($_POST['SearchTxt']);
}
else
{
    $actorController->displayAction();
}

?>