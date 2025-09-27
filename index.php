<?php
        function CV(){
                echo "<!DOCTYPE html>";
                echo "<html lang='en'>";
                echo "<head>";
                echo "<meta charset='UTF-8'>";
                echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
                echo "<title>Brian Kristofer Perez - CV</title>";
                echo "<style>
                        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
                        h1, h2 { color: #333; }
                        h1 { font-size: 28px; margin-bottom: 5px; }
                        h2 { margin-top: 30px; border-bottom: 1px solid #ccc; padding-bottom: 5px; }
                        .contact { font-size: 14px; color: #555; }
                        ul { margin-top: 5px; }
                        li { margin-bottom: 5px; }
                </style>";


                echo "<body>";

                echo "<h1>BRIAN KRISTOFER PEREZ</h1>";
                echo "<p class='contact'>Pinamukan Proper, Batangas City | P: +63 9610120723 | briankristoferperez28@gmail.com</p>";

                echo "<h2>Professional Summary</h2>";
                echo "<p>Highly motivated Computer Science student actively studying and developing expertise in backend and API development, with a focus on building scalable and maintainable applications and systems. Eager to learn and apply problem-solving skills and learn industry best practices in an internship setting.</p>";

                echo "<h2>Key Skills and Certifications</h2>";
                echo "<ul>
                        <li><b>Programming Languages:</b> Python, SQL</li>
                        <li><b>Frameworks & Tools:</b> FastAPI, Pydantic, SQLAlchemy, Git, RDBMS</li>
                        <li><b>Technologies:</b> RESTful APIs, Relational Databases, Async Programming</li>
                        <li><b>Software Engineering:</b> Basic Design Patterns, Unit testing, Problem-solving and debugging, Modular Design</li>
                        <li><b>Languages:</b> Fluent in English and Filipino</li>
                </ul>";

                echo "<h2>Education</h2>";
                echo "<p>
                        <b>Batangas State University - Alangilan</b>, Alangilan, Batangas City
                        <br>
                        Bachelor of Computer Science (Aug 2023 – Current)
                </p>";

                echo "<p>
                        <b>Batangas State University - Main</b>, Rizal Avenue, Batangas City
                        <br>
                        Senior High School Student (Aug 2022 – May 2023)
                </p>";

                echo "<h2>University Projects</h2>";
                echo "<p><b>Image-Based Plant Leaf Disease Classifier (May 2025)</b></p>";
                echo "<ul>
                        <li>Collaborated with a team of 5 to design and develop a full stack web application for identifying plant diseases based on images</li>
                        <li>Contributed by using SQLAlchemy to design and develop the MySQL database schema</li>
                        <li>Integrated RESTful API methods to interact with external model inference service</li>
                        <li>Deployed on Render with cloud database hosted on Aiven</li>
                </ul>";

                echo "<p><b>Job Application and Management Software (Dec 2024)</b></p>";
                echo "<ul>
                        <li>Designed and developed a Job Management System console application with OOP principles</li>
                        <li>Designed and integrated a MySQL Database (schema, connectivity, CRUD operations)</li>
                </ul>";

                echo "</body>";
                echo "</html>";
        }
?>
