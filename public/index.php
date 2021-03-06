<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
  <meta charset="UTF-8">
  <title>A D3/Faux-DOM/React Sankey Builder App</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

  <div class="container">

    <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="http://nick.balestra.ch/2015/sankey-d3-faux-DOM-react">Related Blog Post</a></li>
          <li role="presentation"><a href="https://github.com/nickbalestra/sankey">Github Repo</a></li>
        </ul>
      </nav>
      <h3 class="text-muted">Sankey Diagram Builder</h3>
    </div>
    <hr>

    <div id="app"></div>
    <hr>

    <div class="row marketing">
      <div class="col-sm-6">    
        <h4>Stack</h4>
        <p>
          D3 to run all the calculation.<br>A faux-dom coupled with D3 to generate SVG elements in an isomorphic context.<br>React to handle state and renderings.
          <ul>
            <li><a href="https://github.com/mbostock/d3">D3</a></li>
            <li><a href="https://github.com/d3/d3-plugins/tree/master/sankey">D3.Sankey</a></li>
            <li><a href="https://github.com/Olical/react-faux-dom">Faux-Dom</a></li>
            <li><a href="https://github.com/facebook/react">React</a></li>
          </ul>
        </p>
      </div>
      <div class="col-sm-6">  
        <h4>Format</h4>
<pre><code>{ 
  nodes: [
    {"name":"node0"},
    {"name":"node1"}], 
  links: [
    {"source":0,"target":1,"value":100}
  ]
}</code></pre>
      </div>
    </div>
    
    <footer class="footer">
      <hr>
      <p>&copy; 2015 Nick Balestra.</p>
    </footer>

  </div>
<script src="build.js"></script>
<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>