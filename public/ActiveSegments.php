<?php

define("NUMBERS", [
    0 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => true, 
        "segment6" => true, 
        "segment7" => false],
    1 => [
        "segment1" => false, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => false, 
        "segment5" => false, 
        "segment6" => false, 
        "segment7" => false],
    2 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => false, 
        "segment4" => true, 
        "segment5" => true, 
        "segment6" => false, 
        "segment7" => true],
    3 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => false, 
        "segment6" => false, 
        "segment7" => true],
    4 => [
        "segment1" => false, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => false, 
        "segment5" => false, 
        "segment6" => true, 
        "segment7" => true],
    5 => [
        "segment1" => true, 
        "segment2"=> false, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => false, 
        "segment6" => true, 
        "segment7" => true],
    6 => [
        "segment1" => true, 
        "segment2"=> false, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => true, 
        "segment6" => true, 
        "segment7" => true],
    7 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => false, 
        "segment5" => false, 
        "segment6" => false, 
        "segment7" => false],
    8 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => true, 
        "segment6" => true, 
        "segment7" => true],
    9 => [
        "segment1" => true, 
        "segment2"=> true, 
        "segment3" => true, 
        "segment4" => true, 
        "segment5" => false, 
        "segment6" => true, 
        "segment7" => true]   
    ]

    );

function activeSegment(int $number, string $segment) : bool {

    
    return NUMBERS[$number][$segment];
}