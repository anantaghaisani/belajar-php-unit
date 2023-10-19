<?php
// Path to run
// Butuhh Framework PHPUnit

use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "wordcount.php";

// Class untuk run Testing.

class SimpleTest extends TestCase {
    public function testCountWords(){
// Kita pakai class yang nag kita test.

$WC = new WordCount();

// Kita masukan parameter 4 kata, yang baruanya dapat output

$TestSentence = "My name is Joko"; // 4 Kata.. 
$WordCount = $WC->countWords ($TestSentence);

// Kita assert equal, ekspektasi harus 4, jika benar berarti Wordcount berfungsi dengan baik.

$this->assertEquals(4, $WordCount);
    }}
?>