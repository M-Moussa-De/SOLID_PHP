# Dependency Inversion Principle (DIP)

This principle states that high-level modules should not depend on low-level modules, but rather both should depend on abstractions.

In other words, the code should depend on abstractions, rather than on concrete implementations. This can make our code more flexible and maintainable, as it reduces the amount of coupling between different parts of the program.

## Within the before folder

We've got three classes `User`, `UserService` and `MySQLDB`. The `UserService` accepts a reference to the `MySQLDB` class to do user related data operations

We notice that, the `UserService` class depends directly on the `MySQLDB` class, which makes it more difficult to modify or extend the UserService class without affecting the `MySQLDB` class.

This violates the `Dependency Inversion Principle (DIP)`

## Within the after folder

To adhere our code to the `DIP`, we should refactor our code this way:

The `UserService` class depends now on the `IDataAccessObject` interface, rather than on a specific implementation such as `MySQL` or `MongoDB`. This allows the `UserService` class to be used with any implementation

of the `IDataAccessObject` interface, making it more flexible, scalable and maintainable.
