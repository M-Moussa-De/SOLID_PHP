# Liskov Substitution Principle (LSP)

This principle states that objects of a subclass should be able to be used in the same way as objects of the superclass.

In other words, if a class B extends a class A, then any code that works with an object of class A should also work with an object of class B. This means that the subclass should not introduce any new behavior that is not present in the superclass.

## Within the before folder

`Dog`, `Cat` and `Parrot` extend the superclass `Animal` and override the `makeSound` method.
However, the `makeSound` method within the Parrot class throws an exception as parrots make no sound.

Hence, the `Parrot` class behaves differently than its parent class `Animal`. Therefore, we can't use the `Animal` and `Parrot` class interchangeable to do the same task.

This exactly violates the `Liskov Substitution Principle(LSP)`

## Within the after folder

We can refactor the code above to adhere to the `LSP`

Inside the `Parrot` class we added a private propertiy represnts the sound/phrase parrots can say or repeat.
This phrase is the output of the `makeSound` method. Starting from there, both `Animal` and `Parrot` classes can be used interchangeable to do the same task.

This was how the `Liskov Substitution Principle (LSP)` might be applied to a class hierarchy involving animals
