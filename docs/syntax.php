<?php include '../page/top.php'; ?>
<p>
    <span class="bigbig">ARES Syntax</span><br>
    As of 2022/04/30<br>
    <br>
    Legend: [Variable] (Optional)<br>
    <br>
    <br>
    <span class="big">Function / method declaration</span><br>
    Syntax : Func [function name] ( '(' [argument list] ')' ) (>> [return data type]) ... End / Return<br>
    <br>
    In ARES, a function starts with the keyword "Func" and ends with either "End" or "Return" depending on whether they should return a value.<br>
    To indicate that a function should return a value, the keyword ">>" is placed after the name of the function and its arguments;<br>
    the type following the keyword will become the return type of the function.
</p>
<div class="code">
    <span class="comment">// Definition of the program's entry point</span><br>
    <span class="keyword">Func</span> main<br>
    <span class="comment">// Code</span><br>
      <span class="keyword">End</span><br>
      <br>
      <span class="comment">// Definition of a method with arguments and a return type</span><br>
    <span class="keyword">Func</span> ReturnsInt(<span class="type">Int</span> x, <span class="type">Str</span> y) <span class="keyword">>></span> <span class="type">Int</span><br>
    <span class="comment">// Code</span><br>
      <span class="keyword">Return</span> z <span class="comment">// <- Is Int</span>
</div>
<p>
    <br>
    <span class="big">Variable declaration</span><br>
    Syntax : [data type] [variable name]<br>
    <br>
    To declare a variable in ARES, simply write the type followed by the variable's name.<br>
    The name of a variable cannot contain a space or any other white space characters.
</p>
<div class="code">
    <span class="type">Str</span> StringVariable<br>
</div>
<p>
    <br>
    <span class="big">Object declaration</span><br>
    Syntax : Obj [object name] ... End<br>
    <br>
    In order to make your own object (i.e. class), the process is pretty similar to the declaration of a function,<br>
    but instead of the "Func" keyword, the "Obj" keyword is used.
</p>
<div class="code">
    <span class="keyword">Obj</span> ThisIsAnObject<br>
    <span class="comment">// Code</span><br>
      <span class="keyword">End</span><br>
</div>
<?php include '../page/bottom.php'; ?>