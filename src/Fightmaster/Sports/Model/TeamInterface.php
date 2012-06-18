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
interface TeamInterface
{
    /**
     * Returns ID
     *
     * @abstract
     * @return int
     */
    public function getId();

    /**
     * Returns team name
     *
     * @abstract
     * @return string
     */
    public function getName();

    /**
     * Sets team name
     *
     * @abstract
     * @param string $name
     * @return TeamInterface
     */
    public function setName($name);

    /**
     * Returns slug of the team
     *
     * @abstract
     * @return string
     */
    public function getSlug();

    /**
     * Sets slug of the team
     *
     * @abstract
     * @param $slug
     * @return TeamInterface
     */
    public function setSlug($slug);

    /**
     * Returns list of the team players
     * @abstract
     * @return array|null|PlayerInterface[]
     */
    public function getPlayers();

    /**
     * Sets players
     *
     * @abstract
     * @param $players
     * @return array|null|PlayerInterface[]
     */
    public function setPlayers($players);
}
