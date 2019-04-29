<?php

namespace Mine;

use DataWrapper\Output\OutputInterface;

/**
 * Class HtmlOutput
 *
 * @package Strategy
 * @author Amir Bashiri
 */
class HtmlOutput implements OutputInterface
{
    /** @var array */
    protected $headers = [];

    /**
     * HtmlOutput constructor.
     *
     * @param array $headers
     */
    public function __construct(array $headers = [])
    {
        $this->headers = $headers;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'html';
    }

    /**
     * @param array $data
     * @return string
     */
    public function get(array $data): string
    {
        if (count($data) === 0) {
            return '';
        }

        $keys = array_keys($data[0]);

        $html = '';

        $html .= '<table>';
        $html .= '<thead><tr>';
        foreach ($keys as $key) {
            $title = $this->headers[$key] ?? $key;
            $html .= "<th>{$title}</th>";
        }
        $html .= '</tr></thead>';

        $html .= '<tbody>';
        foreach ($data as $row) {
            $html .= '<tr>';
            foreach ($keys as $key) {
                $html .= "<td>{$row[$key]}</td>";
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';

        $html .= '</table>';

        return $html;
    }
}