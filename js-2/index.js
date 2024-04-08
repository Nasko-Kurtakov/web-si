var a = 10;

var person = {
  name: "Nasko",
  age: "18",
  lessons: [1, 2, 3, 4],
};

var sum = person.lessons.reduce(function (acc, cur) {
  acc += cur;
  return acc;
}, 0);

// console.log(sum);

var dictionary = {
  id: null,
  name: "Stamat",
  age: 18,
};

for (var key in dictionary) {
  console.log(dictionary[key]);
}
