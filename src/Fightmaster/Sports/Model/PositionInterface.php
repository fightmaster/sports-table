<?php

/**
 * This file is part of the FightmasterSportsTable package.
 *
 * (c) Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fightmaster\Sports\Model;

/**
 * @author Dmitry Petrov aka fightmaster <old.fightmaster@gmail.com>
 */
interface PositionInterface
{
    /**
     * Returns ID
     *
     * @abstract
     * @return int
     */
    public function getId();

    /**
     * Returns name of the position
     *
     * @abstract
     * @return string
     */
    public function getName();

    /**
     * Sets name of the position
     *
     * @abstract
     * @param string $name
     * @return PositionInterface
     */
    public function setName($name);

    /**
     * Returns abbreviation of the position
     *
     * @abstract
     * @return mixed
     */
    public function getAbbriviation();

    /**
     * Sets abbreviation of the position
     *
     * @abstract
     * @param string $abbreviation
     * @return PositionInterface
     */
    public function setAbbriviation($abbreviation);
}
