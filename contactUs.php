<?php include('header.php');?>
<div class="contact" id="contactUs">
        <h1>Contact Us</h1>
        <div class="sides">
            <div class="image">
                <img src="https://previews.123rf.com/images/milkos/milkos2001/milkos200106283/138924095-discontented-customer-guy-talking-on-phone-using-laptop-having-computer-problem-complaining-about-is.jpg" alt="">
            </div>
            <div class="form">
                <form action="action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <label for="country">Country</label>
                    <select id="country" name="country">
                      <option value="australia">Australia</option>
                      <option value="canada">Canada</option>
                      <option value="usa">USA</option>
                    </select>
                
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  <input type="submit" value="Submit">
                 </form>
            </div>
        </div>
    </div>
       
    </div>
    <div class="myFooter">
        <div class="left">
            <h3>Mahira Group Of Company</h3>
            <div class="line"></div>
            <p>Specializing in Premier Sporting Facilities, Equestrian Riding Arenas and General Construction</p>
        </div>
    </div>
<?php include('footer.php');?>