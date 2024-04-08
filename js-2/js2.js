function Person(name, age) {
  this.name = name;
  var personAge = age;

  this.sayHello = function () {
    return `Hello my name is ${this.name}, I am ${personAge}.`;
  };

  //arrow func
  this.sayHi = () => {
    return `Hi my name is ${this.name}, I am ${personAge}.`;
  };

  return this;
}

function Car(make, model) {
  this.model = model;
  this.make = make;

  this.present = function (year) {
    return `${this.make}, ${this.model} ${year}`;
  };
}

var vankata = new Person("vankata", 15);
var david = new Person("David", 21);

//public/private
// console.log(david.age);
// console.log(david.sayHello());

//arrow func
console.log(vankata.sayHello.call(david));
console.log(vankata.sayHi.call(david));

// var honda = new Car("honda", "civic");

// console.log(vankata.sayHello());
// console.log(david.sayHello());

// console.log(honda.present.call(vankata, [12, "cb "]));

var btn = document.getElementById("btn");

btn.addEventListener("click", function () {
  console.log(david.sayHello());
});

// [1, 2, 3].forEach(function (el, i) {
//   console.log(el);
// });
