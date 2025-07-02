package main

import "fmt"

func main(){

	var ys = [6]int{10, 20, 30, 40, 50} // array
       for _, v := range ys {
        fmt.Println("Value = ", v)
     }
}