<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Bed Booking</title>
    <style>
        /* CSS for styling */
        *{
            margin:0;
            font-family: Arial;
            border: border-box;
        }
        body{
            background-image: url("bcc2.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position: fixed;
      display: flex;
        }
        .nav-bar{
            height: 60px;
            background-color: #57e1d8;
            color:white;
            display:flex;
            align-items: center;
            justify-content:space-evenly ;
           position: fixed;
           width: 100%;
              
            
        }
        .nav-logo{
            height:100px;
            width:255px;
            margin-top: -200px;
           
        }
        .logo{
            background-image:url("logo1.png") ;
            height:300px;
            background-size: cover;
            width:100%;
        margin-left: -150px;
        }
        .border{
            border: solid transparent;
           border-width: 100%;
        }
        .border:hover{
            border: solid white;
        }
        /*box2*/
        .add1{
            margin-left: 15px;
            color:#CCCCCC;
            font-size: 0.86;
        }
        .add2{
            margin-left: 5px;
        }
        .add-icon{
            display: flex;
            align-items: center;
        }
        /*box3*/
        .nav-search{
            display:flex;
            justify-content:space-evenly;
            background-color: rgb(246, 247, 247);
            width: 350px;
            height: 40px;
            border-radius: 4px;
            
        }
        .search-select{
            background-color: #f3f3f3;
            width:50px;
            text-align: center;
            border-top-left-radius:4px;
            border-bottom-left-radius: 4px;
            border:none;
        }
        .search-input{
            width:100%;
            font-size: 1rem;
            border:none;
        }
        .search-icon{
            width:45px;
            display:flex;
            justify-content: center;
            align-items: center;
            font-size:1.2rem;
            background-color:#fcf7f7;
            color:#0F1111;
            border-top-right-radius:4px;
            border-bottom-right-radius: 4px;
        }
        nav {
            background-color: #333; /* Background color of the navbar */
            padding: 10px; /* Padding around the navbar */
            position: static;
        }
        
        ul {
            list-style-type: none; /* Removes default list styling */
            margin: 0;
            padding: 0;
        }
        
        li {
            display: inline; /* Display list items inline */
            margin-right: 20px; /* Spacing between list items */
            margin-left: 10px;
        }
        
        a {
            text-decoration: none; /* Remove default underline from links */
            color: white; /* Color of the text */
            font-weight: bold; /* Bold text */
        }
        
        a:hover {
            color:#57e1d8; /* Color of the text on hover */
        }
        .sidebar {
    float: left; /* Float the sidebar to the left */
    width: 550px; /* Set the width of the sidebar */
    padding: 20px; /* Add some padding */
    background-color: transparent; /* Set background color */
    border-right: 1px solid #ccc; /* Add a border to the right */
}

.sidebar label {
    display: block; /* Make labels display as blocks */
    margin-bottom: 5px; /* Add some margin bottom for spacing */
}

.sidebar input,
.sidebar select {
    width: calc(100% - 20px); /* Make input fields and selects full width */
    padding: 5px; /* Add some padding */
    margin-bottom: 10px; /* Add some margin bottom for spacing */
}

.sidebar input[type="submit"] {
    width: auto; /* Make submit button default width */
}

        .nav-bar2{
            position: fixed;
            width: 100%;
            margin-top: 60px;
        }
        form {
            background-color: #ffffff84;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
            margin: 0 auto;
            margin-top: 100px; /* Add margin to separate forms */
        }
    button{
        background-color: #007bff;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
    }
        h2 {
            color: #343a40;
        }
    
        label {
            display: block;
            margin-bottom: 8px;
            color: #495057;
        }
    
        select,
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
    
        input[type="date"] {
            width: calc(100% - 22px);
        }
    
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
    
        input[type="submit"]:hover {
            background-color: #0056b3;
        }.bed{
            height: 50px;
            width:50px;
            background-color: yellow;
    margin-left:10px;
    margin-top: 10px;
    border-radius: 5px;
        }
        .beds{
            display:flex;
        }
        .rooms{
            background-color: rgba(255, 255, 255, 0.47);
            border-radius: 20px;
            width:650px;
            height: 200px;
            margin-left: 30px;
        }
        label{
            font-size: 20px;
            font-weight: bolder;
            color:black
        }
        #ICU{
            margin-top: 100px;
        }
       
    </style>
</head>
<body>
<div class="nav-bar">
    <div class="nav-logo border">
        <div class="logo"></div>
    </div> 
    <div class="add-icon">
</div>
</div>
<div class="nav-bar2" style="background-color: #57e1d8;">
    <nav >
        <ul style="margin-left:700px">
        <li><a href="./diabetes.html">Home</a></li>
        <li><a href="./heart_disease.html">Medical</a></li>
        <li><a href="./heart_disease.html">Tests</a></li>
        <li><a href="./heart_disease.html">#</a></li>
        <li><a href="./heart_disease.html">#</a></li>
       
            <li style="color:white;font-size:16px"> <i class="fa-solid fa-cart-plus"></i></li>
        </ul>
    </nav>
    
    
</div>
</header>
<br><br><br><br><br><br><br>
<div class="sidebar">
    <form id="bookingForm<?php echo $i; ?>" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="student_name">Patient Name:</label>
        <input type="text" name="patient" required>
        <br>

        <label for="indate">In Date</label>
        <input type="date" name="indate" required>
        <br>

        <label for="outdate">Out Date</label>
        <input type="date" name="outdate" required>
        <br>

        <label for="type">Type</label>
<select name="type" id="typeSelect" onchange="updateBedOptions()">
    <option value="ICU">ICU</option>
    <option value="General Ward">General Ward</option>
    <option value="Paediatrics">Paediatrics</option>
    <option value="Semi special">Semi special</option>
</select>
<br>

<label for="roomno">Bed No</label>
<select name="roomno" id="bedSelect">
    <!-- Bed options will be populated dynamically -->
</select>
<br>


        <label for="visitor">Visitor Name</label>
        <input type="text" name="visitor" required>
        <br>

        <input type="submit" value="Submit">
    </form>
    <br><br>
    <button> <a href="visitordashboard.php">Registrations</a></button>
</div>
<br><br><br><br><br><br><br>
<div id="ICU" >
<center><h2 style="color: white;font-weight:bolder; font-size:50px;">ICU</h2></center>

<?php
// Replace these with your database credentials
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bedbooking";

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['patient'])) {
    // Fetch booked room numbers from the database
    $sql = "SELECT roomno FROM book";
    $result = $conn->query($sql);
    $bookedRooms = array();

    if ($result->num_rows > 0) {
        // Store room numbers in the array
        while ($row = $result->fetch_assoc()) {
            $bookedRooms[] = $row["roomno"];
        }
    }

    // Debugging statement
    
    $studentName = $_POST["patient"];
    $inDate = $_POST["indate"];
    $outDate = $_POST["outdate"];
    $type = $_POST["type"];
    $visitorName = $_POST["visitor"];
    $roomno = $_POST["roomno"];
    if (in_array($roomno, $bookedRooms)) {
        echo "<h2 style=color:white;>Room is Booked</h2>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO book (patient, type1, indate, outdate, visitor, roomno) 
                VALUES ('$studentName', '$type', '$inDate', '$outDate', '$visitorName', '$roomno')";

    // Insert data into the database
    $sql = "INSERT INTO book (patient, type1, indate, outdate, visitor, roomno) 
            VALUES ('$studentName', '$type', '$inDate', '$outDate', '$visitorName', '$roomno')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
$sql = "SELECT roomno FROM book";
$result = $conn->query($sql);
$bookedRooms = array();

if ($result->num_rows > 0) {
    // Store room numbers in the array
    while ($row = $result->fetch_assoc()) {
        $bookedRooms[] = $row["roomno"];
    }
}
$conn->close();
?>
<div class="rooms">
<div class="beds" style="color:white">
    <?php for ($i = 101; $i <= 110; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    <br>
    <br>
  
    <div class="beds" style="color:white">
    <?php for ($i = 111; $i <= 120; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    </div>
    <br><br>
    <center><h2 style="color: white;font-weight:bolder; font-size:50px">General Ward</h2></center>
    <div class="rooms">
<div class="beds" style="color:white">
    <?php for ($i = 201; $i <= 210; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    <br>
    <br>
    <div class="beds" style="color:white">
    <?php for ($i = 211; $i <= 220; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    </div>
    <br><br>
    <center><h2 style="color: white;font-weight:bolder; font-size:50px">Paediatric</h2></center>
    <div class="rooms">
<div class="beds" style="color:white">
    <?php for ($i = 301; $i <= 310; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    <br>
    <br>
    <div class="beds" style="color:white">
    <?php for ($i = 311; $i <= 320; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    </div>
    <br><br>
    <center><h2 style="color: white;font-weight:bolder; font-size:50px">Special</h2></center>
    <div class="rooms">
<div class="beds" style="color:white">
    <?php for ($i = 401; $i <= 410; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    <br>
    <br>
    <div class="beds" style="color:white">
    <?php for ($i = 411; $i <= 420; $i++) { ?>
        <div class="bed" id="<?php echo $i; ?>" style="background-color: <?php echo (in_array($i, $bookedRooms)) ? 'red' : 'green'; ?>"><?php echo $i ?></div>
    <?php } ?></div>
    </div>



<?php ?>
    </div>
    <script>
        // JavaScript for booking a bed
   
    function updateBedOptions() {
        var typeSelect = document.getElementById("typeSelect");
        var bedSelect = document.getElementById("bedSelect");
        var type = typeSelect.value;
        
        // Clear existing options
        bedSelect.innerHTML = "";
        
        // Populate bed options based on selected type
        switch(type) {
            case "ICU":
                for (var i = 101; i <121; i++) {
                    var option = document.createElement("option");
                    option.text = i;
                    bedSelect.add(option);
                }
                break;
            case "General Ward":
                for (var i = 201; i < 221; i++) {
                    var option = document.createElement("option");
                    option.text = i;
                    bedSelect.add(option);
                }
                break;
            case "Paediatrics":
                for (var i = 301; i <= 320; i++) {
                    var option = document.createElement("option");
                    option.text = i;
                    bedSelect.add(option);
                }
                break;
            case "Semi special":
                for (var i = 401; i <= 420; i++) {
                    var option = document.createElement("option");
                    option.text = i;
                    bedSelect.add(option);
                }
                break;
            default:
                break;
        }
    }

    // Initially update bed options based on default type selection
    updateBedOptions();


    </script>
</body>
</html>
