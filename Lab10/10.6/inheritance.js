var Person = function () {};

Person.prototype.initialize = function (name, age) {
  this.name = name;
  this.age = age;
};

Person.prototype.descript = function () {
  return this.name + ", " + this.age + " years old.";
};

// STUDENT
var Student = function () {};

Student.prototype = new Person();
Student.prototype.learn = function (subject) {
  console.log(this.name + " just learned " + subject);
};

// TEACHER
var Teacher = function () {};

Teacher.prototype = new Person();
Teacher.prototype.teach = function (subject) {
  console.log(this.name + " is now teaching " + subject);
};

// Example
var me = new Student();
me.initialize("Hong Anh", 22);
me.learn("Inheritence");

var teacher = new Teacher();
teacher.initialize("Dao Thanh Chung", 38);
teacher.teach("Web Programming");
