<?php

// ove dvije tacke su za Exit, da hocemo iz dao izaci, napravili bismo ovo, ../../vendor/autoload.php

require "../vendor/autoload.php";
// require "dao/StudentsDao.class.php";
// require "dao/CoursesDao.class.php";

require "services/StudentService.php";
require "services/CourseService.php";
require "dao/UserDao.php";

// flight register se koristi da ne bi ponavljali ovu instancu klase StudentsDaoClass... 
Flight::register('student_service', "StudentService");
Flight::register('course_service', "CourseService");
Flight::register('userDao', "UserDao");

require_once('routes/StudentRoutes.php');
require_once('routes/CourseRoutes.php');
require_once('routes/UserRoutes.php');
/*
Flight::route("/", function(){
   echo "Hello from / route";
});

// We need to return data in JSON format, because that will be our communication between frontend
// and backend
Flight::route("GET /students", function(){
   //echo "Hello from /students route";
   //echo "Hello from /students route with name= ".$name"; $name se posalje kao parametar u funkciji
   // kod ovoga iznad dodaje se /students/mirso  
   //$student_dao = new StudentsDao();
   //$results = Flight::student_dao()->get_all();
   //print_r($results);
   // dodati u header-u postman  content type application/json
   Flight::json(Flight::student_dao()->get_all());
   /*$memory_usage = memory_get_usage(); // get current memory usage
   echo "Current memory usage: " . $memory_usage . " bytes";
});

Flight::route("GET /student_by_id", function(){
   Flight::json(Flight::student_dao()->get_by_id(Flight::request()->query['id']));
});

Flight::route("GET /students/@id", function($id){
   //echo "Hello from /students route";
   //$student_dao = new StudentsDao();
   //$results = $student_dao->get_by_id($id);
   //print_r($results);
   Flight::json(Flight::student_dao()->get_by_id($id));
});

Flight::route("DELETE /students/@id", function($id){
   //echo "Hello from /students route";
   //$student_dao = new StudentsDao();
   Flight::student_dao()->delete($id);
   Flight::json(['message' => "Student deleted successfully"]);
});
  
Flight::route("POST /student", function(){
    //echo "Hello from /students route";
    //$student_dao = new StudentsDao();
    // ovo getData da se ekstraktuju values iz arrayj-aj 
   $request = Flight::request()->data->getData();
   //$response = $student_dao->add($request);
   Flight::json(['message' => "Student added successfully",
                 'data' => Flight::student_dao()->add($request)
                ]);
});

Flight::route("PUT /student/@id", function($id){
   //echo "Hello from /students route";
   //$student_dao = new StudentsDao();
   $student = Flight::request()->data->getData();
   //$response = $student_dao->update($student, $id);
   Flight::json(['message' => "Student edit successfully",
                 'data' => Flight::student_dao()->update($student, $id)
                ]);
});

Flight::route("GET /students/@name", function($name){
   echo "Hello from /students route with name= ".$name;
});

Flight::route("GET /students/@name/@status", function($name, $status){
   echo "Hello from /students route with name = " . $name . " and status = " . $status;
});*/

// ide uvijek, da bi se startalo uopste
Flight::start();
?>
