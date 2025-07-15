<?php

require_once "Data/manager.php";

$user1 = new Greeting("Niltal Amal", "Backend Developer", "soon");
// $user1->username = "Niltal Amal";
// $user1->position = "Backend Developer";
// $user1->years = "soon";

$user1->GetComponentParent($user1->username, $user1->position, $user1->years);