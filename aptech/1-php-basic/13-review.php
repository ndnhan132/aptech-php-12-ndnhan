<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>13. REVIEW</h1>";
/* EXERCISE :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];

+ At least 5 authors.

2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.

3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.

 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$authors= [
    [
        "name"=>"aaa",
        "age"=>"23",
        "post-quantity"=>"15"
    ],
    [
        "name"=>"ccc",
        "age"=>"23",
        "post-quantity"=>"15"
    ],
    [
        "name"=>"bbb",
        "age"=>"23",
        "post-quantity"=>"15"
    ],
    [
        "name"=>"eee",
        "age"=>"23",
        "post-quantity"=>"15"
    ],
    [
        "name"=>"rrr",
        "age"=>"23",
        "post-quantity"=>"15"
    ]
    ];
echo '<table class="table">';
echo "<thead>";
  echo "<tr>";
  echo '<th scope="col">#</th>';
  echo '<th scope="col">Name</th>';
  echo '<th scope="col">Age</th>';
  echo '<th scope="col">Posts Quantity</th>';
  echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach($authors as $mem){
    // foreach($mem as $k){
        echo "<tr>";
        echo '<th scope="row"></th>';
        echo '<td>"$mem['name']"</td>';
        echo '<td>Otto</td>';
        echo '<td>@mdo</td>';
        echo "<tr>";
    // }
}
echo "</tbody>";
echo "</table>";