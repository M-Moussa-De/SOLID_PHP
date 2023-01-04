# Single Responsibility Principle (SRP)

This principle states that a class should have only a single responsibility, or job. This means that a class should have only one reason to change.
SRP can make our code more modular, easier to maintain, and to understand.

## Within the before folder

The Employee class is having 2 responsibilities:

- To handle an employee database operations
- To generate reports about an employee

This is clearly violating the `SRP` in SOLID.

## Within the after folder

We've created a new class `ReportGenerator`, and within it a `generateReport` method that takes an employee as an argument and generate a report about him/her.

Now, the `Employee` class has one single responsibility, which is taking care of the employee database operations

Every class now can do one task, makes it easier to maintain and follow the code. On the other hand, it became easier perhaps later in time to add more methods or to extend (preferable) the `ReportGenerator` class to generate different types of reports like CSV or Excel.
