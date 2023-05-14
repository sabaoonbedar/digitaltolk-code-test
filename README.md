# Digital-Tolk Test


## Good Points

- After going through the repositories and code, I think that there is consitent coding style, indentations, proper modular structure and line breaks. Which is a good programming practice. 
___
- There is a concept of dependency injections used, which is not only providing decoupling of components but also enhancing the code flexibility and maintainability as it follows the principles of seperation. 
__For Example__: In BookingRepository class constructor there is dependency injection of Job model and the MailerInterface.
___
- The code utilises the ORM functionalities of laravel. Eager loading and pagination is used in the BookingRepository class which enhances the efficiency and performance.
__For example:__ In the BookingRepository class, in various functions, the pagination is used. While eager loading is used in getUsersJobs funciton where relationships are loaded. 
___
- The code contains multiple functions, with good usage of DB and Eloquent queries. Eloquent provides a good Object relationship mapping while DB queries are faster. __For example:__ ```alerts()``` function joins 'jobs' table with languages via the DB facade.
___
- In the code there is repository pattern which separates the data access logic from business logic which is very good practice. __For Example:__ BookingRepository class is considered to be a data access layer.
___
- The code uses Monolog library for logging; a good way to deal with logs of the code. __For Example:__ ```sendPushNotificationToSpecificUsers()``` function and some other functions using logging for bug finding and error tracibility, when the application faces an error.
___
- In the provided code Carbon library is used which is famous library for dates handling in laravel. I have also extensively used Carbon in some of my projects.
___
- Using BaseRepository class in the code is a good practice, as it provides common interface and also works as an Abstraction layer.
___
- The code used Laravel models' relationships well, which is good practice for enhancing the performance.
___
- Associative arrays are used in BookingRepository class in multiple functions which is a boost to the performance. As with the usage of Associative array, we can make sure that we can quickly retrieve and push data with the combination of key-valu pairs because the Time complexity of Associate arrays are O(1), which means that whatever the input size is, its time complexity will remain unchanged and will be constant for faster performance and efficiency. Store function of BookingRepository is using it extensively and similarly some other functions.
___
- Events architecture has been implemented in the BookingRepository class due to which the code is decoupled and organised. but syncrhonous pattern is used for events, which can be converted to asynchronous for putting the heavy tasks to the background, thus boosting performance.

## Bad Points
- In the BookingController and BookingRepository classes the env variables are accessed directly which is not good practice and might effect efficiency; instead using variables from config would be better, where we can link the env variables.
___
- The code lacks proper validation and generic approach at some places. For example at some places, we can avoid duplication by using one generic function as a reusable component. 
___
- The code lacks the exceptional handling which is one of the most important factor that is missing in the code.
___
- In the BookingRepository I saw less concern and focus towardes query optimization specifically for very large data sets, which is another point that could be addressed. I addressed this concern via refactoring in some functions. __For Example__: I refactored lazy loading in the function ```getUsersJobs()``` with an assumption of dealing with large datasets.
___
- While refactoring the code I saw duplications of return statements, functions were having unnecessary complexities, usage nested if and else conditions could cause readibility issues which is not good practice. using ```switch()```, ternary operators, early returns, coalescing operator would be better idea where it fits.
___
- Naming inconsistency: According to the linked documention in this ReadMe, variables naming are not consistent throughout the code and also cases are mixed as we might use ```camel case``` for variable names while currently snake cases are availed although it might be a matter of personal preference. But followin documentation if good. Although the linked documentationis not officially laravel but still gives a good idea about naming conventions. You can visit the documentation for conventions here: [Naming Conventions](https://xqsit.github.io/laravel-coding-guidelines/docs/naming-conventions/)
___
- In some functions the code which was not in use were commented which might effect the readibility of the code so removing it is better then commenting it.
___
- In the code there is lack of parameter hints. __For Example:__ in the BookingRepository class parameters are passed to function but they are lacking parameter hints. Also proper docstrings for each function is missing which describes the purpose of the function as a whole.
___
- Lack of scheduling and queues for the background processes like in the functions where push notifications or emails were used we can do the same task via background processes which will be more efficient.

## Refactoring
- I did some refactoring in the BookingRepository class by giving comments with each change. I went over few of the functions where I felt refactoring is necessary and so as I did. But I didn't do a complete refactoring, while the code might still need some more.
- Overall with the refactoring, we must ensure that proper naming conventions should be followed and should be consistent. 
- Proper repository structure should be followed. Currently the project is following a OK repo structure e.g. controllers and tests are in their corresponding folders and are seperate. Similary Repository folder name should be changed to something useful as the current name of Repository folder doesn't convey any meaning. Further improvements can also be done in the repo structure. As we might introduce services. 
- Also simplified complex logics and improved optimization at some places as part of the refactoring.
- Proper docstrings should be used as part of the refactoring as I alread mentioned above.

## Unit Testing
- Wrote unit test for the function ```testWillExpireAt()``` in ```Helpers\TeHelper```
