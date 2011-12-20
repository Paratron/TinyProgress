About TinyProgress
==================
TinyProgress is a tool to display the development progress of a project both to yourself and your colleagues and/or customers.

Made with beautiful HTML5 + CSS3.


How to use
----------
Create a new JSON file in the `lib/progress/` folder, containing the progress information you want to display.
The file structure is the following:

    {
        project: {
            name: "My Project name",
            description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor."
        },
        milestones: {
            "milestone name 1":{
                "feature name 1":{
                    "description": "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
                    "tasks": {
                        "Task 1": "1/5",
                        "Task 2": 22,
                        "Task whatever": 10
                    }
                },
                "feature name 2":{
                    "description": "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.",
                    "tasks": {
                        "Task 1": "1/5",
                        "Task 2": 22,
                        "Task whatever": 10
                    }
                }
            },
            "milestone name 2":{
            },
            "milestone name x":{
            }
        }
    }