About TinyProgress
==================
TinyProgress is a tool to display the development progress of a project both to yourself and your colleagues and/or customers.

Made with beautiful HTML5 + CSS3.


How to use
----------
Create a new JSON file in the `lib/progress/` folder, containing the progress information you want to display.
The file structure is the following:

    {
        "milestone name 1":{
            "task name 1":{
                "part 1": "1/5",
                "part 2": 22,
                "part whatever": "10%"
            },
            "task name 2":{
                "part 1": "1/5",
                "part 2": 22,
                "part whatever": 10
            }
        },
        "milestone name 2":{
        },
        "milestone name x":{
        }
    }