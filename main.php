<?php

/**
 * Debugger
 * @param $var
 */
function dd( $var )
{
    echo '<pre>';
    var_dump( $var );
    echo '</pre>';
    die;
}

/**
 * Class LinkGenerator
 */
class LinkGenerator
{
    /**
     * @var string
     */
    private string $link;

    /**
     * @var int
     */
    private int $countWords;

    /**
     * @var string
     */
    private string $inputString;

    /**
     * @var string
     */
    private string $linkResult = '';

    /**
     * LinkGenerator constructor.
     * @param string $link
     * @param string $inputString
     * @param int $countWords
     */
    public function __construct(
        string $link,
        string $inputString,
        int $countWords
    ) {
        $this->link = $link;
        $this->countWords = $countWords;
        $this->inputString = $inputString;
    }

    /**
     * Return result link
     * @return string
     */
    public function getLink(): string
    {
        if ( strlen($this->inputString) > 180 ) {
            $this->inputString = mb_substr($this->inputString, 0, 180);
            $this->getLastWords();
        } else {
            $this->getLastWords();
        }

        $this->linkResult .= '...';

        return '<a href=' . $this->link . '>' . $this->linkResult . '</a>';
    }

    /**
     * String explode by delimiter
     */
    private function getLastWords(): void
    {
        $brokeString = explode(' ', $this->inputString);
        $this->getCutText($brokeString);
    }

    /**
     * Cut current by count words
     * @param array $brokeString
     */
    private function getCutText(array $brokeString): void
    {
        for ( $i = $this->countWords; $i > 0; $i-- ) {
            $this->linkResult .= $brokeString[count($brokeString) - $i] . ' ';
        }
    }
}
