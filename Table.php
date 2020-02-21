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
 * @copyright (c) 2020
 * @author Y&SS-YassLV
 */

declare(strict_types=1);

namespace dynoLibPacket;


class Table extends Base
{
    /** @var string */
    protected $tableName;

    /**
     * Table constructor.
     * @param string $baseName
     * @param string $tableName
     */
    public function __construct(string $baseName, string $tableName)
    {
        parent::__construct($baseName);
        $this->tableName = $tableName;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function getArray(string $key, ?string $identifiable = null, array $options = []): self
    {
        $this->put(self::TYPE_GET_ARRAY, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable(),
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function getString(string $key, ?string $identifiable = null, array $options = []): self
    {
        $this->put(self::TYPE_GET_STRING, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable(),
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function getFloat(string $key, ?string $identifiable = null, array $options = []): self
    {
        $this->put(self::TYPE_GET_FLOAT, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable(),
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function getBool(string $key, ?string $identifiable = null, array $options = []): self
    {
        $this->put(self::TYPE_GET_BOOL, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable(),
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function getInt(string $key, ?string $identifiable = null, array $options = []): self
    {
        $this->put(self::TYPE_GET_INT, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable(),
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param null|string $identifiable
     * @return Table
     */
    public function getAllKeyValue(?string $identifiable = null): self
    {
        $this->put(self::TYPE_GET_ALL_KEY_VALUE, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function putString(string $key, string $value, array $options = []): self
    {
        $this->put(self::TYPE_PUT_STRING, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "value" => $value,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param int $value
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function putInt(string $key, int $value, array $options = []): self
    {
        $this->put(self::TYPE_PUT_INT, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "value" => $value,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param float $value
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function putFloat(string $key, float $value, array $options = []): self
    {
        $this->put(self::TYPE_PUT_FLOAT, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "value" => $value,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param bool $value
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function putBool(string $key, bool $value, array $options = []): self
    {
        $this->put(self::TYPE_PUT_BOOL, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "value" => $value,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param array $value
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function putArray(string $key, array $value, array $options = []): self
    {
        $this->put(self::TYPE_PUT_ARRAY, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "value" => $value,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param int[] $options Options in libOptions\KeyValueOptionsInterface
     * @return Table
     */
    public function removeKey(string $key, array $options = []): self
    {
        $this->put(self::TYPE_REMOVE_KEY, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $key
     * @param null|string $identifiable
     * @return Table
     */
    public function keyExist(string $key, ?string $identifiable = null): self
    {
        $this->put(self::TYPE_KEY_EXIST, array(
            "baseName" => $this->baseName,
            "tableName" => $this->tableName,
            "key" => $key,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }

    /**
     * @param string $key
     * @return ValueMath
     */
    public function valueMath(string $key): ValueMath
    {
        $valueMath = new ValueMath($this->baseName, $this->tableName, $key);
        $valueMath->finalInput = $this->finalInput;
        return $valueMath;
    }

    /**
     * @return Table
     */
    public function removeThisTable(): self
    {
        parent::removeTable($this->tableName);
        return $this;
    }

    /**
     * @return Table
     */
    public function resetThisTable(): self
    {
        parent::resetTable($this->tableName);
        return $this;
    }
}