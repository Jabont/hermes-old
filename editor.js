/*
 * Javascript
 */

 var btnAutorun = document.querySelector('#autorun');
// var btnRun = document.querySelector('#btn-run');
// var btnPreview = document.querySelector('#btn-preview');
var isAutorun = true;

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
    document.querySelector('#update').style.display = "none";
    btnAutorun.classList.remove("bg-ci3");
  }
  else {
    document.querySelector('#update').style.display = "inline-block";
    btnAutorun.classList.add("bg-ci3");
  }
}

function setEditor() {

  window.htmlEditor = ace.edit(document.querySelector('#html-editor'),
    {mode: "ace/mode/html",
    selectionStyle: "text",
    theme: "ace/theme/monokai",
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
    theme: "ace/theme/monokai",
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
    theme: "ace/theme/monokai",
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

  // document.querySelector('#html-editor').style.height = document.querySelector('#html-editor').offsetHeight+"px";
  // document.querySelector('#css-editor').style.height = document.querySelector('#css-editor').offsetHeight+"px";
  // document.querySelector('#js-editor').style.height = document.querySelector('#js-editor').offsetHeight+"px";

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

const sectionEditor = document.querySelectorAll('.section-editor');
function panelToggle(x){
  let panel = x.getAttribute('panel');
  console.log(panel);
  let nowVal = parseInt(document.querySelector('section[panel="'+panel+'"]').getAttribute('open'));
  console.log(nowVal);
  let sign = document.querySelector('.toggle-sign[panel="'+panel+'"]').classList.toggle('typcn-plus');
  let newVal = 1-nowVal;
  document.querySelector('section[panel="'+panel+'"]').setAttribute('open',newVal);
  panelResize();
}

function panelResize(){
  let total = 0;
  for (var i = 0; i < sectionEditor.length; i++) {
    total += parseInt(sectionEditor[i].getAttribute('open'));
  }
  coding.style.setProperty("--editor-open",total);
  setTimeout(function(){
    htmlEditor.resize();
    cssEditor.resize();
    jsEditor.resize();
  },150);
}