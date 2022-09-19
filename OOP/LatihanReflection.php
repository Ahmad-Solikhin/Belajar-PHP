<?php
/*
Reflection digunkana untuk membaca struktur kode pada saat aplikasi sedang berjalan
Biasanya ini digunkan saat membuat framework maupun library

Studi kasus membuat Validation Framework
Mengecek properties null atau engga
*/

//Tanpa reflection, jika validasi lebih dari 1 harus dibuat secara manual

class ValidationUtil
{

    static function validate(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->password)) {
            throw new ValidationException("Password is null");
        } elseif (!isset($loginRequest->username)) {
            throw new ValidationException("Username is Null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        var_dump($properties);
        var_dump($request);

        foreach ($properties as $prop) {
            var_dump($prop);
            if (!$prop->isInitialized($request)) {
                throw new ValidationException("$prop->name is not set\n");
            } elseif (is_null($prop->getValue($request))) {
                throw new ValidationException("$prop->name is null\n");
            } elseif (trim($prop->getValue($request)) == "") {
                throw new ValidationException("$prop->name is blank\n");
            }
        }
    }
}

//kalo pake reflection
require_once "Validasi.php";
require_once "LatihanException.php";

$request = new LoginRequest();
$request->username = "";
$request->password = "Gayuh";

try {
    ValidationUtil::validateReflection($request);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}\n";
}
