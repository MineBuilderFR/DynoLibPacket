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

namespace dynoLibPacket\libOptions;


interface KeyValueOptionsInterface extends TableOptionsInterface
{

    public const ONLY_IF_KEY_EXIST = 5;
    public const ONLY_IF_KEY_NOT_EXIST = 6;

}