<?php
require_once __DIR__ . "../model/Publisher.php";

interface PublisherBO
{
    public function addPublisher(Publisher $publisher);

    public function updatePublisher(Publisher $publisher);

    public function deletePublisher($id);

    public function searchPublisher($id);

    public function getAllPublisher();
}