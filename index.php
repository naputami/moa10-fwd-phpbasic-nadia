<?php 
    //  buat fungsi yang bertujuan untuk mengembalikan nilai reverse string

    function reverseString($string){
        return strrev($string);
    }

    echo reverseString("Indonesia Raya") . "<br>";

    //  buat fungsi yang bertujuan untuk menghitung luas segitiga siku-siku

    function rightTriangleArea($base, $height){
        return ($base * $height)/2;
    }

    echo "Luas segitiga siku-siku yang alasnya 12 cm dan tingginya 5 cm adalah " . rightTriangleArea(12, 5) . "<br>";


    // buat fungsi yang bertujuan untuk mencari nilai terbesar dalam sebuah array

    function largestNumber($array){
        return max($array);
    }

    $array_sample1 = array(10, 25, 50, 5, 8, 1);

    echo "Nilai terbesar dari 10, 25, 50, 5, 8, 1 adalah ". largestNumber($array_sample1) . "<br>";

    // buat fungsi yang bertujuan untuk menampilkan nilai ganjil dalam sebuah array

    function oddNumber($array){

        $result = array();

        foreach($array as $item){
            if($item % 2 !== 0){
                array_push($result, $item);
            }
        }

        return $result;
    }

    $array_sample2 = array(1,2,3,4,5);

    echo "Nilai ganjil dari bilangan-bilangan berikut ". implode(", ", $array_sample2) . " adalah " . implode(", ", oddNumber($array_sample2)) . "<br>";

    // buat fungsi untuk menampilkan bilangan fibonaci 

    function fibonacciNumber($number){
        if($number < 0){
            throw new Exception("Angka harus lebih dari 0!");
        }

        if($number == 0){
            return 0;
        }

        if($number == 1 || $number == 2){
            return 1;
        }

        return fibonacciNumber($number-1) + fibonacciNumber($number-2);

    }

    echo "Bilangan fibonacci pada posisi ke-10 (F9) adalah ". fibonacciNumber(9) . "<br>";

    // buat fungsi yang menerima 2 parameter berupa array dan gabungkan dua array tersebut di dalam fungsi yang telah dibuat.

    function joinArray($array1, $array2){
        return array_merge($array1, $array2);
    }

    $array_sample3 = array("JS", "Phyton");
    $array_sample4 = array("PHP", "Ruby");

    echo "Array [". implode(", ", $array_sample3) . "] digabung dengan [" . implode(", ", $array_sample4) . "] hasilnya adalah [". implode(", ", joinArray($array_sample3, $array_sample4)). "]<br>";

?>