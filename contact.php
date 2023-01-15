<img src="images/small.jpg" class="img-responsive" style="margin: 0 auto; width: 100%;">
<div class="page">

    <div class="container">

        <div class="row">

            <h2 style="font-family:'Montserrat'; font-size: 25px; color: #870053">Contact us</h2>



            <div class="reservo3">



                <p class="resparagraph">PLEASE FILL UP THE FOLLOWING FORM <span class="glyphicon glyphicon-user"></span>
                    :</p> <br>



                <p class="plz_red">

                    <?php 

          if (isset($_GET["sentok"])){

            ?>

                    Thank you for filling the form. We will get back to you shortly!

                    <?php

          }

          elseif (isset($_GET['err']))

          {



          }

          ?>



                </p>











                <form class="form-horizontal" role="form" action="./contact_send" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="inputName" class="col-sm-2">Name</label>

                        <div class="col-sm-10">

                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2">Email</label>

                        <div class="col-sm-10">

                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputsubject" class="col-sm-2">Phone No.</label>

                        <div class="col-sm-10">

                            <input type="tel" class="form-control" name="phone" id="inputsubject"
                                placeholder="Phone no">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputsubject" class="col-sm-2">Subject</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control" name="subject" id="inputsubject"
                                placeholder="Subject">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputPassword3" class="col-sm-2">Message</label>

                        <div class="col-sm-10">

                            <textarea class="form-control" rows="5" name="message"
                                placeholder="Your Message Here...."></textarea>

                        </div>

                    </div>



                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">

                            <button type="submit" class="btn btn-default">Submit</button>

                        </div>

                    </div>

                </form>











                <div class="clearfix"></div>



            </div>
            <!--row-->









            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104802.32980072804!2d150.61348971968957!3d-34.829261929700145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b137c6ad0d74247%3A0x6bfbbea3a7bc7d55!2sLittle%20Bell%20Cattery!5e0!3m2!1sen!2snp!4v1577156751052!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<!--welcome-->