/*
 * Javascript
 */

 var btnAutorun = document.querySelector('#autorun');
// var btnRun = document.querySelector('#btn-run');
// var btnPreview = document.querySelector('#btn-preview');
var isAutorun = false;

// btnRun.addEventListener('click', function () {
//   update();
// });

// btnPreview.addEventListener('click', function () {
//   preview();
// })

btnAutorun.addEventListener('click', function () {
  isAutorun = (isAutorun === true) ? false : true;
  change_state()
});

function change_state() {
  if (isAutorun) {
    btnAutorun.className = "mob-wide t-center capital btn btn-green padding no-round ffont"
  }
  else {
    btnAutorun.className = "mob-wide t-center capital btn btn-pink padding no-round ffont"
  }
}

function setEditor() {

  window.htmlEditor = ace.edit(document.querySelector('#html-editor'),
                              {mode: "ace/mode/html",
                               selectionStyle: "text",
                               theme: "ace/theme/twilight",
                               });

  htmlEditor.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  window.cssEditor = ace.edit(document.querySelector('#css-editor'),
                              {mode: "ace/mode/css",
                               selectionStyle: "text",
                               theme: "ace/theme/twilight",
                               });

  cssEditor.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  window.jsEditor = ace.edit(document.querySelector('#js-editor'),
                              {mode: "ace/mode/javascript",
                               selectionStyle: "text",
                               theme: "ace/theme/twilight",
                               });

  jsEditor.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutocompletion: true,
    enableSnippets: true,
    tabSize: 4
  });

  htmlEditor.getSession().on('change', function(){
   if (isAutorun) update();
  });

  cssEditor.getSession().on('change', function(){
   if (isAutorun) update();
  });

  jsEditor.getSession().on('change', function(){
   if (isAutorun) update();
  });

}

function update() {
  let frame = document.querySelector("#render");
  var myContent = `<!DOCTYPE html>
              <html>
              <head>
                <title>Render frame</title>
                <meta charset="utf-8">
                <style>
                  ${cssEditor.getValue()}
                </style>
              </head>
              <body>
              ${htmlEditor.getValue()}
              <script type="text/javascript">
                ${jsEditor.getValue()}
              </script>
              </body></html>`;

  frame.contentWindow.document.open('text/html', 'replace');
  frame.contentWindow.document.write(myContent);
  frame.contentWindow.document.close();
  }

// function preview() {
//   let opened = window.open("");
//   var myContent = `<!DOCTYPE html>
//               <html>
//               <head>
//                 <title>Render frame</title>
//                 <meta charset="utf-8">
//                 <style>
//                   ${cssEditor.getValue()}
//                 </style>
//               </head>
//               <body>
//               ${htmlEditor.getValue()}
//               <script type="text/javascript">
//                 ${jsEditor.getValue()}
//               </script>
//               </body></html>`;
//   opened.document.write(myContent);
// }

setEditor();
update();

