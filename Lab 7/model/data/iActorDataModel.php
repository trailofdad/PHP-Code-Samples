<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
interface iActorDataModel
{
    public function connectToDB();

    public function closeDB();

    public function selectActors();
    
    public function selectActorById($ActorID);

    public function fetchActors();
    
    public function updateActor($ActorID,$first_name,$last_name);

    public function addActor($first_name,$last_name);

    public function deleteActor($ActorID);

    public function searchActors($search);

    // field access functions
    public function fetchActorID($row);

    public function fetchActorFirstName($row);

    public function fetchActorLastName($row);
}
?>
