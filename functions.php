<?php
function inputTag($type,$value,$class){
    echo "<input type='$type' value='$value' class ='$class'>";
}
function inputOpen()
{echo "<form>";
}
function inputClose()
{echo "</form>";
}
function inputButton()
{echo "<input type='submit'>";
}