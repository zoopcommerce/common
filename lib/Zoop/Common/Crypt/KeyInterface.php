<?php
/**
 * @link       http://zoopcommerce.github.io/common
 * @package    Zoop
 * @license    MIT
 */
namespace Zoop\Common\Crypt;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 *
 */
interface KeyInterface
{
    /**
     * Returns a key that can be used by an encryption algorithim
     */
    public function getKey();
}
