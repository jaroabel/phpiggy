<?php

namespace Framework\Rules;

use Framework\Contracts\RulesInterface;

class NumericRule implements RulesInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        return is_numeric($data[$field]);
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Only numbers allowed";
    }
}
