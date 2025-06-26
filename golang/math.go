package main

import "fmt"

func hitung(x int, y int)int{
	resultcal := x + y
	return resultcal
}

func main(){

	var resultfuncmath = hitung(3,4)
	fmt.Println(resultfuncmath) 
}