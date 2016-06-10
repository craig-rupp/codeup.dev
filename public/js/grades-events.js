'use strict';
// Button definition Detailing
var saveButton = document.getElementById("save-name");
var gradeButton = document.getElementById("add-grade");
var calcButton = document.getElementById("calculate-average");
// Define Variable for Student Name
var nameOfStudent = document.getElementById("student-name");

function recordName(){
    var nameEntered = document.getElementById("name")
    student.name = nameEntered.value;
    gradeButton.removeAttribute('disabled');
    calcButton.removeAttribute('disabled');
    nameOfStudent.innerText = student.name;

}
// Add variables in function for the innerText to apply
// var gradeEntered = document.getElementById("grade");
// var subjectEntered = document.getElementById("subject");

function inputGrades(){
    var gradeEntered = document.getElementById("grade");
    var subjectEntered = document.getElementById("subject");
    student.addSubject(subjectEntered.value, parseInt(gradeEntered.value));

    var tableEntries = document.getElementById("grades");
    tableEntries.innerHTML = '<tr><td>' + subjectEntered.value + '</td><td>' +
    gradeEntered.value + '</td></tr>' + tableEntries.innerHTML;
}
console.log(inputGrades);

saveButton.addEventListener('click', recordName);
gradeButton.addEventListener('click', inputGrades);