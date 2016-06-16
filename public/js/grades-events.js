'use strict';
var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}
// Button definition Detailing
var saveButton = $("#save-name");
var gradeButton = $("#add-grade");
var calcButton = $("#calculate-average");
// Define Variable for Student Name
var nameOfStudent = $("#student-name");
// var nameOfStudent = $("#student-name");

function recordName(){
    var nameEntered = $("#name")
    student.name = nameEntered.val();
    gradeButton.removeAttr('disabled');
    calcButton.removeAttr('disabled');
    nameOfStudent.text() = student.name;

}
// Add variables in function for the innerText to apply
// var gradeEntered = document.getElementById("grade");
// var subjectEntered = document.getElementById("subject");

function inputGrades(){
    var gradeEntered = $("#grade");
    var subjectEntered = $("#subject");
    student.addSubject(subjectEntered.val(), parseInt(gradeEntered.val()));

    var tableEntries = $("#grades");
    tableEntries.html( '<tr><td>' + subjectEntered.val() + '</td><td>' +
    gradeEntered.val() + '</td></tr>' + tableEntries.html());
}
// console.log(inputGrades);

function areYouAwesome() {
    inputGrades();
    var average = student.calculateAverage();
    $('#student-average').html(average);

    if (student.isAwesome()) {
        $('#student-awesome').removeAttr('class');
        $('#student-practice').attr('class', 'hidden');
    } else {
        $('#student-practice').removeAttr('class');
        $('#student-awesome').attr('class', 'hidden');
    }

    gradeButton.attr('disabled', true);
    calcButton.attr('disabled', true);
}


saveButton.on('click', recordName);
gradeButton.on('click', inputGrades);
calcButton.on('click', areYouAwesome);