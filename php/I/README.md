# Interface Segregation Principle (ISP)

This principle states that a client should not be forced to depend on interfaces it does not use.

In other words, an interface should contain only the methods that are required by the client. A class that implements the interface should provide implementations for all of the methods in the interface, but it should not be required to implement any additional methods that are not used by the client.

## Within the before folder

`IVehicle` interface includes a few methods that meet different vehicle types.

We have `Car` and `Plane` classes implementing the `IVehicle` interface. However, `Car` class has to implement methods that are not required in it and it's the same case with the `Plane` class.

This violates the `Interface Segregation Principle (ISP)`

## Within the after folder

To adhere our code to the `ISP`, we need to refactor our code as following:

We divided the necessary methods for vehicles into two interfaces and every class of `Car` and `Plane`
will implement the suitable interface. This means, that not class will have to implement a method which is not required.

This is exactly what `ISP` states.
