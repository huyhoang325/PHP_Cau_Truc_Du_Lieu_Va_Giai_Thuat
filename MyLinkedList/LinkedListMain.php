<?php
include_once ('LinkList.php');

$linkedList = new MyLinkList();

$linkedList->insertFirst(12);

$linkedList->insertFirst(34);

$linkedList->insertLast(56);

$linkedList->insertLast(78);

$linkedList->deleteNode(34);

$linkedList->insertFirst(25);

$linkedList->reverseList();

$totalNodes = $linkedList->totalNodes();

$linkData = $linkedList->readList();

echo $totalNodes."<br>";

echo implode ('-' , $linkData);