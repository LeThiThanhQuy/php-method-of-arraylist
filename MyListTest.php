<?php
include "MyList.php";
$mylist = new MyList();
$mylist->add(0,8);
$mylist->add(1,"hello");
$mylist->size();

echo $mylist->size();