<?php
/**
 * fare dei test utilizzando html_entity_decode
 */
print html_entity_decode("da &lt; test &gt;");
print PHP_EOL;

print htmlentities("<div>");

#da < test >
//&lt;div&gt;