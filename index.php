<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharathraj R | Portfolio</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- TailwindCSS CDN for fast styling -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            scroll-behavior: smooth;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }
        nav ul {
            display: flex;
            gap: 2rem;
            justify-content: center;
            padding: 1rem 0;
        }
        nav ul li a {
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            transition: 0.3s;
        }
        nav ul li a:hover {
            color: #00ffea;
            transform: scale(1.1);
        }
        section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 2rem;
        }
        .btn {
            background: #00ffea;
            color: #000;
            padding: 0.75rem 1.5rem;
            border-radius: 999px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: #00c6b4;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Header & Navbar -->
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="bg-[url('https://source.unsplash.com/1600x900/?technology')] bg-cover bg-center" data-aos="fade-up">
        <div class="text-center">
            <h1 class="text-6xl font-bold mb-4">Hello viewers, I'm <span class="text-cyan-400">Bharathraj R</span></h1>
            <p class="text-xl mb-6">A Passionate Front-End & Full-Stack Developer</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-900" data-aos="fade-right">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 text-cyan-400">About Me</h2>
            <p class="text-lg mb-4">
                I'm a highly motivated developer with a passion for creating modern, responsive web applications. Experienced in HTML, CSS, JavaScript, PHP, and frameworks like TailwindCSS & React.
            </p>
            <p class="text-lg">
                I love solving complex problems, building projects, and constantly learning new technologies to stay ahead in the tech world.
            </p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="bg-gray-800" data-aos="fade-left">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-12 text-cyan-400">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">HTML</h3>
                    <p>Advanced</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">CSS</h3>
                    <p>Advanced</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">JavaScript</h3>
                    <p>Advanced</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">PHP</h3>
                    <p>Intermediate</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">React</h3>
                    <p>Intermediate</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">MySQL</h3>
                    <p>Intermediate</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">Git & GitHub</h3>
                    <p>Advanced</p>
                </div>
                <div class="p-6 bg-gray-700 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">TailwindCSS</h3>
                    <p>Advanced</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-gray-900" data-aos="zoom-in">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-5xl font-bold mb-12 text-cyan-400">Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">E-commerce Website</h3>
                    <p>Full-stack online shopping platform built with PHP, MySQL, and TailwindCSS.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">Portfolio Website</h3>
                    <p>Personal portfolio website with animations, responsive design, and contact form.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl hover:scale-105 transition">
                    <h3 class="text-2xl font-bold mb-2">VR Product Landing Page</h3>
                    <p>A modern landing page for VR products with smooth animations and interactive features.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-800" data-aos="fade-up">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-5xl font-bold mb-8 text-cyan-400">Contact Me</h2>
            <p class="mb-6">Interested in working together? Reach out to me!</p>
            <form class="grid gap-4" action="#" method="POST">
                <input type="text" name="name" placeholder="Your Name" class="p-3 rounded-lg text-black" required>
                <input type="email" name="email" placeholder="Your Email" class="p-3 rounded-lg text-black" required>
                <textarea name="message" placeholder="Your Message" class="p-3 rounded-lg text-black" rows="5" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
            <div class="mt-8 flex justify-center gap-6 text-cyan-400 text-2xl">
                <a href="https://www.linkedin.com/in/bharathraj-r-8a05b1290/" target="_blank">LinkedIn</a>
                <a href="mailto:bharathrajgr8760@gmail.com" target="_blank">Email</a>
                <a href="tel:+919159257470">Phone</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-center p-6">
        &copy; <?php echo date("Y"); ?> Bharathraj R. All Rights Reserved.
    </footer>

    <!-- JS Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({ duration: 1200, once: true });
    </script>
</body>
</html>
