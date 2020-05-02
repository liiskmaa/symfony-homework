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
