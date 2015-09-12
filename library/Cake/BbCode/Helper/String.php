<?php
namespace Cake\BbCode;

class Helper_String
{

    /**
     * Strips specified BB codes from a string
     *
     * @param string $string
     * @param array $bbCodes
     * @param boolean $retainContent
     * @param string $replaceWith
     *
     * @return string
     */
    public static function bbCodeStrip($string, array $bbCodes, $retainContent = false, $retainTags = false)
    {
        if ($retainContent) {
            $bbCodeList = implode('|', array_keys($bbCodes));

            // split the string into possible delimiters and text; even keys
            // (from 0) are strings, odd are delimiters
            $parts = preg_split('#(\[(?:' . $bbCodeList . ')(?:=[^\]]*)?\]|\[/(?:' . $bbCodeList . ')\])#si', $string,
                -1, PREG_SPLIT_DELIM_CAPTURE);
            $total = count($parts);
            if ($total < 2) {
                return trim($string);
            }

            $closes = array();
            $skips = array();
            $newString = '';

            // first pass: find all the closing tags and note their keys
            for ($i = 1; $i < $total; $i += 2) {
                if (preg_match("#^\\[/($bbCodeList)]#i", $parts[$i], $match)) {
                    $closes[strtolower($match[1])][$i] = $i;
                }
            }

            // second pass: look for all the text elements and any opens, then
            // find the first corresponding close that comes after it and remove
            // it. if we find that, don't display the open or that close
            for ($i = 0; $i < $total; $i++) {
                $part = $parts[$i];
                if ($i % 2 == 0) {
                    // string part
                    $newString .= $part;
                    continue;
                }

                if (!empty($skips[$i])) {
                    // known close
                    continue;
                }

                if (preg_match('/^\[(' . $bbCodeList . ')(?:=|\])/i', $part, $match)) {
                    $tagName = strtolower($match[1]);
                    if (!empty($closes[$tagName])) {
                        do {
                            $closeKey = reset($closes[$tagName]);
                            if ($closeKey) {
                                unset($closes[$tagName][$closeKey]);
                            }
                        } while ($closeKey && $closeKey < $i);
                        if ($closeKey) {
                            // found a matching close after this tag
                            $skips[$closeKey] = true;
                            continue;
                        }
                    }
                }

                $newString .= $part;
            }

            $newString = str_replace("\x1A", '', $newString);

            return trim($newString);
        }

        foreach ($bbCodes as $bbCodeId => $bbCode) {
            $parts = preg_split('#(\[' . $bbCodeId . '[^\]]*\]|\[/' . $bbCodeId . '\])#i', $string, -1,
                PREG_SPLIT_DELIM_CAPTURE);
            $string = '';
            $level = 0;
            foreach ($parts as $i => $part) {
                if ($i % 2 == 0) {
                    // always text, only include if not inside tag
                    if ($level == 0) {
                        $string .= rtrim($part);
                    }
                } else {
                    // tag start/end
                    if ($part[1] == '/') {
                        // close tag, down a level if open
                        if ($level) {
                            if ($retainTags) {
                                $string .= '[' . strtoupper($bbCodeId) . '][/' . strtoupper($bbCodeId) . ']';
                            }
                            $level--;
                        }
                    } else {
                        // up a level
                        $level++;
                    }
                }
            }
        }

        return trim($string);
    }
}