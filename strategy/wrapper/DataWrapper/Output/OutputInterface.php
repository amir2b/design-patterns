<?php

namespace DataWrapper\Output;

/**
 * Interface OutputInterface
 *
 * @author Amir Bashiri
 */
interface OutputInterface
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @param array $data
     * @return mixed
     */
    public function get(array $data);
}