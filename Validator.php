<?php

class Validator
{
    public function string($value): bool
    {
        return strlen(trim($value)) === 0;
    }
}