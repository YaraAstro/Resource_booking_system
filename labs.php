<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratories | Ascepius Healthcare</title>
    <link rel="icon" href=".\images\logo.png">
    <link rel="stylesheet" href="./styles/labs.css">
    <link rel="stylesheet" href="./styles/scrollbar.css">
</head>
<body>
    <?php include 'loading.php'?>

    <div id="page">
        <?php include 'navBar.php'; ?>

        <div class="pgbd">
            <div class="block">
                <video autoplay muted loop>
                    <source src="./images/_import_60f114f0b4b575.57663102_FPpreview.mp4" type="video/mp4">
                </video>
                <div class="pop">
                    <h3>Ascepius Laboratories</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id at, repellendus a blanditiis veniam nemo. Illo ipsam modi quis ab voluptate totam, a quia quam vitae similique placeat sequi, ex quidem repellendus aspernatur adipisci laboriosam! Id, temporibus dolore. Quae esse impedit odio magnam, molestias quisquam nesciunt aut ipsa maxime perferendis odit tempore consequatur minus aliquid voluptatibus qui consequuntur cumque distinctio in! Laboriosam veritatis ullam, hic molestiae laborum cum fugit nihil qui consectetur amet ea. Temporibus?
                    </p>
                    <a href="./login/index.html"><img src="./images/touch_app_FILL1_wght400_GRAD0_opsz48.svg" alt="login-button"></a>
                </div>
            </div>
            <div class="block">
                <h3>Why we ?</h3>
                <div class="bli">
                    <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                    </ul>
                    <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor.</li>
                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="bar">
                    <div class="count">
                        <img src="./images/biotech_FILL1_wght400_GRAD0_opsz48.svg" alt="lab-test">
                        <span class="num" data-max="243">0</span>
                        <p>Tests</p>
                    </div>
                    <div class="count">
                        <img src="./images/science_FILL1_wght400_GRAD0_opsz48.svg" alt="laboratories">
                        <span class="num" data-max="28">0</span>
                        <p>Laboratories</p>
                    </div>
                    <div class="count">
                        <img src="./images/groups_FILL1_wght400_GRAD0_opsz48.svg" alt="colection centers">
                        <span class="num" data-max="53">0</span>
                        <p>Collection <br>Centers</p>
                    </div>
                </div>
                <p id="botqot">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quas soluta quia illo vitae veritatis!
                </p>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>

    <script>
        class CountingAnimation {
        constructor(target, duration, counterElement, maxCount) {
            this.start = 0;
            this.end = target;
            this.range = this.end - this.start;
            this.increment = this.end > this.start ? 1 : -1;
            this.stepTime = Math.abs(Math.floor(duration / this.range));
            this.counterElement = counterElement;
            this.maxCount = maxCount;
            this.animationTriggered = false;
        }

        animate() {
            const timer = setInterval(() => {
            this.start += this.increment;
            this.counterElement.textContent = this.start;

            if (this.start === this.end) {
                clearInterval(timer);
                this.counterElement.textContent += '+';
            }
            }, this.stepTime);
        }
        }

        // Connect with HTML elements
        const counterElements = Array.from(document.querySelectorAll('.count .num'));

        const animations = counterElements.map((counterElement) => {
        const maxCount = parseInt(counterElement.getAttribute('data-max'));
        const animation = new CountingAnimation(maxCount, 2000, counterElement, maxCount);
        return animation;
        });

        // Create intersection observer
        const options = {
        rootMargin: '0px',
        threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
            const animationIndex = counterElements.findIndex((el) => el === entry.target);
            if (animationIndex !== -1) {
                const animation = animations[animationIndex];
                if (!animation.animationTriggered) {
                animation.animate();
                animation.animationTriggered = true;
                observer.unobserve(entry.target);
                }
            }
            }
        });
        }, options);

        counterElements.forEach((counterElement) => {
        observer.observe(counterElement);
        });

        /* Show page after loading process done */

        const page = document.getElementById('page');

        window.addEventListener('load', () => {

            setTimeout(function(){
                page.style.display='flex';
            }, 3000);
        });

    </script>
    
</body>
</html>