<?php
/**
 * @link       http://zoopcommerce.github.io/common
 * @package    Zoop
 * @license    MIT
 */
namespace Zoop\Common\User;

/**
 * Basic user interface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface UserInterface{

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @param string $name
     */
    public function setUsername($name);
}