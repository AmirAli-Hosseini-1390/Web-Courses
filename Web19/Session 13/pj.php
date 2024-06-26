
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Portfolio</title>
        <link rel="stylesheet" href="./pj.css" />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet" />
    </head>

    <body>
        <!-- Header -->
        <header>
            <h1>Morteza</h1>
            <p id="job">
                Experienced Developer | Web Enthusiast | Tech Innovator | AI
                Researcher
            </p>
            <ul class="navbar">
                <li><a href="#summary">Summary</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#key-Achievements">Key Achievements</a></li>
                <li><a href="#education">Education</a></li>
            </ul>
        </header>

        <!-- Summary -->
        <section id="summary">
            <h3>Summary</h3>
            <div class="summary-container">
                <div class="content">
                    <h1>About <span>Me!</span></h1>
                    <p class="summary-content">
                        Passionate developer with expertise in a diverse range
                        of technologies. Innovator in creating robust and
                        scalable web applications. Skilled in both front-end and
                        back-end development, with a focus on delivering
                        exceptional user experiences.
                    </p>
                </div>
                <img src="./IMG_7921.JPG" alt="" />
            </div>
        </section>

        <!-- Skills -->
        <section id="skills">
            <h3>Skills</h3>
            <div class="skills-container">
                <table>
                    <tr>
                        <th>Languages</th>
                        <td>Python</td>
                        <td>JavaScript</td>
                        <td>PHP</td>
                        <td>C</td>
                        <td>CSS</td>
                    </tr>
                    <tr>
                        <th>Frameworks/Libraries</th>
                        <td>Node.js</td>
                        <td>react</td>
                        <td>jQuery</td>
                        <td>Angular</td>
                        <td>Bootstrap</td>
                    </tr>
                    <tr>
                        <th>Database</th>
                        <td colspan="2">MySQL</td>
                        <td colspan="3">Mongodb</td>
                    </tr>
                    <tr>
                        <th>Other Technologies</th>
                        <td>Matlab</td>
                        <td>ARduino</td>
                        <td>RaspberryPi</td>
                        <td>Altium Designer</td>
                        <td>AI in Programming</td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- Experiences -->
        <section id="experiences">
            <h3>Experiences</h3>
            <div class="experiences-container">
                <ul>
                    <li>
                        <b>Senior engineer in traffic's control department</b> |
                        2018 - 2020
                    </li>
                    <li>
                        <b>Experienced Python developer</b> | 2016 - present
                    </li>
                    <li><b>Experienced AI developer</b> | 2017 - present</li>
                    <li><b>Experienced Web developer</b> | 2020 - present</li>
                    <li><b>Teacher</b> | 2022 - present</li>
                </ul>
            </div>
        </section>

        <!-- Key Achievements -->
        <section id="key-Achievements">
            <h3>Key Achievements</h3>
            <div class="key-container">
                <ul>
                    <li>
                        Successfully designed, developed and deployed a PoE
                        board of monitoring cameras
                    </li>
                    <li>
                        Contributed to the implementation of plenty of papers
                        and projects in all over the world
                    </li>
                    <li>
                        Published an article about approximation of Input-Output
                        mutual information of free space optical channels
                    </li>
                </ul>
            </div>
        </section>

        <!-- Education -->
        <section id="education">
            <h3>Education</h3>
            <div class="education-container">
                <ul>
                    <li>
                        Master degree in Telecommunication - system engineerin |
                        GPA: 18.94 out of 20 | 2017 - 2020
                    </li>
                    <li>
                        Bachelor degree in Telecommunication engineering | GPA:
                        17.01 out of 20 | 2012 - 2017
                    </li>
                </ul>
            </div>
        </section>

        <!-- Write me message -->
        <section id="contact">
            <h3>Write me message</h3>
            <div class="contact-container">
                <div class="contactme">
                    <h1>Contact <span>Me!</span></h1>
                    <form action="" method="">
                        <label for="username">
                            <input
                                type="text"
                                name="username"
                                placeholder="Username:" />
                        </label>
                        <label for="email">
                            <input
                                type="email"
                                name="email"
                                placeholder="Email:" />
                        </label>
                        <label for="message">
                            <textarea
                                name="message"
                                cols="30"
                                rows="10"
                                placeholder="Your message:"></textarea>
                        </label>
                        <label for="submit">
                            <input type="submit" name="submit" value="Send" />
                        </label>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>Copyright &copy Morteza</p>
            <ul>
                <li>
                    <a href=""><i class="bx bxl-github"></i></a>
                </li>
                <li>
                    <a href=""><i class="bx bxl-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="bx bxl-telegram"></i></a>
                </li>
                <li>
                    <a href=""><i class="bx bxl-instagram"></i></a>
                </li>
            </ul>
            <a class="icon" href="#summary"><i class="bx bxs-to-top"></i></a>
        </footer>
    </body>
</html>
