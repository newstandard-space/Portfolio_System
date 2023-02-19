<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/default.css') }}" />
</head>

<body>
    <a href="{{route('admin.index')}}">管理画面</a>
    <header>
        <nav>
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="#">My Portfolio</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="/">About</a></li>
                    <li><a href="#works">Works</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="about">
            <h1>About Me</h1>
            <p>
                I am a web developer with over 5 years of experience. I specialize in
                front-end development using HTML, CSS, and JavaScript.
            </p>
        </section>
        <section id="works">
            <h1>My Works</h1>
            <div class="work">
                <h2>Project 1</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="work">
                <h2>Project 2</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 My Portfolio</p>
    </footer>
    <script src="{{ asset('/Front/js/default.js') }}" ></script>
    <script src="scripts.js"></script>

</body>

</html>