<?php
?>

$channel=<<<_XML_

<channel>
<title>What's For Dinner</title>
<link>http://menu.example.com/</link>
<description>Choose what to eat tonight</description>
</channel>

_XML_;

echo <<<END
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Minus omnis voluptatem praesentium explicabo odit
      inventore consequatur doloribus quos odio ut 
      placeat aperiam neque iure nulla sunt magnam,
       voluptates atque eligendi!
END;
print $channel;
?>


