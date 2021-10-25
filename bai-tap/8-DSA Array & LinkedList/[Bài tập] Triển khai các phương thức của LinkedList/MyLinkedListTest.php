<?php
include 'MyLinkedList.php';
$linkedList = new MyLinkedList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes, "<br>";
echo implode('-', $linkData);