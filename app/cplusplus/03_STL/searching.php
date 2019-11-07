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

    <div id="cpp_searching">
      <h1>Searching</h1> 
      <h2>Searching Definition</h2>
      The <span class="cpp_container">std::<span class="cpp_container_color">vector</span>&lt;T,A&gt;</span> is a sequence container defined in the <span class="cpp_header cpp_header_color">&lt;vector&gt;</span> header. The default template argument A, that the container uses to acquire and release memory is <span class="cpp_container">std::<span class="cpp_container_color">allocator</span>&lt;T&gt;</span>. Vectors are arrays that can change in size, a <b>Dynamic Array</b> (resizable array) and when an element is inserted, if (size == capacity) the container doubles its capacity automatically. Vector elements are placed in contiguous storage so that they can be accessed and traversed using iterators.

      <h2>Vector Searching</h2>
      <code code-include="/code/cpp/containers/vector/01_vectorDeclaration.txt"></code>
      
    </div> <!-- END cpp_searching -->

  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>