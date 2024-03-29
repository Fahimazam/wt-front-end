<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/static/css/lost_found_form.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Lost & Found Form </title> 
</head>
<body>
    <div class="container">
        <header>Lost Form</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="color: white;">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your address" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Student ID</label>
                            <input type="number" placeholder="Enter your student ID" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Department (Batch) </label>
                            <input type="text" placeholder="Enter your department" required>
                        </div>
                        
                    </div>
                </div>

                <div class="details ID">
                    <span class="title" style="color: white;">Lost Item Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Item Type</label>
                            <input type="text" placeholder="Enter Item type" required>
                        </div>

                        <div class="input-field">
                            <label for="exampleColorInput" class="form-label">Pick the Item Color</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" style="width: 100%;">
                        </div>

                        <div class="input-field">
                            <label>Item Image </label>
                            <input type="file" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Lost Location</label>
                            <input type="text" placeholder="Enter lost location" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Date & Time</label>
                            <input type="date" placeholder="Enter lost date & time" required>
                        </div>
                        <br>
                        <div class="input-field">
                            <label>Any Comment</label>
                            <input type="text" placeholder="Comment" required>
                        </div>

                    </div>


                    <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            
        </form>
    </div>

    <script src="/static/js/lost_found_form.js"></script>
</body>
</html>