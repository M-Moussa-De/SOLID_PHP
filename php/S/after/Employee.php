<?php

namespace App\S\After;

class Employee
{
    public function __construct(private string $emp_id, private string $emp_name)
    {
    }

    public function getEmpId(): string
    {
        return $this->emp_id;
    }

    public function setEmpId(string $emp_id): void
    {
        $this->emp_id = $emp_id;
    }

    public function getEmpName(): string
    {
        return $this->emp_name;
    }

    public function setEmpName(string $emp_name): void
    {
        $this->emp_name = $emp_name;
    }

    public function saveNewEmployee(Employee $em): bool
    {

        $emp_saved_successfully = true; // code to save a new employee into the employee table
        if ($emp_saved_successfully) {
            return true;
        }

        return false;
    }
}


/*
* Now, the Employee class has one single responsibility, which is taking care of the employee database operations
* The responsibility of generating employee report is moved into the ReportGenerator class.
*/
