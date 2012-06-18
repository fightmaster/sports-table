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
interface PlayerInterface
{
    /**
     * Returns ID
     *
     * @abstract
     * @return int
     */
    public function getId();

    /**
     * Returns player name
     *
     * @abstract
     * @return string
     */
    public function getName();

    /**
     * Sets player name
     *
     * @abstract
     * @param string $name
     * @return PlayerInterface
     */
    public function setName($name);

    /**
     * Returns age of the player
     *
     * @abstract
     * @return int
     */
    public function getAge();

    /**
     * Sets age of the player
     *
     * @abstract
     * @param int $age
     * @return PlayerInterface
     */
    public function setAge($age);

    /**
     * Returns Position of the player
     *
     * @abstract
     * @return PositionInterface
     */
    public function getPosition();

    /**
     * @abstract
     * @param PositionInterface $position
     * @return PlayerInterface
     */
    public function setPosition(PositionInterface $position);
}
