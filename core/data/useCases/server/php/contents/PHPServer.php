<?php


namespace Core\data\useCases\server\php\contents;

use Core\domain\protocols\server\php\contents\ServerPHPGetContents;

class PHPServer implements ServerPHPGetContents
{

    public function loadContents(): string
    {
        return file_get_contents('php://input');
    }
}