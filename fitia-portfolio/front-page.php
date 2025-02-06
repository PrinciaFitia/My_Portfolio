<?php get_header(); ?>

<div class="container">

    <!-- About Section -->
    <section id="about">
        <div class="about-container">
            <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/profil.png" alt="Fitia Princia" class="profile-image">

            </div>
            <div class="about-text">
                <h2>Hi! <br> I'm Fitia Princia</h2>
                
                <p>I was born and raised in the heart of Antananarivo, Madagascar, and I’ve always been the kind of person who’s curious about how things work.  
        I didn’t have a big “aha!” moment that led me to data science it just made sense over time. I love patterns, problem-solving, and finding smart ways to make things better.</p>

        <p>Right now, I’m studying <strong>Computer Science (Information Systems)</strong> and <strong>Management (Organizational Management)</strong>.  
        I’m passionate about using data and technology to solve real world problems, whether it’s improving businesses, helping people make better decisions, or just making life a little easier.</p>

        <p>But tech isn’t my only love I’m also super into fashion. For me, it’s more than just clothes; it’s a way to express who you are.  
        I dream of blending data and fashion to help people build wardrobes that truly match their personality and lifestyle.  
        (Imagine an app that picks the perfect outfit based on your mood , how cool would that be?)  
        Lately, I’ve even started learning to sew with my grandma, who’s an amazing tailor, and it’s been such a fun way to connect with her while exploring fashion from a new angle.</p>

        <p>This portfolio is a little snapshot of my journey so far. Hope you enjoy it as much as I’ve loved creating it! </p>

        <p class="quote"><strong>“The only way to do great work is to love what you do.” – Steve Jobs</strong></p>


                <!-- <a href="#projects" class="btn">View Projects</a> -->
            </div>
        </div>
    </section>
    
    <!--  Projects Section -->
<section id="projects">
    <h2>My Projects</h2>
    <div class="projects-container">

        <!-- Puissance 4 Game -->
        <a href="<?php echo get_template_directory_uri(); ?>/documents/Puissance4.pdf" target="_blank" class="project-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg" alt="Puissance 4 Game">
            <h3>Puissance 4 Game</h3>
            <p>A <strong> Java-based </strong>take on the classic Connect 4! This project was all about <strong> algorithm design, user interaction, and strategy</strong> one of my very first coding challenges.</p>
        </a>

        <!-- Student Schedule App -->
        <a href="<?php echo get_template_directory_uri(); ?>/documents/EDT.pdf" target="_blank" class="project-card">           
        <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpeg" alt="Student Schedule App">
            <h3>Student Schedule App</h3>
            <p>A <strong> Java-based </strong> calendar app that helps students (including me!)</p>
        </a>

        <!-- Car Parking Management System -->
        <a href="<?php echo get_template_directory_uri(); ?>/documents/Car.pdf" target="_blank" class="project-card">           
            <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpeg" alt="Car Parking Management System">
            <h3>Car Parking Management System</h3>
            <p>This was a deep dive into <strong> design and project management </strong> . </p>
        </a>

        <!-- Fashion Recommendation App -->
        <a href="<?php echo get_template_directory_uri(); ?>/documents/NSY115.pdf" target="_blank" class="project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt="Fashion Recommendation App">
            <h3>Fashion Recommendation App</h3>
            <p>Imagine an app that <strong>recommends outfits based on your body type, measurements, and personal style </strong> that’s what I proposed in this project! A perfect blend of recommends outfits based on your body type, measurements, and personal style </strong> </p>
        </a>

        <!-- DIY and Crafting Projects -->
        <a href="<?php echo get_template_directory_uri(); ?>/documents/NSY115.pdf" class="project-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpeg" alt="DIY and Crafting Projects">
            <h3>DIY & Crafting Projects</h3>
            <p>A collection of my <strong> handmade creations </strong>, from <strong>sewing clothes</strong> to <strong> personalized gifts </strong>.</p>
        </a> 

    </div>
</section>    
    

<!-- Resume Section -->
<section id="resume">
    <h2>My Resume</h2>

    <div class="resume-container">
        <!-- Resume Content (Only One Section Visible at a Time) -->
        <div class="resume-content">

            <!-- Education Section -->
            <div id="education" class="resume-section active">
                
                <div class="resume-column">
                    <div class="resume-row">
                    <!-- Licence en Informatique -->

                        <div class="resume-card " >
                        <h4>Bachelor in Computer Science (Licence en Informatique )</h4>
                        <p><strong>Where:</strong> CNAM Madagascar, Antananarivo</p>
                        <p><strong>When:</strong> 2020 - 2023</p>
                        <p><strong>Description:</strong> Currently pursuing a degree in computer science, focusing on programming, systems, and IT concepts.</p>
                        </div>

                    <!-- RNCP Niveau 6 - Concepteur en Architecture Informatique -->
                        <div class="resume-card ">
                        <h4>RNCP Level 6 - IT Architecture Designer (Information Systems Track)</h4>
                        <p><strong>Where:</strong> CNAM Madagascar, Antananarivo</p>
                        <p><strong>When:</strong> 2024 - Present</p>
                        <p><strong>Description:</strong> Currently pursuing a degree in IT architecture and information systems design.</p>
                        </div>
                    </div>

                    <div class="resume-row">
                    <!-- Licence en Gestion - Management Organisationel -->
                    <div class="resume-card ">
                        <h4>Bachelor in Management (Licence en Gestion )</h4>
                        <p><strong>Where:</strong> CNTEMAD Madagascar, Mahajanga</p>
                        <p><strong>When:</strong> 2023 - Present</p>
                        <p><strong>Description:</strong> Studying management to complement IT skills with organizational and administrative knowledge.</p>
                    </div>

                    <!-- Baccalauréat C -->
                    <div class="resume-card ">
                        <h4>High School Diploma in Science (Baccalauréat C)</h4>
                        <p><strong>Where:</strong> Lycée Privé Fanoellie Imerinafovoany</p>
                        <p><strong>When:</strong> 2019 </p>
                        <p><strong>Description:</strong> Completed high school with a focus on science, laying the groundwork for technical and analytical skills.</p>
                    </div>
                    </div>
                </div>
            </div>

            <!--  Experience Section -->
            <div id="experience" class="resume-section">
                <div class="resume-column">
                <div class="resume-row">
                    <!-- Chargée des Ressources Humaines et Comptabilité -->
                    <div class="resume-card">
                        <h4>Human Resources and Accounting Officer</h4>
                        <p><strong>At:</strong> SSGN (Security, Guarding, and Cleaning Services)</p>
                        <p><strong>When:</strong> December 2023 - July 2024</p>
                        <p><strong>Description:</strong> Managed employee files, tracked absences and overtime, administered salaries, and integrated new employees into insurance and internal procedures.</p>
                    </div>

                    <!-- Internship in Computer Science -->
                    <div class="resume-card">
                        <h4>Internship in Computer Science</h4>
                        <p><strong>At:</strong> BSAE </p>
                        <p><strong>When:</strong> Nov 2024 - Feb 2025</p>
                        <p><strong>Description:</strong> Familiarized with Dolibarr and WordPress using HTML, CSS, JS, PHP, and MySQL. Started with simple modifications (e.g., modifying existing modules in Dolibarr and sites in WordPress) and progressed to creating custom modules and themes.</p>
                    </div>
                </div>
                </div>
            </div>

            <!--  Skills & Interests Section -->
            <div id="skills" class="resume-section">
                <div class="skills-interests">
                    <!-- Skills -->
                    <div class="resume-card skills">
                        <h3>Skills</h3>
                        <div class="skills-list">
                            <div class="skill-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/S1.png" alt="Coding">
                                <p>HTML, CSS, JS, PHP, MySQL ,Java , Python</p>
                            </div>
                            <div class="skill-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/S2.png" alt="Data Analysis">
                                <p>Dolibarr & WordPress Development</p>
                            </div>
                            <div class="skill-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/S3.png" alt="Machine Learning">
                                <p>HR & Accounting Management</p>
                            </div>
                            <div class="skill-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/S4.png" alt="Machine Learning">
                                <p>Sewing</p>
                            </div>
                            <div class="skill-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/S5.png" alt="Machine Learning">
                                <p>Crafting</p>
                            </div>
                        </div>
                    </div>

                    <!-- Interests -->
                    <div class="resume-card interests">
                        <h3>Interests</h3>
                        <div class="interests-list">
                            <div class="interest-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/I1.png" alt="Basketball">
                                <p>Fashion</p>
                            </div>
                            <div class="interest-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/I2.png" alt="Reading">
                                <p>Reading</p>
                            </div>
                            <div class="interest-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/I3.png" alt="Music">
                                <p>Creativity</p>
                            </div>
                            <div class="interest-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/I4.png" alt="Music">
                                <p>Data science and technology</p>
                            </div>
                            <div class="interest-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/I5.png" alt="Music">
                                <p>Problem solving</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation Menu (Right Side) -->
        <nav class="resume-menu">
            <ul>
                <li><a href="#" class="resume-tab active" data-target="education">Education</a></li>
                <li><a href="#" class="resume-tab" data-target="experience">Experience</a></li>
                <li><a href="#" class="resume-tab" data-target="skills">Skills & Interests</a></li>
            </ul>
        </nav>

    </div>
</section>




   <!-- Contact Section -->
<section id="contact">
    <div class="contact-container">
        <div class="contact-info">
               <!-- QR Code -->
            <!-- <div class="qr-code">
                <img src="<?php echo get_template_directory_uri(); ?>/images/qr-code.png" alt="Scan me">
                <p>Scan this QR code to start a chat on Whatsapp</p>
            </div> -->
            <!-- QR Code WhatsApp dynamique --> 
            <div class="qr-code"> 
                <?php echo do_shortcode('[whatsapp_qr phone="+261335152075"]'); ?> 
                <p>Scan this QR code to start a chat on WhatsApp</p> 
            </div> 

            <h2>Contact Me</h2>
            <p>Thanks for stopping by, and I can’t wait to hear from you! Let’s create something awesome together. </p>

            <p>Warmly,<strong>Fitia Princia</strong></p>
            <p>Email: <a href="mailto:andriamparanyfitiaprincia@gmail.com">andriamparanyfitiaprincia@gmail.com</a></p>
            <p>Phone: +261 33 51 520 75</p>
            <p>IG: @princiafitia_</p> 
           
            
        </div>
    </div>
</section>


</div>
<?php get_footer(); ?> 
