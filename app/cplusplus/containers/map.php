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

    <div id="cpp_map">
      <h1>Map</h1> 
      <h2>Map Definition</h2>
      The <span class="cpp_container">std::<span class="cpp_container_color">map</span>&lt;K,V,C,A&gt;</span> is an ordered associative container defined in the <span class="cpp_header cpp_header_color">&lt;map&gt;</span> header. It is a container of key-value pairs, optimized for lookup. It is implemented as a balanced binary tree (red-black tree). The default ordering criterion for a key, K is <span class="cpp_container">std::<span class="cpp_container_color">less</span>&lt;K&gt;</span> The default template argument A, that the container uses to acquire and release memory is defaulted to <span class="cpp_container">std::<span class="cpp_container_color">allocator</span>&lt;<span class="cpp_container">std::<span class="cpp_container_color">pair</span>&lt;const K,T&gt;</span>&gt;</span>.

      <h2>Map Declaration</h2>
      <p>The syntax</p>
      <code code-include="/code/cpp/containers/map/01_mapDeclaration.txt"></code>

      <h2>Map Iteration</h2>
      <p>Method 1: Iterator</p>
      <code code-include="/code/cpp/containers/map/02_mapIteration1.txt"></code>
      <p>Method 2: Range-Based For-Loop (C++ 11)</p>
      <code code-include="/code/cpp/containers/map/03_mapIteration2.txt"></code>

      <h2>Member Functions</h2>
      
      <div class="ct1_d">
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">(constructor)</span></div><div class="ct1_d3">Construct map <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">(destructor)</span></div><div class="ct1_d3">Return value comparison object <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">operator=</span></div><div class="ct1_d3">Copy container content <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">get_allocator</span></div><div class="ct1_d3">Returns the associated allocator <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Iterators:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">begin</span></div><div class="ct1_d3">Return iterator to beginning <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">end</span></div><div class="ct1_d3">Return iterator to end <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">rbegin</span></div><div class="ct1_d3">Return reverse iterator to reverse beginning <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">rend</span></div><div class="ct1_d3">Return reverse iterator to reverse end <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">cbegin </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Return const_iterator to beginning <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">cend </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Return const_iterator to end <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">crbegin </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Return const_reverse_iterator to reverse beginning <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">crend </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Return const_reverse_iterator to reverse end <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Capacity:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">empty</span></div><div class="ct1_d3">Checks whether the container is empty <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">size</span></div><div class="ct1_d3">Return container size <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">max_size</span></div><div class="ct1_d3">Return maximum size <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Element access:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">operator[] </span></div><div class="ct1_d3">Access element <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">at </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Access element with bounds checking <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Modifiers:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">insert</span></div><div class="ct1_d3">Insert elements <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">erase</span></div><div class="ct1_d3">Erase elements <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">swap</span></div><div class="ct1_d3">Swap content <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">clear</span></div><div class="ct1_d3">Clear content <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">emplace </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Construct and insert element <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">emplace_hint </span><span class="ct1_s2">(c++11)</span></div><div class="ct1_d3">Construct and insert element with hint <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Operations:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">find</span></div><div class="ct1_d3">Get iterator to element <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">count</span></div><div class="ct1_d3">Return the count of elements with a specific key <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">lower_bound</span></div><div class="ct1_d3">Return iterator to lower bound <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">upper_bound</span></div><div class="ct1_d3">Return iterator to upper bound <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">equal_range</span></div><div class="ct1_d3">Get range of equal elements <span class="ct1_s3">(public member function)</span></div></div>
        <br/>
        <div><b>Observers:</b></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">key_comp</span></div><div class="ct1_d3">Return key comparison object <span class="ct1_s3">(public member function)</span></div></div>
        <div class="ct1_d1"><div class="ct1_d2"><span class="ct1_s1">value_comp</span></div><div class="ct1_d3">Return value comparison object <span class="ct1_s3">(public member function)</span></div></div>
      </div>

      <h3>map::find</h3>
      <p>Searches the container for an element with a key equivalent to k and returns an iterator to it if found, otherwise it returns an iterator to map::end.</p>
      <code class="c++" code-include="/code/cpp/containers/map/find.txt"></code>

    </div> <!-- END cpp_map -->

  </div>
</div>


<style>
.ct1_d {
  width: 60%;
  font-size: 12px;
}
.ct1_d div {
  box-sizing: border-box;
}
.ct1_d1 {
  margin-top: 3px;
  margin-bottom: 3px;
}
.ct1_d2 {
  width: 20%;
  display: inline-block;
  background-color: #f0f0f0;
  border: 1px solid silver;
  padding: 1px 3px;
}
.ct1_d3 {
  width: 80%;
  display: inline-block;
  background-color: #fff;
  padding: 1px 3px;
  border: 1px solid silver;
  border-left: 1px solid #fff;
}
.ct1_s1 {
  cursor: pointer;
  font-weight: bold;
  color: #000070;
}
.ct1_s2 {
  font-size: 10px;
  color: green;
}
.ct1_s3 {
  color: green;
}

</style>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>