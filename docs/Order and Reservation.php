<?php include 'header.php' ?>


<body>

    <div class="form">
        <h1>Place order</h1>
        <br>
        <a href="https://www.wolt.fi/">
            <img alt="wolt"
                src="https://38wbse3riso447pt6m3uirjg-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/logo_anim_black.gif"
                width="150" height="70">
        </a>

        <h2>Reservation</h2>

        <form>
            <div>
                <label for="Name"></label>
                <input type="text" name="Name" placeholder="Name">
            </div>
            <div>
                <label for="mNumber"></label>
                <input type="text" name="pNumber" placeholder="Phone Number">
            </div>
            <div>
                <label for="Email"></label>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div>
                <label for="date"></label>
                <input type='date' placeholder="Date">
            </div>
            <div>
                <label for="time"></label>
                <input type='time' placeholder="Reservation Time">
            </div>
            <div>
                <label for="nOfGuests"></label>
                <input type="number" placeholder="Number of Guests">
            </div>
            <div>
                <label for="Requests"></label>
                <textarea name="Requests" id="" cols="50" rows="5" placeholder="Special Requests"></textarea>
            </div>
            <button class="Button Button1">Reserve Now</button>


        </form>

</body>

<?php include 'footer.php' ?>