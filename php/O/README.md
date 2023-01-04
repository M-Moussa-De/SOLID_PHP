# Open-Closed Principle (OCP)

This principle states that software entities (such as classes, modules, and functions) should be open for `extension`, but closed for `modification`.

In other words, we should be able to add new functionality to a class or module without changing the existing code.

This helps to ensure that the code is flexible and maintainable, and it makes it easier to add new features without breaking existing code.

## Within the before folder

The `AreaCalculator` class is no longer open for extension because we have to modify its `sum` method every time we want to add support for a new shape.

This violates the Open-Closed Principle.

## Within the after folder

To refactor this code to follow the Open-Closed Principle, we can create an interface `IShape` that defines a `getArea` method and all of the other shape classes implement this interface. This means, every class implementing the IShape interface has to implement the `getArea` method and calculate its shape area accordingly.

Now, we can easily create/extend more shapes without the need to modify any.
