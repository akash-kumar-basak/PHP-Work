<?php

 class student
  {
    public $institute;
    public $name;
    public $department;
    public function printStudentInfo($a, $b, $c)
      {
        $institute = "aitvet";
        $name = "akash";
        $department = "CSE";
        echo $institute.$name.$department;
        return printStudentInfo($institute , $name, $department);
      }
  }


  $studentinfo = new student();
  $studentinfo->printStudentInfo("a", "b", "c");

 ?>
