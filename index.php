<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="" alt="">
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#protfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
        </nav>

        <div class="header-text">
            <p> Web Designer</p>
            <h1>Hi, I'm <span>Arul</span><br> Auroville,India</h1>
        </div>
    </div>
</div>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="profile.jpeg" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>I am ARUL MSc Computer Science student at Pondicherry University with
                    a strong passion in the field of IT. My academic pursuits reflects on my
                    dedication in understanding and mastering the world of technology. My
                    journey as a student is marked by curiosity and a thirst for knowledge,
                    driving me to explore various aspects of computer science. My time at
                    Pondicherry University has shaped me into a IT professional who is eager
                    to contribute to the field's advancements and innovations.
                    </p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skill')">Skill</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skill">
                    <ul>
                        <li><span>Web Development</span><br>Front & Backend</li>
                        <li><span>App Development</span><br>Andriod & IOS</li>    
                    </ul>
                </div>

                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2019-2022</span><br>Web Development</li>
                        <li><span>2020-2023</span><br>App Development</li>    
                    </ul>
                </div>

                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2019-2024</span><br>M.Sc CS</li>
                        <li><span>2018-2019</span><br>12th Grade (Science Group)</li>  
                        <li><span>2016-2017</span><br>10th Grade</li>       
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


    <div id="protfolio">

        <div class="container"> 
          <h1 class="sub-title">My Work</h1>
          <div class="work-list">
            <div class="work">
                <img src="work-1.png" >
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p> The app connect people around the world. </p>
                    <a href="#"><img src="exlink.png"></a>
                </div>    
            </div>
            <div class="work">
                <img src="work-2.png" >
                <div class="layer">
                    <h3>Music App</h3>
                    <p> The app connect people around the world. </p>
                    <a href="#"><img src="exlink.png"></a>
                </div>    
            </div>
            <div class="work">
                <img src="work-3.png"  >
                <div class="layer">
                    <h3>Online shopping App</h3>
                    <p> The app connect people around the world. </p>
                    <a href="#"><img src="exlink.png"></a>
                </div>    
            </div>
          </div>
          <a href="" class="btn">See More</a>
        </div>
    </div>
<!--------contact-->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p>vallimurugan3@gmail.com</p>
                <p>7092817244</p>
                <div class="social-icons">
                    <a href=""><img src="insta-icon.png" alt=""></a>   
                </div>
                <a href="ArulCV (2) (1).pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form action="feedback.php" method="post">
                    <input type="text" name="e_name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="t_message"  rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>       
</div>
<div class="copyright">
    <p>Copyright 2024</p>
</div>
</div>


  <script src="Js.js"></script>  
</body>
</html>