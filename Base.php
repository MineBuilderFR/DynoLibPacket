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

class Base extends inputPacketLib
{

    /** @var string */
    protected $baseName;

    /**
     * Base constructor.
     * @param string $baseName
     */
    public function __construct(string $baseName)
    {
        $this->baseName = $baseName;
    }

    /**
     * @param string $tableName
     * @param int[] $options Options in libOptions\TableOptionsInterface
     * @return Base
     */
    public function createTable(string $tableName, array $options = []): self
    {
        $this->put(self::TYPE_CREATE_TABLE, array(
            "baseName" => $this->baseName,
            "tableName" => $tableName,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $tableName
     * @param int[] $options Options in libOptions\TableOptionsInterface
     * @return Base
     */
    public function removeTable(string $tableName, array $options = []): self
    {
        $this->put(self::TYPE_REMOVE_TABLE, array(
            "baseName" => $this->baseName,
            "tableName" => $tableName,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $tableName
     * @param int[] $options Options in libOptions\TableOptionsInterface
     * @return Base
     */
    public function resetTable(string $tableName, array $options = []): self
    {
        $this->put(self::TYPE_RESET_TABLE, array(
            "baseName" => $this->baseName,
            "tableName" => $tableName,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $tableName
     * @param null|string $identifiable
     * @return Base
     */
    public function tableExist(string $tableName, ?string $identifiable = null): self
    {
        $this->put(self::TYPE_TABLE_EXIST, array(
            "baseName" => $this->baseName,
            "tableName" => $tableName,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }

    /**
     * @return Base
     */
    public function removeThisBase(): self
    {
        parent::removeBase($this->baseName);
        return $this;
    }

    /**
     * @param string $tableName
     * @return Table
     */
    public function getTable(string $tableName): Table
    {
        $table = new Table($this->baseName, $tableName);
        $table->finalInput = $this->finalInput;
        return $table;
    }

    /**
     * @param null|string $identifiable
     * @return Base
     */
    public function getAllTable(?string $identifiable = null): self
    {
        $this->put(self::TYPE_GET_ALL_TABLE, array(
            "baseName" => $this->baseName,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }
}