<?php

    function displayName(){
        echo "Teera Binkasem";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color='red'>";

    function addNumber($num1,$num2){
        echo $num1 + $num2;
    }
    addNumber(2,4);

    echo "<hr color='green'>";

    //จงสร้างฟังก์ชั่นชื่อ display student โดยมี Argument 
    //ชื่อว่า name
    //แล้วให้ส่งชื่อในฟังก์ชั่นตอนที่เรียกใช้ เพื่อแสดงชื่อที่ส่ง

    function displayStudent($name){
        echo $name;
    }
    displayStudent("Teera");

    echo "<hr color='green'>";

    //จงสร้างฟังก์ชั่นชื่อ power number โดยมี Argument 2 ตัว
    //ชื่อว่า num เก็บเลขปกติ 
    //ชื่อว่า pow เก็บเลขยกกำลัง
    //แล้วให้ส่งเลขในฟังก์ชั่นตอนที่เรียกใช้ เพื่อแสดงผลลัพธ์

    function powerNumber($num,$pow){
        echo $num ** $pow;
    }
    powerNumber(17,2);

    echo "<hr color='green'>";

    //จงสร้างฟังก์ชั่นชื่อ fraction number โดยมี Argument 2 ตัว
    //ชื่อว่า numerate เก็บเลขเศษ 
    //ชื่อว่า denomerate เก็บเลขส่วน
    //แล้วให้ส่งเลขในฟังก์ชั่นตอนที่เรียกใช้ เพื่อแสดงผลลัพธ์เศษที่เหลือ

    function fractionNumber($numerate,$denomerate){
        echo $numerate % $denomerate;
    }
    fractionNumber(17,2);

    echo "<hr color='green'>";



?>