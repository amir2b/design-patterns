<?php

namespace DataWrapper\Output;

/**
 * Class JsonOutput
 *
 * @package Strategy\Formatter\Output
 * @author Amir Bashiri
 */
class JsonOutput implements OutputInterface
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'json';
    }

    /**
     * @param array $data
     * @return string
     */
    public function get(array $data): string
    {
        return json_encode($data);
    }
}