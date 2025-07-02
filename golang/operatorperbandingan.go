package main

import "fmt"

func main(){

	var firstInput string = "Mountain"
	var secondInput string = "Mountain"

    var isEqual = (firstInput == secondInput)

	//output nya akan antara bernilai false atau true
	fmt.Printf("nilai input apakah sama? %t\n", isEqual)

}