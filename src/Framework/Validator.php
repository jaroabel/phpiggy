<?php

declare(strict_types=1);

namespace Framework;

use Framework\Contracts\RulesInterface;

class Validator
{
    private array $rules = [];

    public function add(string $alias, RulesInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }

    public function validate(array $formDeta, array $fields)
    {
        foreach ($fields as $fieldName => $rules) {
            foreach ($rules as $rule) {
                $ruleValidator = $this->rules[$rule];

                if ($ruleValidator->validate($formDeta, $fieldName, [])) {
                    continue;
                }

                echo "Error";
            }
        }
    }
}
