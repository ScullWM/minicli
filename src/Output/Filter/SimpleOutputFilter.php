<?php


namespace Minicli\Output\Filter;


use Minicli\Output\OutputFilterInterface;

class SimpleOutputFilter implements OutputFilterInterface
{
    public function filter(string $message, string $style = null): string
    {
        return $message;
    }
}
