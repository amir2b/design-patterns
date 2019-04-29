<?php

namespace DataWrapper\Output;

/**
 * Class ArrayOutput
 *
 * @package Strategy\Formatter\Output
 * @author Amir Bashiri
 */
class ArrayOutput implements OutputInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'array';
    }

    /**
     * @param array $data
     * @return array
     */
    public function get(array $data): array
    {
        return $data;
    }
}