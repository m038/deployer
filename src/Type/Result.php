<?php
/* (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Deployer\Type;

class Result
{
    /**
     * @var string
     */
    private $output;

    /**
     * @param string $output
     */
    public function __construct($output)
    {
        $this->output = $output;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return rtrim($this->output);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return bool
     */
    public function toBool()
    {
        if ('true' === $this->toString()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return explode("\n", $this->toString());
    }
}
