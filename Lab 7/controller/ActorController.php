<?php

require_once('../model/ActorModel.php');

class ActorController
{
    public $model;
    
    public function __construct()
    {
        $this->model = new ActorModel();
    }
    
    public function displayAction()
    {
        $arrayOfActors = $this->model->getAllActors();

        include '../view/displayActors.php';
    }

    public function updateAction($actorID)
    {
        $currentActor = $this->model->getActor($actorID);

        include '../view/editActor.php';
    }

    public function commitUpdateAction($actorID,$fName,$lName)
    {
        $lastOperationResults = "";

        $currentActor = $this->model->getActor($actorID);

        $currentActor->setFirstName($fName);
        $currentActor->setLastName($lName);

        $lastOperationResults = $this->model->updateActor($currentActor);

        $arrayOfActors = $this->model->getAllActors();

        include '../view/displayActors.php';
    }

        public function addAction()
        {
            include '../view/addActor.php';
        }

    public function commitAddAction($fName,$lName)
    {
        $lastOperationResults = "";

        $currentActor = new Actor(null,$fName,$lName);

        $currentActor->setFirstName($fName);
        $currentActor->setLastName($lName);

        $lastOperationResults = $this->model->addActor($currentActor);

        $arrayOfActors = $this->model->getAllActors();

        include '../view/displayActors.php';
    }

    public function deleteAction($actorID)
    {
        $lastOperationResults = "";

        $currentActor = $this->model->getActor($actorID);


        $lastOperationResults = $this->model->deleteActor($currentActor);

        $arrayOfActors = $this->model->getAllActors();

        include '../view/displayActors.php';

    }

    public function searchAction($search)
    {
        $arrayOfActors = $this->model->searchActor($search);

        include '../view/displayActors.php';
    }

}

?>
