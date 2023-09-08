 <!-- Header Area Start -->
 <?php include 'header.php';?>

    <!-- Quick Links Section Start -->
    <!-- Quick Links Section Start -->
        <div class="page-content">
            <div class="section mt-0">
                <div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
                    <div class="quickLinks js-quickLinks">
                        <div class="container">
                            <div class="row no-gutters">
                                
                                <div class="col">
                                    <a href="#" class="link">
                                        <i class="icon-clock"></i><span>Working Time</span>
                                    </a>
                                    <div class="link-drop">
                                        <h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
                                        <table class="row-table">
                                            <tr>
                                                <td><i>Mon-Thu</i></td>
                                                <td>08:00 - 20:00</td>
                                            </tr>
                                            <tr>
                                                <td><i>Friday</i></td>
                                                <td> 07:00 - 22:00</td>
                                            </tr>
                                            <tr>
                                                <td><i>Saturday</i></td>
                                                <td>08:00 - 18:00</td>
                                            </tr>
                                            <tr>
                                                <td><i>Sunday</i></td>
                                                <td>Closed</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" class="link">
                                        <i class="icon-pencil-writing"></i><span>Request Form</span>
                                    </a>
                                    <div class="link-drop">
                                        <h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
                                        <form id="requestForm" method="post" novalidate>
                                            <div class="successform">
                                                <p>Your message was sent successfully!</p>
                                            </div>
                                            <div class="errorform">
                                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                                            </div>
                                            <div class="input-group">
                                                <span>
                                                <i class="icon-user"></i>
                                            </span>
                                                <input name="requestname" type="text" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div class="row row-sm-space mt-1">
                                                <div class="col">
                                                    <div class="input-group">
                                                        <span>
                                                        <i class="icon-email2"></i>
                                                    </span>
                                                        <input name="requestemail" type="text" class="form-control" placeholder="Your Email" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-group">
                                                        <span>
                                                        <i class="icon-smartphone"></i>
                                                    </span>
                                                        <input name="requestphone" type="text" class="form-control" placeholder="Your Phone" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="selectWrapper input-group mt-1">
                                                <span>
                                                <i class="icon-tooth"></i>
                                            </span>
                                                <select name="requestservice" class="form-control">
                                                    <option selected="selected" disabled="disabled">Select Service</option>
                                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                                    <option value="General Dentistry">General Dentistry</option>
                                                    <option value="Orthodontics">Orthodontics</option>
                                                    <option value="Children`s Dentistry">Children`s Dentistry</option>
                                                    <option value="Dental Implants">Dental Implants</option>
                                                    <option value="Dental Emergency">Dental Emergency</option>
                                                </select>
                                            </div>
                                            <div class="row row-sm-space mt-1">
                                                <div class="col-sm-6">
                                                    <div class="input-group flex-nowrap">
                                                        <span>
                                                            <i class="icon-calendar2"></i>
                                                        </span>
                                                        <div class="datepicker-wrap">
                                                            <input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-1 mt-sm-0">
                                                    <div class="input-group flex-nowrap">
                                                        <span>
                                                                <i class="icon-clock"></i>
                                                        </span>
                                                        <div class="datepicker-wrap">
                                                            <input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right mt-2">
                                                <button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" class="link">
                                        <i class="icon-calendar"></i><span>Doctors Timetable</span>
                                    </a>
                                    <div class="link-drop">
                                        <h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
                                        <p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
                                        <p class="text-right"><a href="schedule.html" class="btn btn-sm btn-hover-fill">Details</a></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" class="link">
                                        <i class="icon-price-tag"></i><span>Calculator</span>
                                    </a>
                                    <div class="link-drop">
                                        <h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
                                        <table class="row-table">
                                            <tr>
                                                <td>Initial Consultation</td>
                                                <td>$10</td>
                                            </tr>
                                            <tr>
                                                <td>Dental check-up</td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>
                                                <td>Routine Exam (no xrays)</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>Simple Removal of a tooth</td>
                                                <td>$122</td>
                                            </tr>
                                            <tr>
                                                <td>Teeth cleaning</td>
                                                <td>$50 - $75</td>
                                            </tr>
                                            <tr>
                                                <td>X-ray image</td>
                                                <td>$10</td>
                                            </tr>
                                        </table>
                                        <p class="text-right mt-15"><a href="prices.html" class="btn btn-sm btn-hover-fill">Calculator</a><a href="prices.html" class="btn btn-sm btn-hover-fill">Details</a></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#" class="link">
                                        <i class="icon-emergency-call"></i><span>Emergency Case</span></a>
                                    <div class="link-drop">
                                        <h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
                                        <p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
                                        <ul class="icn-list">
                                            <li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
                                            </li>
                                            <li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
                                        </ul>
                                        <p class="text-right mt-2"><a href="contact.html" class="btn btn-sm btn-hover-fill">Our Contacts</a></p>
                                    </div>
                                </div>
                                <div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
                            </div>
                        </div>
                        <div class="quickLinks-open js-quickLinks-open">
                            <span data-toggle="tooltip" data-placement="left" title="Open panel">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Quick Links Section End -->
    <!-- Quick Links Section End -->

    <!-- Slider Section Start -->
    <!-- Slider Section Start -->
        <main class="medical_slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/banner2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Highest Quality <br> <span> Healthcare </span></h5>
                            <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br>
                            doloremque laudantium, totam rem aperiam.
                            </p>
                            <button type="button" class="btn ">Contact Now</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/banner1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>We Provide <br> <span>Full Medical Care! </span></h5>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br>
                                doloremque laudantium, totam rem aperiam.
                            </p>
                            <button type="button" class="btn ">Contact Now</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </main>
    <!-- Slider Section end -->
    <!-- Slider Section end -->

 <!-- Footer Area Start -->
 <?php include 'footer.php';?>

 