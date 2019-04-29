<?php

namespace DataWrapper\Input;

/**
 * Interface InputInterface
 *
 * @author Amir Bashiri
 */
interface InputInterface
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