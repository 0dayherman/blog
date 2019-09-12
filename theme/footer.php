<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-4">
      <div class="col text-center">
        <p style="font-size: 40px; font-family: 'Dawning of a New Day', cursive;">Hermansyah</p>
        <p style="font-size: 20px;"><a href="https://fb.com/mrluciferz/"><i class="fa fa-facebook text-white"></i></a>&nbsp;<a href="https://instagram.com/0daysec/"><i class="fa fa-instagram text-white"></i></a>&nbsp;<a href="https://web.whatsapp.com/send?phone=628990463361&text=Hello"><i class="fa fa-whatsapp text-white"></i></a></p>
      </div>
    </div>
  </div>
</footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script id="rendered-js">
          // function([string1, string2],target id,[color1,color2])    
consoleText(['Hello World!', 'I am Hermansyah!'], 'lol');

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#212529'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id);
  target.setAttribute('style', 'color:' + colors[0]);
  window.setInterval(function () {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount);
      window.setTimeout(function () {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0]);
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function () {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount);
      letterCount += x;
    }
  }, 120);
  window.setInterval(function () {
    if (visible === true) {
      con.className = 'console-underscore hidden';
      visible = false;

    } else {
      con.className = 'console-underscore';

      visible = true;
    }
  }, 400);
}
          //# sourceURL=pen.js
        </script>

  </body>
</html>
