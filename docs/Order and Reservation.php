<?php include 'header.php'; ?>

    <div class="form">
        <h1>Place order</h1>
        <br>
        <div class="container my-3">
            <a href="create.php" class="btn btn-outline-dark">Order Now</a>
</div>
        <a href="https://www.wolt.fi/">
            <img alt="wolt"
                src="https://38wbse3riso447pt6m3uirjg-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/logo_anim_black.gif"
                width="150" height="70">
        </a>

        <h2>Reservation</h2>

        <form method="POST" id="form" action="SA create.php" enctype="multipart/form-data" >
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
                <input type="text" name="pNumber" required placeholder="Phone Number*">
                <div class="error"></div>
            </div>
            <div>
                <label for="date"></label>
                <input type='date'  name='date' required placeholder="Date*">
                <div class="error"></div>
            </div>
            <div>
                <label for="time"></label>
                <input type='time'  name='time' required placeholder="Reservation Time*">
                <div class="error"></div>
            </div>
            <div>
                <label for="nOfGuests"></label>
                <input type="number" name='guests' placeholder="Number of Guests*">
                
            </div>
            <div>
                <label for="Requests"></label>
                <textarea name="Requests" id="" cols="50" rows="5" placeholder="Special Requests"></textarea>
            </div>
            <button name="upload" type="submit" class="Button Button1">Reserve Now</button> 
            </div>
           

        </form>
        
</body>
<?php include 'footer.php'; ?>