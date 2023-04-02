<?php
require_once('BaseService.php');
require_once __DIR__."/../dao/CoursesDao.class.php";
class CourseService extends BaseService
{
    // private $course_dao;
    public function __construct(){
        // $this->course_dao = new CoursesDao;
        parent::__construct(new CoursesDao);
    }

    /*public function add($entity){
        return parent::add($entity);
        // send an email
    }*/

    /*
    public function get_all(){
        return $this->course_dao->get_all();
    }

    public function get_by_id($id){
        return $this->course_dao->get_by_id($id);
    }

    public function add($course){
        return $this->course_dao->add($course);
    }

    public function update($course, $id){
        return $this->course_dao->update($course, $id);
    }

    public function delete($id){
        return $this->course_dao->delete($id);
    }
    */
}

?>