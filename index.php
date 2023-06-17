
<head>
    <title>Assignment</title> 
</head>

<body> 

    <h2> Create Teacher </h2>

    <form action="teacher.php" method="post" >
        <input type="text" name="teacherId" placeholder="teacher-id" required>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="courseId" placeholder="course_id" required>
        <button type="submit">Submit</button>
    </form>
    
    <br> <br>
    
    <h2> Create Course </h2>

    <form action="course.php" method="post" >
        <input type="text" name="Title" placeholder="Title" required>
        <input type="number" name="courseId" placeholder="Course_id required>
        
        <button type="submit">Submit</button>
    </form>

    <h1> <a href ="viewCourse.php" > VIEW COURSE </a> </h1>
    <h1> <a href ="viewTeacher.php" > VIEW TEACHERS </a> </h1>
 </body>