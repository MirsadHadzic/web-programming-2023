<?php
require_once('BaseService.php');
require_once __DIR__."/../dao/StudentsDao.class.php";
class StudentService extends BaseService
{
    // private $student_dao;
    public function __construct(){
        // $this->student_dao = new StudentsDao;
        parent::__construct(new StudentsDao);
    }

    public function add($entity){
        return parent::add($entity);
        // send an email
        /*if (!validateField($entity['first_name'])){
            error;
        }*/
    }

    /*
    public function get_all(){
        return $this->student_dao->get_all();
    }

    public function get_by_id($id){
        return $this->student_dao->get_by_id($id);
    }

    public function add($student){
        return $this->student_dao->add($student);
    }

    public function update($student, $id){
        return $this->student_dao->update($student, $id);
    }

    public function delete($id){
        return $this->student_dao->delete($id);
    }
    */
}

?>