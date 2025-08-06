<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Border Radius Previewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .preview-box {
            width: 200px;
            height: 200px;
            background-color: #3498db;
            margin: 20px auto;
            transition: 0.3s;
        }
        .inputs {
           text-align: center;
        }
        input[type="text"] {
            width: 80px;
            margin: 5px;
        }
        textarea {
            width: 300px;
            height: 60px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        button {
            display: block;
            margin: 10px auto;
            padding: 6px 10px;
        }
       
    </style>
</head>
<body>
    <h2 style="text-align: center;">Border-Radius-Previewer</h2>
    <div class="preview-box" id="box"></div>

    <div class="inputs">
        <label >Top-Left: <input type="text" id="tl" value="0"></label>
        <label >Top-Right: <input type="text" id="tr" value="0"></label>
        <label >Bottom-Left: <input type="text" id="bl" value="0"></label>
        <label >Bottom-Right: <input type="text" id="br" value="0"></label>
    </div>

    <textarea readonly id="cssOutput"></textarea>
    <button onclick="copyToClipboard()">Copy CSS</button>

    <script>
        const box = document.getElementById('box');
        const Output = document.getElementById('cssOutput');
        const tl = document.getElementById('tl');
        const tr = document.getElementById('tr');
        const bl = document.getElementById('bl');
        const br = document.getElementById('br');

        function updateRadius() { 
            const tlVal = tl.value + 'px' ;
            const trVal = tr.value + 'px' ;
            const blVal = bl.value + 'px' ;
            const brVal = br.value + 'px' ;

            const radius = `${tlVal} ${trVal} ${blVal} ${brVal}`;
            box.style.borderRadius = radius;
            Output.value = `border-radius: ${radius};`; 
        }

        function copyToClipboard() {
            Output.select();
            document.execCommand('copy');
            alert('CSS copied !' + Output.value);
        }

        [tl, tr, bl, br].forEach(input => {
            input.addEventListener('input', updateRadius);
        });

        updateRadius();
    </script>
</body>
</html>