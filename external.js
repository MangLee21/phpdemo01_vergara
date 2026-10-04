const username = document.getElementById('displayusename').innerText;
const user_id = document.getElementById('displayuser_id').innerText;
const number = document.getElementById('displaynumber').innerText;
const professor = document.getElementById('displayprofessor').innerText;
const student_id = document.getElementById('displaystudent_id').innerText;

        //create a function that can hold the value of php variables
function greetUser(){
    alert("Hello " +username+ ". "+"Your User ID is: " +user_id+ ". "+"Your Number is: " +number+ ". "+"Your Professor is: " +professor+ ". "+"Your SR Code: " +student_id+ ".");
}
