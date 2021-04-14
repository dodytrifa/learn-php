<?php

echo "Hello Dody";

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111);

echo "Underscore in number : ";
var_dump(1234_2345435_2343);

echo "Floating point : ";
var_dump(1.234);

echo "Benar : ";
var_dump(true);

echo 'Salah : ';
var_dump(false);

echo <<<Heredoc
ini untuk buat paragraf yang multiline 
panjang sekali bos
Heredoc;
echo "\n";

//* VARIABLE

//* $name = "John"

//? CONSTANT

define("AUTHOR", "Yuval"); //! karena constant, gak boleh define lagi di bawah
define("BOOKS", "SAPIENS");

echo AUTHOR;
echo "\n";
echo BOOKS;

//* NULL
$name = "John";
echo "Is name null : ";

var_dump(is_null($name)); //* name null : bool(false)

//? UNSET: untuk menghapus variabel
$variabel = "John";
unset($variabel);

//* jika di echo akan error di terminal

//? ISSET: cek data null
