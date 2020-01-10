<?php
require_once __DIR__."../model/Publisher.php";

interface PublisherRepo
{
    public function setConnection(mysqli $conne);


    public function addPublisher(Publisher $publisher):bool;

    public function deletePublisher($publisherID):bool;

    public function updatePublisher(Publisher $publisher):bool;

    public function searchPublisher($publisherID);

    public function getAllPublisher():array;
}