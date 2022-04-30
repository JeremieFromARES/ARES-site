<?php include '../page/top.php'; ?>
<p>
    <span class="bigbig">ARES Keywords</span><br>
    As of 2022/04/30<br>
    <br>
    <span class="big">Func</span><br>
    Used to indicate the start of a function.<br>
    It is followed by the function's name as well as, optionally, arguments and a return type.
</p>
<div class="code">
    <span class="comment">// Func used in a function's declaration.</span><br>
    <span class="keyword">Func</span> main<br>
    <span class="comment">// Code</span><br>
    <span class="keyword">End</span><br>
    <br>
    <span class="comment">// Func followed by arguments and a return type.</span><br>
    <span class="keyword">Func</span> ReturnsInt(<span class="type">Int</span> x, <span class="type">Str</span> y) <span class="keyword">>></span> <span class="type">Int</span><br>
    <span class="comment">// Code</span><br>
    <span class="keyword">Return</span> z <span class="comment">// <- Is Int</span>
</div>
<p>
</p>
<?php include '../page/bottom.php'; ?>