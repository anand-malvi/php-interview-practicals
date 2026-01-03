<?php
/**
 * Group Array Items by Key
 * Problem
 * 
 * You are given an array of associative arrays (like DB records).
 * Group the items by a specific key.
 * 
 * Expected Output
 * [
 *     'Fruit' => [
 *         ['id' => 1, 'category' => 'Fruit', 'name' => 'Apple'],
 *         ['id' => 3, 'category' => 'Fruit', 'name' => 'Banana'],
 *     ],
 *     'Vegetable' => [
 *         ['id' => 2, 'category' => 'Vegetable', 'name' => 'Carrot'],
 *         ['id' => 4, 'category' => 'Vegetable', 'name' => 'Potato'],
 *     ],
 * ]
 */

$data = [
    ['id' => 1, 'category' => 'Fruit', 'name' => 'Apple'],
    ['id' => 2, 'category' => 'Vegetable', 'name' => 'Carrot'],
    ['id' => 3, 'category' => 'Fruit', 'name' => 'Banana'],
    ['id' => 4, 'category' => 'Vegetable', 'name' => 'Potato'],
];

function groupByKey($data) {
    $result = [];
    foreach ($data as $row) {
        $result[$row['category']][] = $row;
    }
    return $result;
}

print_r(groupByKey($data));
