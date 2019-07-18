<?php declare(strict_types=1);

namespace Swoft\Validator\Annotation\Mapping;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Class ChsAlphaDash
 *
 * @since 2.0
 *
 * @Annotation
 * @Target("PROPERTY")
 * @Attributes({
 *      @Attribute("message", type="string")
 * })
 */
class ChsAlphaDash
{
    /**
     * @var string
     */
    private $message = '';

    /**
     * ChsAlphaDash constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->message = $values['value'];
        }
        if (isset($values['message'])) {
            $this->message = $values['message'];
        }
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
