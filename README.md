# To-Do List Web Application

<small>[اقرأ الملف باللغة العربية](README.ar.md)</small>


This web application is a simple To-Do list manager that allows users to keep track of their tasks efficiently. Users can add tasks, view their pending tasks, view completed tasks, undo completed tasks, and access additional details if there are more than 5 completed tasks.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Features

- **Add Task:** Users can add tasks to their to-do list.
- **View Tasks:** Users can view their pending tasks on the main page.
- **View Completed Tasks:** Users can view their completed tasks by clicking on the "Completed Tasks" button.
- **Undo Task:** Users can undo completed tasks by clicking on the "Undo" button next to the task.
- **Details for More than 5 Completed Tasks:** If there are more than 5 completed tasks, additional details will be provided.

## Usage

1. **Adding Tasks:** To add a task, simply type the task in the input field provided and click the "Add Task" button.

2. **Viewing Pending Tasks:** Pending tasks are displayed on the main page. They are listed with checkboxes allowing users to mark them as completed.

3. **Viewing Completed Tasks:** Click on the "Completed Tasks" button to view completed tasks. Completed tasks will be displayed along with an option to undo them if needed.

4. **Undoing Completed Tasks:** To undo a completed task, click on the "Undo" button next to the task in the completed tasks list.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/iF6M/To-Do-List
    ```

2. Navigate to the project directory:

    ```bash
    cd To-Do-List
    ```

3. Set up your local server environment to run PHP scripts.

4. Set up a MySQL database to store tasks. You can use the following SQL script to create the necessary table:

    ```sql
    CREATE DATABASE to_do;

    USE to_do;

    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        content TEXT,
        date DATE,
        done BOOLEAN DEFAULT 0
    );
    ```

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/your-feature-name`).
6. Create a new Pull Request.

