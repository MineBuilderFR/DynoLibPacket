<?php
/**
 * ________
 * ___  __ \____  ______________
 * __  / / /_  / / /_  __ \  __ \
 * _  /_/ /_  /_/ /_  / / / /_/ /
 * /_____/ _\__, / /_/ /_/\____/
 *         /____/
 *
 * This program is free: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) 2018
 * @author Y&SS-MineBuilderFR
 */

declare(strict_types=1);

namespace dynoLibPacket;

use dynoLibPacket\libInterface\MathInterface;

class ValueMath extends Table implements MathInterface
{
    /** @var string */
    private $key;

    /**
     * ValueMath constructor.
     * @param string $baseName
     * @param string $tableName
     * @param string $key
     */
    public function __construct(string $baseName, string $tableName, string $key)
    {
        parent::__construct($baseName, $tableName);
        $this->key = $key;
    }

    /**
     * @param float|int $x
     * @return ValueMath
     */
    public function multiplication($x): self
    {
        $this->put(self::TYPE_VALUE_MATH, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $this->key,
            "math" => self::MULTIPLICATION,
            "x" => $x
        ));
        return $this;
    }

    /**
     * @param float|int $x
     * @return ValueMath
     */
    public function division($x): self
    {
        $this->put(self::TYPE_VALUE_MATH, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $this->key,
            "math" => self::DIVIDE,
            "x" => $x
        ));
        return $this;
    }

    /**
     * @param float|int $x
     * @return ValueMath
     */
    public function addition($x): self
    {
        $this->put(self::TYPE_VALUE_MATH, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $this->key,
            "math" => self::ADDITION,
            "x" => $x
        ));
        return $this;
    }

    /**
     * @param float|int $x
     * @return ValueMath
     */
    public function subtraction($x): self
    {
        $this->put(self::TYPE_VALUE_MATH, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $this->key,
            "math" => self::SUBTRACTION,
            "x" => $x
        ));
        return $this;
    }

}