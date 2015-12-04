<?php

namespace Todstoychev\CaseConvertor;

/**
 * Convertor
 *
 * @author Todor Todorov <todstoychev@gmail.com> 
 * @package \Todstoychev\CaseConvertor
 */
class Convertor
{
    
    /**
     * Converts string from snake case to camel case
     * 
     * @example
     * 
     * input - my_example_string
     * output - myExampleString
     * 
     * @param string $string
     * 
     * @return string
     */
    public static function snakeToCamelCase($string)
    {
        $matches = [];
        
        preg_match_all('/_[a-z]/', $string, $matches);
        
        foreach (array_shift($matches) as $match) {
            $replace = str_replace('_', '', $match);
            
            $string = str_replace($match, strtoupper($replace), $string);
        }
        
        return $string;
    }
    
    /**
     * Converts string from camel case to snake case
     * 
     * @example 
     * 
     * input - myExampleString
     * output - my_example_string
     * 
     * @param string $string
     * 
     * @return string
     */
    public static function camelToSnakeCase($string)
    {
        $matches = [];
        
        preg_match_all('/[A-Z]/', $string, $matches);
        
        foreach (array_shift($matches) as $match) {
            $replace = '_' . strtolower($match);
            
            $string = str_replace($match, $replace, $string);
        }
        
        return $string;
    }
}