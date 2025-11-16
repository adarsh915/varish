<style>   body {
    background: #f4f6f9;
    font-family: "Poppins", sans-serif;
  }
        
        /* Card Container for the Form */
        .form-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
        }

        /* Main Heading Style */
        .form-card h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #212529;
            margin-top: 0;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 1rem;
        }

        /* Spacing for form groups */
        .form-group {
            margin-bottom: 1.25rem;
        }

        /* Label Styles */
        .form-group label {
            display: block;
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        /* Icon styling */
        .form-group label i {
            margin-right: 8px;
            color: #6c757d;
        }

        /* Text Input and Textarea Styles */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* File Input Styles */
        input[type="file"] {
            font-size: 0.95rem;
            color: #495057;
        }

        /* Style for the "Choose File" button in modern browsers */
        input[type="file"]::file-selector-button {
            font-weight: 600;
            color: #495057;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        input[type="file"]::file-selector-button:hover {
            background-color: #e2e6ea;
        }

        /* Submit Button Style */
        button[type="submit"] {
            display: inline-block;
            font-weight: 600;
            color: #ffffff;
            background-color: #007bff;
            border: 1px solid #007bff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
</style>


<?php
include 'include/header.php';
include 'db.php';
?>

<?php
// Database connection


// Form submitted?
if (isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Save into DB
        $sql = "INSERT INTO articles (heading, paragraph, image) VALUES ('$heading', '$paragraph', '$image')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Article added successfully!</p>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<p style='color:red;'>Image upload failed!</p>";
    }
}
?>


    <title>Add Article</title>
</head>
<body>
    <h2>Add New Article</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Heading:</label><br>
        <input type="text" name="heading" required><br><br>

        <label>Paragraph:</label><br>
        <textarea name="paragraph" required></textarea><br><br>

        <label>Upload Image:</label><br>
        <input type="file" name="image" accept="image/*" required><br><br>

        <button type="submit" name="submit">Add Article</button>
    </form>



<?php
include 'include/footer.php';
?>