<?php

namespace BelajarPHPMVC\Middleware;

interface Middleware
{
    function before(): void;
}