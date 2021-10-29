<?php
include "User.php";
$user1 = new User("truongvu@gmail.com","truong",2);
echo $user1->isAdmin()."</br> - ";
$user2 = new User("truongdz@gmail.com","truongDZ",1);
 echo $user2->isAdmin()."</br> - ";