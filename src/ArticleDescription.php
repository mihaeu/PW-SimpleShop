<?php declare(strict_types = 1);

class ArticleDescription
{
    const MAX_LENGTH = 1024;

    /** @var string */
    private $description;

    public function __construct(string $description)
    {
        $this->ensureNotTooLong($description);

        $this->description = $description;
    }

    public function __toString() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    private function ensureNotTooLong(string $description)
    {
        if (strlen($description) > self::MAX_LENGTH) {
            throw new InvalidArgumentException('Maximum length 1024');
        }
    }
}

