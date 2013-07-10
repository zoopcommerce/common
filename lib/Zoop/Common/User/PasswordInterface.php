<?php
/**
 * @link       http://zoopcommerce.github.io/common
 * @package    Zoop
 * @license    MIT
 */
namespace Zoop\Common\User;

use Zoop\Common\Crypt\SaltInterface;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface PasswordInterface extends SaltInterface {

    /**
     * Returns password (normally hashed)
     *
     * @return string
     */
    public function getPassword();

    /**
     *
     * @param string $plaintext
     */
    public function setPassword($plaintext);
}
