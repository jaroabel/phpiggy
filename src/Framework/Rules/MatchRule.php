<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RulesInterface;


class MatchRule implements RulesInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        $fieldOne = $data[$field];
        $fieldTwo = $data[$params[0]];

        return $fieldOne === $fieldTwo;
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Does not match password field";
    }
}
