<html>
<head>
    <script type="text/javascript"
            src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
<body>
    <?php

$link = new mysqli('127.0.0.1', 'root', '123456', 'test');

$sql = "select * fron user";


$Rult  = $link -> query('select * from USER ');
$Rult -> num_rows;//这个返回记录条数
while( $rs = $Rult -> fetch_array() ) {
    echo $rs['USER']."\n";

}

echo "33";
include_once "markdown.php";
$my_text = "<code> pythoan asd asd asdasd</code> ";
$my_html = Markdown($my_text);
echo $my_html;
?>
<p style="text-align:center"></p>
    $$ x = x^2$$
    \[ x^2 \]
    <p>The Lorenz Equations</p>
    \[\begin{matrix}
    \dot{x} &#038; = &#038; \sigma(y-x) \\
    \dot{y} &#038; = &#038; \rho x - y - xz \\
    \dot{z} &#038; = &#038; -\beta z + xy
    \end{matrix} \]

    <p>The Cauchy-Schwarz Inequality</p>

    \[ \left( \sum_{k=1}^n a_k b_k \right)^2 \leq \left( \sum_{k=1}^n a_k^2 \right) \left( \sum_{k=1}^n b_k^2 \right) \]

    <p>A Cross Product Formula</p>

    \[\mathbf{V}_1 \times \mathbf{V}_2 =  \begin{vmatrix}
    \mathbf{i} &#038; \mathbf{j} &#038; \mathbf{k} \\
    \frac{\partial X}{\partial u} &#038;  \frac{\partial Y}{\partial u} &#038; 0 \\               \frac{\partial X}{\partial v} &#038;  \frac{\partial Y}{\partial v} &#038; 0
    \end{vmatrix}  \]

    <p>The probability of getting \(k\) heads when flipping \(n\) coins is: </p>

    \[P(E)   = {n \choose k} p^k (1-p)^{ n-k} \]

    <p>An Identity of Ramanujan</p>
    \[ \frac{1}{(\sqrt{\phi \sqrt{5}}-\phi) e^{\frac25 \pi}} =
    1+\frac{e^{-2\pi}} {1+\frac{e^{-4\pi}} {1+\frac{e^{-6\pi}}
    {1+\frac{e^{-8\pi}} {1+\ldots} } } } \]

</body>
</html>