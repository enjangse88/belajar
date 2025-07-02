package main

import "fmt"

func main(){

	//variable dengan isi variable dan declare tipe data
	var firstName string = "Jhon"

	//declare variable dan tipe data dahulu, lalu isi variable
	var lastName string 
	lastName = "Wick"

	//declare variable dan isi variable, tanpa perlu 
	name := "Second Jhon Wick"

   	

	//fmt.Println("hello");
	fmt.Printf("Halo %s %s!\n", firstName, lastName)

	fmt.Printf("Halo %s!\n", name)
}