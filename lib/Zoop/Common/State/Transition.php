<?php
/**
 * @link       http://zoopcommerce.github.io/common
 * @package    Zoop
 * @license    MIT
 */
namespace Zoop\Common\State;

/**
 * Implementation of Zoop\Common\State\TransitionInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Transition implements TransitionInterface
{

    const ARROW = '->';

    /**
     *
     * @var string
     */
    protected $from;

    /**
     *
     * @var string
     */
    protected $to;

    public static function fromString($string)
    {
        list($from, $to) = explode(self::ARROW, $string);
        if (! isset($from) || (! isset($to))) {
            return false;
        }
        return new static($from, $to);
    }

    public function __construct($from, $to)
    {
        $this->from = (string) $from;
        $this->to = (string) $to;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getAction()
    {
        return $this->from . self::ARROW . $this->to;
    }
}
