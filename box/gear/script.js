function update() {
  var res = document.getElementById('result').contentWindow.document;
  res.open();
  res.write(html_.getValue());
  res.write("<style>"+css_.getValue()+"</style>");
  res.write("<script>"+js_.getValue()+"</script>");
  res.close();
}

function setupEditor() {
  window.html_ = ace.edit("htmlEditor");
  html_.setTheme("ace/theme/monokai");
  html_.session.setMode("ace/mode/html");
  html_.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  window.css_ = ace.edit("cssEditor");
  css_.setTheme("ace/theme/monokai");
  css_.session.setMode("ace/mode/css");
  css_.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  window.js_ = ace.edit("jsEditor");
  js_.setTheme("ace/theme/monokai");
  js_.session.setMode("ace/mode/javascript");
  js_.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  html_.getSession().on('change', function(){
    update();
  });

  css_.getSession().on('change', function(){
    update();
  });

  js_.getSession().on('change', function(){
    update();
  });
}


setupEditor();
update();


