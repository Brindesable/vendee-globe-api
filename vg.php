<?php

function getVGRanking()
{
    $rank = [];
    $doc = new DOMDocument();
    $doc->loadHTMLFile('http://www.vendeeglobe.org/en/ranking-and-race-data');

    $finder = new DomXPath($doc);
    $classname = 'skipper__title';
    $elements = $finder->query("//*/div/*[contains(@class, '$classname')]");

    if (!is_null($elements)) {
        $name = true;
        foreach ($elements as $element) {
            if($name)
                $rank[] = $element->childNodes[0]->nodeValue;
            $name = !$name;
        }
    }
    return $rank;
}