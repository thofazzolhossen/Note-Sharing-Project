<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful File Upload Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
        }

        .upload-container {
            width: 400px;
            background-color: #ffffff;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-left: -12px;
        }
          select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }


        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-left: -12px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="upload-container">
         <h1>Upload a File</h1>
         <form action="#" method="post">
            <div class="form-group">
                <label for="username">File Name:</label>
                <input type="text" id="username" name="username" required>
            </div>
           
           
        </form>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Select a File:</label>
                <input type="file" id="file" name="file" required>
            </div>
            

             <div class="form-group">
                <label for="file">Description of your Note:</label>
                <input style="height:50px;margin: 10px;width:90%;" type="text" placeholder="Type here...">
            </div>

            <div class="form-group">
                <input type="submit" value="Upload">
            </div>
        </form>
    </div>
</body>
</html>
