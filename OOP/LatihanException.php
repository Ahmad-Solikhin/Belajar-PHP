<?php
/*
Untuk membuat class exception sendiri class tersebut harus extends class Exception
Exception biasanya terjadi di function
*/

class ValidationException extends Exception
{
}

class LoginRequest
{
    var string $username;
    var string $password;
}
