<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RulesInterface;


class EmailRule implements RulesInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        return (bool) filter_var($data[$field], FILTER_VALIDATE_EMAIL);
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Invalid email";
    }
}
