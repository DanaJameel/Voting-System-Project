<?php declare(strict_types=1);
final class PASSWORD
{
    private $password;

    private function __construct(string $password)
    {
        $this->ensureIsValidPASSWORD($password);

        $this->password = $password;
    }

    public static function fromString(string $password): self
    {
        return new self($password);
    }

    public function __toString(): string
    {
        return $this->password;
    }

    private function ensureIsValidPASSWORD(string $password): void
    {
        if (strlen($password)<4) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid password ',
                    $password
                )
            );
        }
    
    if (strlen($password)>20) {
        throw new InvalidArgumentException(
            sprintf(
                '"%s" is not a valid password ',
                $password
            )
        );
}}  }

?>