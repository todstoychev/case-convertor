<?php

namespace Todstoychev\CaseConvertor\Tests;

use Todstoychev\CaseConvertor\Convertor;

/**
 * ConvertorTest
 *
 * @author Todor Todorov <todstoychev@gmail.com> 
 * @package \Todstoychev\CaseConvertor\Tests
 */
class ConvertorTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Test data
     *
     * @var array
     */
    protected $data = [
        'test_string_000' => 'testString_000',
        'test_string_example' => 'testStringExample',
        'nounderscore' => 'nounderscore',
        '000_test_string' => '000TestString',
        'test_000_string' => 'test_000String',
        'test000_string' => 'test000String',
        'test_000string' => 'test_000string',
        'very_long_test_string_with_lots_of_underscores' => 'veryLongTestStringWithLotsOfUnderscores',
        't_e_s_t_upper_case' => 'tESTUpperCase',
        'test_u_p_p_e_r_again' => 'testUPPERAgain'
    ];

    /**
     * Testing snake to camel case convertion
     */
    public function testSnakeToCamelCase()
    {
        $convertor = new Convertor();

        foreach ($this->data as $snakeCase => $camelCase) {
            $string = $convertor->snakeToCamelCase($snakeCase);
            
            $this->assertEquals($camelCase, $string);
        }
    }
    
    /**
     * Test camel to snake case convertion
     */
    public function testCamelToSnakeCase()
    {
        $convertor = new Convertor();

        foreach ($this->data as $snakeCase => $camelCase)
        {
            $string = $convertor->camelToSnakeCase($camelCase);
            
            $this->assertEquals($snakeCase, $string);
        }
    }
}
