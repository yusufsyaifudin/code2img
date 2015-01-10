<!DOCTYPE html>
<html>
<head>
	<title>Code to Image</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style type="text/css" media="screen">
    #editor { 
    	width: 100%;
    	min-height: 300px;
    }

    .alert {
    	text-align: center;
    	margin-top: 55px;
    }
</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Code2Img</a>
			</div>

			<div class="collapse navbar-collapse">
				<form class="navbar-form navbar-left" role="control">
					<div class="form-group">
						<label>Line number</label>
						<input type="text" class="form-control" id="line_number" placeholder="Line number start...">

						<label>Language</label>
						<select id="language" class="form-control">
							<option value="abap">ABAP</option>
							<option value="actionscript">ACTIONSCRIPT</option>
							<option value="ada">ADA</option>
							<option value="apache_conf">APACHE_CONF</option>
							<option value="applescript">APPLESCRIPT</option>
							<option value="asciidoc">ASCIIDOC</option>
							<option value="assembly_x86">ASSEMBLY_X86</option>
							<option value="autohotkey">AUTOHOTKEY</option>
							<option value="batchfile">BATCHFILE</option>
							<option value="c9search">C9SEARCH</option>
							<option value="c_cpp">C_CPP</option>
							<option value="cirru">CIRRU</option>
							<option value="clojure">CLOJURE</option>
							<option value="cobol">COBOL</option>
							<option value="coffee">COFFEE</option>
							<option value="coldfusion">COLDFUSION</option>
							<option value="csharp">CSHARP</option>
							<option value="css">CSS</option>
							<option value="curly">CURLY</option>
							<option value="d">D</option>
							<option value="dart">DART</option>
							<option value="diff">DIFF</option>
							<option value="django">DJANGO</option>
							<option value="dockerfile">DOCKERFILE</option>
							<option value="dot">DOT</option>
							<option value="eiffel">EIFFEL</option>
							<option value="ejs">EJS</option>
							<option value="elixir">ELIXIR</option>
							<option value="elm">ELM</option>
							<option value="erlang">ERLANG</option>
							<option value="forth">FORTH</option>
							<option value="ftl">FTL</option>
							<option value="gcode">GCODE</option>
							<option value="gherkin">GHERKIN</option>
							<option value="gitignore">GITIGNORE</option>
							<option value="glsl">GLSL</option>
							<option value="golang">GOLANG</option>
							<option value="groovy">GROOVY</option>
							<option value="haml">HAML</option>
							<option value="handlebars">HANDLEBARS</option>
							<option value="haskell">HASKELL</option>
							<option value="haxe">HAXE</option>
							<option value="html">HTML</option>
							<option value="html_ruby">HTML_RUBY</option>
							<option value="ini">INI</option>
							<option value="io">IO</option>
							<option value="jack">JACK</option>
							<option value="jade">JADE</option>
							<option value="java">JAVA</option>
							<option value="javascript">JAVASCRIPT</option>
							<option value="json">JSON</option>
							<option value="jsoniq">JSONIQ</option>
							<option value="jsp">JSP</option>
							<option value="jsx">JSX</option>
							<option value="julia">JULIA</option>
							<option value="latex">LATEX</option>
							<option value="less">LESS</option>
							<option value="liquid">LIQUID</option>
							<option value="lisp">LISP</option>
							<option value="livescript">LIVESCRIPT</option>
							<option value="logiql">LOGIQL</option>
							<option value="lsl">LSL</option>
							<option value="lua">LUA</option>
							<option value="luapage">LUAPAGE</option>
							<option value="lucene">LUCENE</option>
							<option value="makefile">MAKEFILE</option>
							<option value="markdown">MARKDOWN</option>
							<option value="mask">MASK</option>
							<option value="matlab">MATLAB</option>
							<option value="mel">MEL</option>
							<option value="mushcode">MUSHCODE</option>
							<option value="mysql">MYSQL</option>
							<option value="nix">NIX</option>
							<option value="objectivec">OBJECTIVEC</option>
							<option value="ocaml">OCAML</option>
							<option value="pascal">PASCAL</option>
							<option value="perl">PERL</option>
							<option value="pgsql">PGSQL</option>
							<option value="php">PHP</option>
							<option value="plain_text">PLAIN_TEXT</option>
							<option value="powershell">POWERSHELL</option>
							<option value="praat">PRAAT</option>
							<option value="prolog">PROLOG</option>
							<option value="properties">PROPERTIES</option>
							<option value="protobuf">PROTOBUF</option>
							<option value="python">PYTHON</option>
							<option value="r">R</option>
							<option value="rdoc">RDOC</option>
							<option value="rhtml">RHTML</option>
							<option value="ruby">RUBY</option>
							<option value="rust">RUST</option>
							<option value="sass">SASS</option>
							<option value="scad">SCAD</option>
							<option value="scala">SCALA</option>
							<option value="scheme">SCHEME</option>
							<option value="scss">SCSS</option>
							<option value="sh">SH</option>
							<option value="sjs">SJS</option>
							<option value="smarty">SMARTY</option>
							<option value="snippets">SNIPPETS</option>
							<option value="soy_template">SOY_TEMPLATE</option>
							<option value="space">SPACE</option>
							<option value="sql">SQL</option>
							<option value="stylus">STYLUS</option>
							<option value="svg">SVG</option>
							<option value="tcl">TCL</option>
							<option value="tex">TEX</option>
							<option value="text">TEXT</option>
							<option value="textile">TEXTILE</option>
							<option value="toml">TOML</option>
							<option value="twig">TWIG</option>
							<option value="typescript">TYPESCRIPT</option>
							<option value="vala">VALA</option>
							<option value="vbscript">VBSCRIPT</option>
							<option value="velocity">VELOCITY</option>
							<option value="verilog">VERILOG</option>
							<option value="vhdl">VHDL</option>
							<option value="xml">XML</option>
							<option value="xquery">XQUERY</option>
							<option value="yaml">YAML</option>
						</select>

						<label>Theme</label>
						<select id="theme" class="form-control">
							<option value="ambiance">ambiance</option>
							<option value="chaos">chaos</option>
							<option value="chrome">chrome</option>
							<option value="clouds">clouds</option>
							<option value="clouds_midnight">clouds_midnight</option>
							<option value="cobalt">cobalt</option>
							<option value="crimson_editor">crimson_editor</option>
							<option value="dawn">dawn</option>
							<option value="dreamweaver">dreamweaver</option>
							<option value="eclipse">eclipse</option>
							<option value="github">github</option>
							<option value="idle_fingers">idle_fingers</option>
							<option value="katzenmilch">katzenmilch</option>
							<option value="kr_theme">kr_theme</option>
							<option value="kuroir">kuroir</option>
							<option value="merbivore">merbivore</option>
							<option value="merbivore_soft">merbivore_soft</option>
							<option value="mono_industrial">mono_industrial</option>
							<option value="monokai">monokai</option>
							<option value="pastel_on_dark">pastel_on_dark</option>
							<option value="solarized_dark">solarized_dark</option>
							<option value="solarized_light">solarized_light</option>
							<option value="terminal">terminal</option>
							<option value="textmate">textmate</option>
							<option value="tomorrow">tomorrow</option>
							<option value="tomorrow_night">tomorrow_night</option>
							<option value="tomorrow_night_blue">tomorrow_night_blue</option>
							<option value="tomorrow_night_bright">tomorrow_night_bright</option>
							<option value="tomorrow_night_eighties">tomorrow_night_eighties</option>
							<option value="twilight">twilight</option>
							<option value="vibrant_ink">vibrant_ink</option>
							<option value="xcode">xcode</option>
						</select>
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form navbar-left" role="search">
							<button id="convertToImg" class="btn btn-success">Convert to Image Now!</button>
						</form>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div id="alert" class="alert alert-danger"><strong>Alert!</strong> <br> Technically, you can copy and paste thousands of code at one time, 
	but your browser may experience lag when you paste large amounts of data at once. 
	<br> Better you paste the code gradually and change the start line number to prevent lag in the browser.</div>

	<div id="editor">REPORT TEST.
WRITE 'Hello World'.</div>

	<div style="width:100%;height:30px;"></div>

	<div id="result"></div>

	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://yusyaif.com">Created with <span class="glyphicon glyphicon-heart"></span> by Yusuf</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>



	<script src="assets/js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/ace-builds/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/html2canvas.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/FileSaver.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/Blob.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>