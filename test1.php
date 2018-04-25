<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/css/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/css/favicon.ico" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>sefi's home site</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  width: 960px;
  height: 500px;
  position: relative;
}

form {
  position: absolute;
  top: 5em;
  left: 1em;
}

path {
  fill-rule: evenodd;
  stroke: #333;
  stroke-width: 2px;
}

.sun path {
  fill: #ffaed6; //#6baed6;
}

.planet1 path {
  fill: #9ecae1;
}
.planet2 path {
  fill: #9eca00;
}
.planet3 path {
  fill: #ff00e1;
}
.annulus path {
  fill: #00ffef;//#c6dbef;
}

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Home Computer</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Main Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/work/sheftel/index.php">Sheftel</a></li>
				  <li><a href="/work/bsm/index.php">BSM</a></li>
				  <li><a href="/work/ppc/index.php">PPC</a></li>
				  <li><a href="/work/svg/index.html">svg</a></li>
				  <li><a href="/work/edu/index.php">Computer Education</a></li>
				  <li><a href="/work/map/index.php">Driving Street View</a></li>
				  <li><a href="/work/webcams/index.php">Webcams</a></li>
          <li><a href="/work/pi/index.php">PI</a></li>
          <li><a href="/work/d3/test1.php">D3</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Main Menu2 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://s-l.sefi.giize.com/index.php">s-l CRM</a></li>
				  <li><a href="#">Action</a></li>
				  <li><a href="#">Action</a></li>
				  <li><a href="#">Action</a></li>
				  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
  			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">External Links<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a target=�_blank href="http://hamradio.hol.es/uncategorized/%D7%A8%D7%99%D7%9B%D7%95%D7%96-%D7%A7%D7%99%D7%A9%D7%95%D7%A8%D7%99%D7%9D-%D7%9C%D7%A1%D7%A8%D7%98%D7%99-%D7%94%D7%94%D7%A8%D7%A6%D7%90%D7%95%D7%AA/">hamradio.hol.es</a></li>
				  <li><a target=�_blank href="http://merkelnet.com/">merkelnet.com</a></li>
				  <li><a target=�_blank href="http://skypeassholes.wc.lt/">skypeassholes.wc.lt</a></li>
				  <li><a target=�_blank href="#">Action</a></li>
				  <li><a target=�_blank href="#">Action</a></li>
				  <li><a target=�_blank href="#">Action</a></li>
				  <li><a target=�_blank href="#">Action</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>

            </ul>
         
        
		<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 8px;">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
   </div><!--/.nav-collapse -->
</div>
</div>
</nav>
</div> 
<form>
  <input type="radio" name="reference" id="ref-annulus">
  <label for="ref-annulus">Annulus</label><br>
  <input type="radio" name="reference" id="ref-planet" checked>
  <label for="ref-planet">Planets</label><br>
  <input type="radio" name="reference" id="ref-sun">
  <label for="ref-sun">Sun</label>
</form>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

var width = 1660,
    height = 800,
    radius = 120,
    x = Math.sin(2 * Math.PI / 3),
    y = Math.cos(2 * Math.PI / 3);

var offset = 0,
    speed = 4,
    start = Date.now();

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height)
  .append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(.60)")
  .append("g");

var frame = svg.append("g")
    .datum({radius: Infinity});

frame.append("g")
    .attr("class", "annulus")
    .datum({teeth: 80, radius: -radius * 5, annulus: true})
  .append("path")
    .attr("d", gear);

frame.append("g")
    .attr("class", "sun")
    .datum({teeth: 16, radius: radius})
  .append("path")
    .attr("d", gear);

frame.append("g")
    .attr("class", "planet1")
    .attr("transform", "translate(0,-" + radius * 3 + ")")
    .datum({teeth: 32, radius: -radius * 2})
  .append("path")
    .attr("d", gear);

frame.append("g")
    .attr("class", "planet2")
    .attr("transform", "translate(" + -radius * 3 * x + "," + -radius * 3 * y + ")")
    .datum({teeth: 32, radius: -radius * 2})
  .append("path")
    .attr("d", gear);

frame.append("g")
    .attr("class", "planet3")
    .attr("transform", "translate(" + radius * 3 * x + "," + -radius * 3 * y + ")")
    .datum({teeth: 32, radius: -radius * 2})
  .append("path")
    .attr("d", gear);

d3.selectAll("input[name=reference]")
  .data([radius * 5, Infinity, -radius])
    .on("change", function(radius1) {
      var radius0 = frame.datum().radius, angle = (Date.now() - start) * speed;
      frame.datum({radius: radius1});
      svg.attr("transform", "rotate(" + (offset += angle / radius0 - angle / radius1) + ")");
    });

d3.selectAll("input[name=speed]")
    .on("change", function() { speed = +this.value; });

function gear(d) {
  var n = d.teeth,
      r2 = Math.abs(d.radius),
      r0 = r2 - 8,
      r1 = r2 + 8,
      r3 = d.annulus ? (r3 = r0, r0 = r1, r1 = r3, r2 + 20) : 20,
      da = Math.PI / n,
      a0 = -Math.PI / 2 + (d.annulus ? Math.PI / n : 0),
      i = -1,
      path = ["M", r0 * Math.cos(a0), ",", r0 * Math.sin(a0)];
  while (++i < n) path.push(
      "A", r0, ",", r0, " 0 0,1 ", r0 * Math.cos(a0 += da), ",", r0 * Math.sin(a0),
      "L", r2 * Math.cos(a0), ",", r2 * Math.sin(a0),
      "L", r1 * Math.cos(a0 += da / 3), ",", r1 * Math.sin(a0),
      "A", r1, ",", r1, " 0 0,1 ", r1 * Math.cos(a0 += da / 3), ",", r1 * Math.sin(a0),
      "L", r2 * Math.cos(a0 += da / 3), ",", r2 * Math.sin(a0),
      "L", r0 * Math.cos(a0), ",", r0 * Math.sin(a0));
  path.push("M0,", -r3, "A", r3, ",", r3, " 0 0,0 0,", r3, "A", r3, ",", r3, " 0 0,0 0,", -r3, "Z");
  return path.join("");
}

d3.timer(function() {
  var angle = (Date.now() - start) * speed,
      transform = function(d) { return "rotate(" + angle / d.radius + ")"; };
  frame.selectAll("path").attr("transform", transform);
  frame.attr("transform", transform); // frame of reference
});

</script>