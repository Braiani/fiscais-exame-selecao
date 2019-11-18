<?php

namespace App\Exceptions;

use Exception;

class RepositoryException extends Exception
{
    public $key        = 'repostiory';
    protected $message = 'Error on CRUD';
    protected $code    = 500;
}
