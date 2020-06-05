<?php


namespace Minicli\Output\Adapter;


use Minicli\Output\PrinterAdapterInterface;

class FilePrinterAdapter implements PrinterAdapterInterface
{
    /** @var string */
    protected $output_file;

    /**
     * FilePrinterAdapter constructor.
     * @param $output_file
     */
    public function __construct(string $output_file)
    {
        $this->output_file = $output_file;
    }

    /**
     * Writes output to file.
     * @param string $message
     * @param null $style
     * @return bool
     */
    public function out(string $message)
    {

        $fp = fopen($this->output_file, "a+");
        fwrite($fp, $message);
        fclose($fp);

        return $message;
    }

}
