// package main

// import "fmt"

// func main(){
// 	for i := 0; i < 3; i++{
// 		for j := i; j <3; j++{
// 			fmt.Print(j, " ")
		
// 		}
// 		for j := i - 1; j >=1; j++ {
// 			fmt.Print(j)
// 		}
		
// 		fmt.Println()
// 	}
	
// }


package main

import (
	"fmt"
	"strings"
)

func main() {
	var height int
	fmt.Print("Enter the height of the triangle: ")
	fmt.Scan(&height)

	for i := 1; i <= height; i++ {
		// print leading spaces
		fmt.Print(strings.Repeat(" ", height-i))

		// print ascending numbers
		for j := 1; j <= i; j++ {
			fmt.Print(j)
		}

		// print descending numbers
		for j := i - 1; j >= 1; j-- {
			fmt.Print(j)
		}

		fmt.Println()
	}
}
