//alert('world'); 

const person = {"first_name": "John", "last_name": "Doe"};

console.log(person.first_name);
console.log(person['last_name']);

const cars = ["Saab", "Volvo", "BMW"];
console.log(cars[0]);
cars[cars.length] = "Peugeot";
console.log(cars.sort());

function hello() {
    alert('hello from the function');
}

console.log("Type of 2 is = " + typeof 2);
console.log(typeof cars);

console.log(typeof person);
console.log(typeof "world");

function display(text) {
    document.getElementById("demo").innerHTML = text;
}

function greeting(text) {
    alert(text);
}

/*var list = '<ul>';  
for (var i =0; i< cars.length; i++){
    list+= '<li>' + cars[i] + '</li>';
}
list+= '</ul>';
console.log(list);
document.getElementById("cars").innerHTML = list;*/

let text = '{ "employees" : [' +
'{ "firstName":"John" , "lastName":"Doe" },' +
'{ "firstName":"Anna" , "lastName":"Smith" },' +
'{ "firstName":"Peter" , "lastName":"Jones" } ]}';

console.log(text);
const obj = JSON.parse(text);
console.log(obj);

for (var i = 0; i < obj.employees.length; i++) {
    console.log(obj.employees[i].firstName);
    
}

