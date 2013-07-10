<?php
/**
 * @link       http://zoopcommerce.github.io/common
 * @package    Zoop
 * @license    MIT
 */
namespace Zoop\Common\User;

/**
 * May be used in conjunction with the IdentityInterface to give an identity roles
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface RoleAwareUserInterface {

    /**
     * Set all the roles for a identity - overwrites all existing
     *
     * @param array $roles array of strings
     */
    public function setRoles(array $roles);

    /**
     * Get the complete roles array
     *
     * @return array
     */
    public function getRoles();

    /**
     * Add a single role
     *
     * @param string $role
     */
    public function addRole($role);

    /**
     * Remove a single role
     *
     * @param string $role
     */
    public function removeRole($role);

    /**
     * Check if an identity has the supplied role
     *
     * @param string $role
     * @return boolean
     */
    public function hasRole($role);

}
