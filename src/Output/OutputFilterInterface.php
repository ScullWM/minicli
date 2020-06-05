<?php


namespace Minicli\Output;


interface OutputFilterInterface
{
    public function filter(string $message, string $style = null): string;
}
