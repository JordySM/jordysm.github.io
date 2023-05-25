<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="content"></p>
    <script>
        window.onload = {
            setInterval(changeContent, 2000);
        };

        function changeContent()
        {  
            const chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '#', '¡'];

            let string = "";

            for (let index = 0; index < 20; index++) {

                let char = (String) (Math.floor(Math.random() * array.length));
                string += (Math.floor(Math.random()) == 0 ? char.toUpperCase() : char.toLowerCase());
            }

            let content = document.querySelector(".content");
                content.innerHTML = string;

        }
    </script>
</body>
</html>