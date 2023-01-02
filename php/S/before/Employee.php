<?php

namespace App\S\Before;

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
        // code to save a new employee into the employee table
        $emp_saved_successfully = true;
        if ($emp_saved_successfully) {
            return true;
        }

        return false;
    }

    public function generateReport(Employee $emp): void
    {
        // logic to generate a report about an employee
    }
}


/*
* The Employee class is having 2 responsibilities:
* Firstly, handling employee database operation
* Secondly, generating reports about an employee
* This is clearly violating the S in SOLID, which states that a class should have only one reason to change
* Let's see how can refactor this class to adhere to the SOLID (Please, see the after folder)
*/
