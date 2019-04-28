var isAutorun = false;

function autorun() {
  isAutorun = (isAutorun === true) ? false : true;
  var autorunBtn = document.getElementById('autorun');
  autorunBtn.className = (autorunBtn.className === "btn btn-danger") ? "btn btn-success" : "btn btn-danger";
}

function update() {
  var res = document.getElementById('result').contentWindow.document;
  res.open();
  res.write(html_.getValue());
  res.write("<style>"+css_.getValue()+"</style>");
  res.write("<script>"+js_.getValue()+"</script>");
  res.close();
}

function setupEditor(code_html=undefined, code_css=undefined, code_js=undefined) {
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
    if (isAutorun) update();
  });

  css_.getSession().on('change', function(){
    if (isAutorun) update();
  });

  js_.getSession().on('change', function(){
    if (isAutorun) update();
  });
}

function setupCode(code_html=' ', code_css=' ', code_js=' ') {
  html_.setValue(code_html);
  css_.setValue(code_css);
  js_.setValue(code_js);
}

function save() {
  var json = {};

  let id = window.location.hash.slice(1);
  id = id ? id : -1;
  json.wing_id = id;
  json.htmlSource = html_.getValue();
  json.cssSource = css_.getValue();
  json.jsSource = js_.getValue();
  console.log(json);

  $.ajax({
    url: "api/saveWing.php",
    type: "POST",
    data: JSON.stringify(json),
    dataType: "json",
    contentType: "application/json; charset=utf-8",
    success: function (data) {
      alert('success');
      console.log(data);
      location.hash = '#' + data;
    }
  });
}

function preview() {
  update();
}

window.onload = function () {
  let id = window.location.hash.slice(1);
  if (id) {
    $.get("api/getWing.php", {'wing': id})
      .done(function (res) {
        res = JSON.parse(res);
        //console.log(res.code);
        setupEditor();
        console.log(res);
        if (res.found) {
          setupCode(res.code.html, res.code.css, res.code.js);
        } else {
          setupCode();
        }
        update();
      })
  } else {
    setupEditor();
    update();
  }
}

window.onhashchange = function () {
  let id = window.location.hash.slice(1);
  if (id) {
    $.get("api/getWing.php", {'wing': id})
      .done(function (res) {
        res = JSON.parse(res);
        if (res.found) {
          setupCode(res.code.html, res.code.css, res.code.js);
        } else {
          console.log("test");
          setupCode();
        }
        update();
      })
  }
}