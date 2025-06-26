package main

import "fmt"

func total(x int, y int) int {
	hasilPenjumlahan := x + y
	//fmt.Println(hasilPenjumlahan);
	return hasilPenjumlahan
}

func main(){
	// fmt.Println("Hello World")
	//var i int 
	//i := 11
	// fmt.Println("Countdown")

	// for i :=10; i >= 0; i-- {
		
	// 	fmt.Println(i)
	// 	if  (i == 0) {
	// 	fmt.Println("Waktu sudah habis")
	//     }
	// }

	//fmt.Println("testing")
	// kalimat := "Sebuah kalimat"

	// fmt.Println("Ada %s", kalimat)
	var hasilTotal = total(2,3);	
	fmt.Println(hasilTotal)
}