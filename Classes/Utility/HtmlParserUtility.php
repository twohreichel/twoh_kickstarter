<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\Utility;

use DOMDocument;

class HtmlParserUtility
{
    /**
     * @param string $htmlString
     * @return string
     */
    public function addClassToLinks(
        string $htmlString
    ): string
    {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        if($htmlString){
            $dom->loadHTML(mb_convert_encoding($htmlString, 'HTML-ENTITIES', 'UTF-8'));
        }
        $dom->encoding = 'UTF-8';
        $links = $dom->getElementsByTagName('a');
        foreach ($links as $link) {
            if ($link->hasAttribute('href')) {
                $href = $link->getAttribute('href');
                $classToAdd = $this->getClassByLinkHref($href);

                if ($classToAdd) {
                    $existingClasses = $link->getAttribute('class');

                    if (!$this->valuesExistInString($existingClasses)) {
                        $newClasses = $existingClasses ? "$existingClasses $classToAdd" : $classToAdd;
                        $link->setAttribute('class', $newClasses);
                    }
                }
            }
        }

        $modifiedHtml = trim($dom->saveHTML());
        $modifiedHtml = str_replace(
            ['<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">', '<html>', '<body>', '<head>', '</html>', '</body>', '</head>'],
            '',
            $modifiedHtml
        );
        return preg_replace("/\s+/u", ' ', $modifiedHtml);
    }

    /**
     * @param string $classes
     * @return bool
     */
    public function valuesExistInString(
        string $classes
    ): bool
    {
        foreach ($this->getLinkClassesWithTypes() as $value) {
            if (str_contains($classes, $value)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return array
     */
    public function getLinkClassesWithTypes(): array
    {
        return [
            't3://page' => 'link-page',
            't3://folder' => 'link-folder',
            't3://file' => 'link-file',
            'external' => 'link-external',
            'mailto' => 'link-mail',
            'tel' => 'link-phone'
        ];
    }

    /**
     * @param string $href
     * @return string
     */
    protected function getClassByLinkHref(
        string $href
    ): string
    {
        $linkClassesAndTypes = $this->getLinkClassesWithTypes();
        foreach ($linkClassesAndTypes as $key => $value) {
            if (str_contains($href, $key)) {
                return $value;
            }
        }
        return $linkClassesAndTypes['external'];
    }

    /**
     * @param string $flexLink
     * @return string
     */
    public static function getClassByFlexformLink(
        string $flexLink
    ): string
    {
        $iconTypesFromLinks = self::getIconTypesFromLinks();
        foreach ($iconTypesFromLinks as $key => $value) {
            if (str_contains($flexLink, $key)) {
                return $value;
            }
        }
        return $iconTypesFromLinks['external'];
    }

    /**
     * @return array
     */
    protected static function getIconTypesFromLinks(): array
    {
        return [
            't3://page' => 'link_intern',
            't3://folder' => 'download',
            't3://file' => 'download',
            'external' => 'link_extern',
            'mailto' => 'envelope',
            'tel' => 'phone-solid'
        ];
    }
}