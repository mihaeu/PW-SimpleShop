<?php declare(strict_types = 1);

class ArticleName
{
    const MIN_LENGTH = 4;

    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->ensureMinimumLength($name);

        $this->name = $name;
    }

    public function __toString() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function ensureMinimumLength(string $name)
    {
        if (strlen($name) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Minimum length 4');
        }
    }
}

