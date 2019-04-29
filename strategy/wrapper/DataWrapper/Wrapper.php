<?php

namespace DataWrapper;

use DataWrapper\Output\OutputInterface;

/**
 * Class Formatter
 *
 * @package Strategy
 * @author Amir Bashiri
 *
 * @todo InputFormatter
 */
class Wrapper
{
    /** @var OutputInterface */
    private $output;

    /** @var array */
    private $data;

    /**
     * @param OutputInterface $outputType
     * @return void
     */
    public function setOutput(OutputInterface $outputType): void
    {
        $this->output = $outputType;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return void
     */
    public function printName(): void
    {
        echo PHP_EOL, '<b>output: '.$this->output->name().'</b>', PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output->get($this->data);
    }
}