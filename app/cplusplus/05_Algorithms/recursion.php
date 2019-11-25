<?php include($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>

<div id="cpp_grid">
  <div id="cpp_sidebar">
    <div class="sidebarButton">Introduction</div>
    <div class="sidebarButton">Data Types</div>
    <div class="sidebarButton">Variables</div>
    <div class="cpp_sidebar_h1">Solutions</div>
    <div class="cpp_sidebar_h2">Algebra</div>
    <div>Quadratic Equation</div>
    <div>Greatest Common Divisor</div>
  </div>
  <div class="cpp_main">

    <div id="cpp_recursion">
      <h1>Recursion</h1> 
      <h2>Recursion Definition</h2>
      <p>Recursion in computer science is a method of solving a problem where the solution depends on solutions to smaller instances of the same problem.</p>

      <h2>Defining Class and Declaring Object</h2>
      <p>The syntax</p>
      <code code-include="/code/cpp/04_OOP/classes_and_objects/01_definingClassAndDeclaringObject.txt"></code>

      <h2>The "8 Queens" Puzzle</h2> <a href="https://en.wikipedia.org/wiki/Eight_queens_puzzle">https://en.wikipedia.org/wiki/Eight_queens_puzzle</a>
      <p>The eight queens puzzle is the problem of placing eight chess queens on an 8×8 chessboard so that no two queens threaten each other; thus, a solution requires that no two queens share the same row, column, or diagonal.</p>
      <table class="code_table">
        <tr>
            <th>Input</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>(no input)</td>
            <td>* - - - - - - -</td>
        </tr>
        <tr>
            <td></td>
            <td>- - - - * - - -</td>
        </tr>
        <tr>
            <td></td>
            <td>- - - - - - - *</td>
        </tr>
        <tr>
            <td></td>
            <td>- - - - - * - -</td>
        </tr>
        <tr>
            <td></td>
            <td>- - * - - - - -</td>
        </tr>
        <tr>
            <td></td>
            <td>- - - - - - * -</td>
        </tr>
        <tr>
            <td></td>
            <td>- * - - - - - -</td>
        </tr>
        <tr>
            <td></td>
            <td>- - - * - - - -</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>(91 solutions more)</td>
        </tr>
      </table>
      <br>
      <code code-include="/code/cpp/05_Algorithms/08_8QueensProblem.cpp"></code>

    </div> <!-- END cpp_recursion -->

  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>