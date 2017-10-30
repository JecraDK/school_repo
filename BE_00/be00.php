<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 5, 2017 5:40:57 PM  
//

error_reporting(E_ALL);

            function createMatrix(&$matrix, $n) {
                for ($i = 0; $i < $n; $i++) {        // down
                    for ($j = 0; $j < $n; $j++) {    // across
                        $matrix[$i][$j] = 0;
                    }
                }
                for ($i = 0; $i < count($matrix); $i++) {
                    $matrix[$i][$i] = 1;
                }
            }
            // read the n from GET
            // print a matrix
            function printMatrix($matrix) {
                print("\n        <p>\n");
                for ($i = 0; $i < count($matrix); $i++) {        // down
                    for ($j = 0; $j < count($matrix); $j++) {    // across
                        printf("%s ", $matrix[$i][$j]);
                    }
                    print("            <br/>\n");
                }
                print("        </p>\n");
            }
            $i = isset($_GET['antal']) ? $_GET['antal'] : 20;
            $arr = array();
            createMatrix($arr, $i);
            printMatrix($arr);