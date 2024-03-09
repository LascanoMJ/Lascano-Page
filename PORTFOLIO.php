<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caesar+Dressing&display=swap');

        ::-webkit-scrollbar {
            width: 12px;
            background: linear-gradient(#000000, #414141);
        }

        ::-webkit-scrollbar-thumb {
            background-color: #2c2c2c;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        body {
            background: linear-gradient( #000, #3e3e3e);
            font-family: 'Courier New', Courier, monospace;
        }

        h1 {
            font-family:'Caesar Dressing';
        }

        h2 {
            margin-top:15px;
            font-family: Courier;
        }

        #description {
            margin: 5%;
        }

		.header { 
            grid-area: header;
            width:100%;
        }

		.left { 
            grid-area: left;
            max-width: fit-content; 
            width:100%;
        }

        #left {
            display: flex;
            text-align: left;
            margin-left: 5%;
            
        }

		.creations { 
            grid-area: main;
            width:100%;
        }

        img {
            max-width: 350px;
            max-height: 600px;
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 16px;
            border-color: #fff;
            border-spacing: 10px;
            margin-top: 20px;
        }
		
		.grid-container {
		    display: grid;
		    grid-template-areas:
                'header header header header header header'
                'left main main main main main'
                'footer footer footer footer footer footer';
		    gap: 10px;
		    background-color: transparent;
		    padding: 10px;
            color: #FFF;
		}
		
		.grid-container > div {
		    background-color: #161616;
		    text-align: center;
		    padding: 20px 0;
		    font-size: 30px;
		}

        a:link {
            color:#ffffff;
            text-decoration: none;
        }

        a:visited {
            color:#ffffff;
            text-decoration: none;
        }

        a:hover {
            color: rgb(255, 204, 0);
            text-decoration: none;
        }

        .footer { 
            grid-area: footer;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .button-container {
            display: flex;
            margin-top: 20px;
            margin: 0;
        }
    
        .button-container button {
            background-color: transparent;
            color: white;
            border-color: #FFF;
            border-style: groove;
            font-size: auto;
            padding: 16px 20px;
            border-radius: 16px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #616161;
        }

        .button-container button:active {
            box-shadow: 0 5px #000000;
            transform: translateY(4px);
        }

        @media screen and (max-width: 768px) {
            .grid-container {
                grid-template-areas:
                    'header header header header header header'
                    'main main main main main main'
                    'footer footer footer footer footer footer';
            }

            .left {
                grid-area: main;
                max-width: 100%;
            }

            img {
                max-width: 100%;
                height: auto;
                object-fit: cover;
                border-radius: 16px;
                border-color: #fff;
                border-spacing: 10px;
            }

            h1, h3 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            .button-container button {
                padding: 10px 15px;
                font-size: 16px;
            }
        }

        a {
            color: #EDEDED;
            text-decoration: none;
        }

        .footer { 
            background-color: #000;
            display: inline-block;
            justify-content: space-evenly; /* Align buttons with equal spacing */
            align-items: center;
            width: 100%;
        }

        .btn {
            padding: 10px 20px;
            border: 2px solid #fff;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            font-size: 25px;
        }

        #creations-uic {
            text-align: center;
        }

        #creations-uic .container {
            position: relative;
            overflow: hidden;
        }

        #creations-uic .container img {
            width: 100%;
            transition: transform 0.5s;
        }

        #creations-uic .container .overlay {
            position: absolute;
            bottom: 0; /* Change from bottom to top */
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            width: auto;
            height: 0; /* Set initial height to 0 */
            transition: height 0.5s; /* Adjust transition */
        }

        #creations-uic .container:hover .overlay {
            height: 100%; /* Change height to 100% on hover */
        }

        #creations-uic .container .text {
            color: #fff;
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: opacity 0.5s;
            opacity: 0;
        }

        #creations-uic .container:hover .text {
            opacity: 1;
        }

	</style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var backButton = document.getElementById("Back");

            backButton.addEventListener("click", function() {
                var backURL = "index.php";
                window.location.href = backURL;
            });
        });
    </script>

	<title>PORTFOLIO</title>

</head>
<body>

	<div class="grid-container">
		<div class="header">
            <h1>PORTFOLIO</h1>
        </div>
		<div class="left">
            <h1>CONTENTS</h1>
            <p id="left"><a href="#creations-me">- Mobile Photography</a></p>
            <p id="left"><a href="#creations-sp">-- Self Photoshoot</a></p>
            <p id="left"><a href="#creations-ed">-- Edits</a></p>
            <p id="left"><a href="#creations-mw">- Make-up Works</a></li>
            <p id="left"><a href="#creations-dtd">- Drawings</a></p>
            <p id="left"><a href="#creations-uic">- UI Creations</a></p>
        </div>
		<div class="creations">
            <h2>CREATIONS</h2>
            <div>
                <h3 id="creations-me">MOBILE PHOTOGRAPHY</h3>
                <img src="Photo&Edits/p1.jpg" alt="m.Photography">
                <img src="Photo&Edits/p2.jpg" alt="m.Photography">
                <img src="Photo&Edits/p3.jpg" alt="m.Photography">
                <img src="Photo&Edits/p4.jpg" alt="m.Photography">
                <img src="Photo&Edits/p5.jpg" alt="m.Photography">
                <img src="Photo&Edits/p6.jpg" alt="m.Photography">
                <img src="Photo&Edits/p7.jpg" alt="m.Photography">
                <img src="Photo&Edits/p8.jpg" alt="m.Photography">
                <img src="Photo&Edits/p9.jpg" alt="m.Photography">
                <h2 id="creations-sp">SELF PHOTOSHOOT</h2>
                <img src="Photo&Edits/sp1.jpg" alt="SelfPhotog">
                <img src="Photo&Edits/sp2.jpg" alt="SelfPhotog">
                <img src="Photo&Edits/sp3.jpg" alt="SelfPhotog">
                <img src="Photo&Edits/sp4.jpg" alt="SelfPhotog">
                <img src="Photo&Edits/sp5.jpg" alt="Edits">
                <h2 id="creations-ed">EDITS</h2>
                <img src="Photo&Edits/ed1.png" alt="Edits">
                <img src="Photo&Edits/ed2.jpg" alt="Edits">
                <img src="Photo&Edits/ed3.jpg" alt="Edits">
                <img src="Photo&Edits/ed4.jpg" alt="Edits">
                <img src="Photo&Edits/ed5.jpg" alt="Edits">
            </div>
            <div id="creations-mw">
                <h2>MAKE-UP WORKS</h2>
                <img src="Mekap/mk1.jpg" alt="makeup works">
                <img src="Mekap/mk2.png" alt="makeup works">
                <img src="Mekap/mk3.jpg" alt="makeup works">
                <img src="Mekap/mk4.jpg" alt="makeup works">
                <img src="Mekap/mk5.jpg" alt="makeup works">
                <img src="Mekap/mk6.jpeg" alt="makeup works">
                <img src="Mekap/mk7.jpg" alt="makeup works">
                <img src="Mekap/mk8.jpg" alt="makeup works">
                <img src="Mekap/mk9.jpeg" alt="makeup works">
            </div>
            <div id="creations-dtd">
                <h2>DRAWINGS</h2>
                <img src="Drawings/d1.jpg" alt="drawing">
                <img src="Drawings/d2.jpg" alt="drawing">
                <img src="Drawings/d3.jpg" alt="drawing">
                <img src="Drawings/d4.jpg" alt="drawing">
                <img src="Drawings/d5.png" alt="drawing">
                <img src="Drawings/d6.png" alt="drawing">
            </div>

            <div id="creations-uic">
                <h2>UI CREATIONS </h2>
                <p>(Hover the images to see my designs closer)</p>
                <a target="_blank" href="https://www.figma.com/file/AJKwqDWx2A3uZQJI6y2WK2/hEAR-me?type=design&node-id=0%3A1&mode=design&t=JHWfnN5OHJFfno2J-1" class="container">
                    <img src="UI/hear-me.png" alt="">
                    <div class="overlay">
                        <div class="text">hEAR Me</div>
                    </div>
                </a>
                <a target="_blank" href="https://www.figma.com/file/IvD4pOQBHqyNOFio6h1O8j/Tastebuds?type=design&node-id=0%3A1&mode=design&t=oTEOYPAPtFAKOSYi-1" class="container">
                    <img src="UI/tastebuds.png" alt="">
                    <div class="overlay">
                        <div class="text">Tastebuds</div>
                    </div>
                </a>
                <a target="_blank" href="https://www.figma.com/file/YjjeUbIqW23mBbIF7OS0T5/XOXO?type=design&node-id=0%3A1&mode=design&t=cAZoZISUFGekhhOz-1" class="container">
                    <img src="UI/xoxo.png" alt="">
                    <div class="overlay">
                        <div class="text">XOXO</div>
                    </div>
                </a>
            </div>
        </div>  
        
        <div class="footer">
            <a href="ABOUTME.php" class="btn">ABOUT ME</a>
            <a href="index.php" class="btn">HOME</a>
            <a href="form.php" class="btn">FEEDBACK</a>
        </div>
	</div>

</body>
</html>