<div align="center">

# Library OOP Mini

> A simple PHP Object-Oriented Programming (OOP) library management project.

[![PHP Version](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)](https://git-scm.com)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com)

</div>

---

## Overview
This repository was created to fulfill Assignment 3 for the Web Framework Programming course. The project demonstrates core Object-Oriented Programming (OOP) concepts in PHP, including Classes, Objects, Properties, Methods, and Inheritance.

## Key Features
- **Book Class**: Handles basic physical book properties (Title & Author).
- **Member Class**: Manages library member information.
- **DigitalBook Class**: Inherits from the `Book` class with an additional attribute for file size (`fileSize`).

## Repository Structure
```text
library-5a/
├── book.php          # Base class for books
├── member.php        # Class for library members
├── digitalbook.php   # Inheritance class extending Book
├── index.php         # Main entry point to run the application
├── .gitignore        # Git ignore specification
└── README.md         # Project documentation