<?php include 'header.php' ?>


<body>

    <div class="form">
        <br>
        <a ></a>

        <h2>Feedback</h2>
        
        <form method="POST" id="form" action="SA feedbackCreate.php" enctype="multipart/form-data" >
            <div id="error"></div>
            <div>
                <label for="Name"></label>
                <input type="text" name="fname" id='firstname' placeholder="Name*">
                
            </div>
            <div>
                <label for="Email"></label>
                <input type="email" name="email" id='mail'  placeholder="Email*">
                <div id="error"></div>
            </div>
            <div>
                <label for="mNumber"></label>
                <input type="text" name="res_id" required placeholder="Reservation ID">
                <div class="error"></div>
            </div>          
            <div>
                <label for="Requests"></label>
                <textarea name="feedback" id="" cols="50" rows="5" required placeholder="Special Requests"></textarea>
            </div>
            <button name="upload" type="submit" class="Button Button1">Submit Feedback</button> 
            </div>
           

        </form>
        
</body>

<?php include 'footer.php' ?>