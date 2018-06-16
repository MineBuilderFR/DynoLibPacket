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

use dynoLibPacket\libInterface\TypeInterface;

class inputPacketLib implements TypeInterface
{

    /** @var array */
    protected $finalInput = [];

    /**
     * @param string $baseName
     * @param int[] $options Options in libOptions\BaseOptionsInterface
     * @return inputPacketLib
     */
    public function createBase(string $baseName, array $options = []): self
    {
        $this->put(self::TYPE_CREATE_BASE, array(
            "baseName" => $baseName,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $type
     * @param array $value
     * @return inputPacketLib
     * Do not use this if you do not know how !
     */
    public function put(string $type, array $value): self
    {
        array_push($this->finalInput, array(
            $type => $value
        ));
        return $this;
    }

    /**
     * @param string $baseName
     * @param int[] $options Options in libOptions\BaseOptionsInterface
     * @return inputPacketLib
     */
    public function removeBase(string $baseName, array $options = []): self
    {
        $this->put(self::TYPE_REMOVE_BASE, array(
            "baseName" => $baseName,
            "options" => $options
        ));
        return $this;
    }

    /**
     * @param string $baseName
     * @param null|string $identifiable
     * @return inputPacketLib
     */
    public function baseExist(string $baseName, ?string $identifiable = null): self
    {
        $this->put(self::TYPE_BASE_EXIST, array(
            "baseName" => $baseName,
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }

    /**
     * @return string
     */
    protected static function uniqueIdentifiable(): string
    {
        return uniqid();
    }

    /**
     * @param string $baseName
     * @return Base
     */
    public function getBase(string $baseName): Base
    {
        $base = new Base($baseName);
        $base->finalInput = $this->finalInput;
        return $base;
    }

    /**
     * @param null|string $identifiable
     * @return inputPacketLib
     */
    public function getAllBase(?string $identifiable = null): self
    {
        $this->put(self::TYPE_GET_ALL_BASE, array(
            "identifiable" => $identifiable ?? self::uniqueIdentifiable()
        ));
        return $this;
    }

    /**
     * @return string
     */
    public final function finalInput(): string
    {
        return json_encode($this->finalInput);
    }
}