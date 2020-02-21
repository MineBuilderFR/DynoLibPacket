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

namespace dynoLibPacket\libInterface;


interface TypeInterface
{

    public const TYPE_CREATE_BASE = "CreateBase";
    public const TYPE_CREATE_TABLE = "CreateTable";
    public const TYPE_REMOVE_BASE = "RemoveBase";
    public const TYPE_REMOVE_TABLE = "RemoveTable";
    public const TYPE_RESET_TABLE = "ResetTable";
    public const TYPE_REMOVE_KEY = "RemoveKey";

    public const TYPE_GET_STRING = "getString";
    public const TYPE_GET_INT = "getInt";
    public const TYPE_GET_FLOAT = "getFloat";
    public const TYPE_GET_BOOL = "getBool";
    public const TYPE_GET_ARRAY = "getArray";
    public const TYPE_GET_ALL_BASE = "getAllBase";
    public const TYPE_GET_ALL_TABLE = "getAllTable";
    public const TYPE_GET_ALL_KEY_VALUE = "getAllKeyValue";

    public const TYPE_PUT_STRING = "putString";
    public const TYPE_PUT_INT = "putInt";
    public const TYPE_PUT_FLOAT = "putFloat";
    public const TYPE_PUT_BOOL = "putBool";
    public const TYPE_PUT_ARRAY = "putArray";

    public const TYPE_TABLE_EXIST = "tableExist";
    public const TYPE_KEY_EXIST = "keyExist";
    public const TYPE_BASE_EXIST = "baseExist";

    public const TYPE_VALUE_MATH = "valueMath";
}