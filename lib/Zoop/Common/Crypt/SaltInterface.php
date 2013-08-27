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
interface SaltInterface
{
    /**
     * Returns a salt value that can be used in a hash
     */
    public function getSalt();
}
