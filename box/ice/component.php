<?php
    
    $sidebar = '
    <div id="sidebar">
        <div class="profile">
          Profile here.
        </div>
        <div class="menu">
          <a href="/">Home</a>
          <a href="/about">About</a>
          <a href="/editor">Editor</a>
        </div>
    </div>
    ';

    $sidebar_style = '
    #sidebar {
      position: absolute;
      top: 0;
      left: 0;
      display: inline-block;
      width: 20vw;
      height: calc(100vh - 20px);
      min-height: 100vh;
      max-height: 100vh;
      background: #000;
      z-index: 999;
    }
    #sidebar .profile {
        height: 25vh;
        color: #000;
        background: #aaa;
    }
    #sidebar .menu a {
      display: block;
      margin: auto;
      height: 80px;
      font-weight: bold;
      text-decoration: underline;
      cursor: pointer;
      color: #2c3e50;
    }

    #sidebar .menu a:hover {
        background: red;
    }
    '
?>