# Jaanek Liiskmaa Practical Test

This is for demonstration purposes only.
In real live the classes/components used here and injected using Dependency Injection would
have less memory footprint by calling their methods statically. 

### Install
- Clone the repository using `git clone`
- Install dependencies by running `composer install`

### Unit Test

Included 100% in Unit Tests:
- app/Utils/RandomArrayGenerator
- app/Utils/RandomStringGenerator
- app/Utils/Rot13Transformer

Excluded from Unit Tests:
- app/Command/OutputCommand - It just reuses the methods from tested classes and methods

### Output
Added command `homework:get-output` that displays the output of the Generators. Rot13Transformer is used in the random string generator. As the random array generator is using random string generator it does not have to use the Rot13Transformer class.
