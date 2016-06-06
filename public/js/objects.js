(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
        // TODO: Create firstName and lastName properties in your person object; assign your name to them


    var person = {};
    person.firstName = 'Jorge';
    person.lastName = 'ConFuego';


    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    person.sayHello = function(){
    	alert('Hello ' + this.firstName + ' ' + this.lastName + ' welcome to the Thunder Dome!');
    }

    // Say hello from the person object.
    // person.sayHello();
    person.sayHello();
})();
