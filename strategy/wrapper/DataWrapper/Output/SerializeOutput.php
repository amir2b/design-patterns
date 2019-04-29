<?php

namespace DataWrapper\Output;

/**
 * Class SerializeOutput
 *
 * @package Strategy\Formatter\Output
 * @author Amir Bashiri
 */
class SerializeOutput implements OutputInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'serialize';
    }

    /**
     * @param array $data
     * @return string
     */
    public function get(array $data): string
    {
        return serialize($data);
    }
}